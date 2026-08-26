<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Domain;
use GenericTermTranslations\Tools\Glossary\GlossaryBuilder;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class GlossaryBuilderTest extends TestCase
{
    private string $root;

    protected function setUp(): void
    {
        $this->root = sys_get_temp_dir().'/glossary-builder-'.uniqid('', true);

        mkdir($this->root, recursive: true);
    }

    protected function tearDown(): void
    {
        $this->delete($this->root);
    }

    public function test_it_builds_one_domain_per_source_file_in_alphabetical_order(): void
    {
        $this->writeSource('misc', ['yes' => 'yes']);
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeLocale('en', ['yes' => 'yes', 'add' => 'Add']);

        $glossary = (new GlossaryBuilder($this->root))->build();

        $this->assertSame(
            ['action', 'misc'],
            array_map(static fn (Domain $domain): string => $domain->name, $glossary->domains)
        );
    }

    public function test_it_keeps_the_keys_in_the_order_of_the_source_file(): void
    {
        $this->writeSource('action', ['edit' => 'Edit', 'add' => 'Add', 'delete' => 'Delete']);
        $this->writeLocale('en', ['add' => 'Add', 'delete' => 'Delete', 'edit' => 'Edit']);

        $terms = (new GlossaryBuilder($this->root))->build()->domains[0]->terms;

        $this->assertSame(['edit', 'add', 'delete'], array_column($terms, 'key'));
    }

    public function test_it_takes_the_values_from_the_locales_and_not_from_the_source(): void
    {
        $this->writeSource('action', ['add' => 'outdated source value']);
        $this->writeLocale('en', ['add' => 'Add']);
        $this->writeLocale('fr', ['add' => 'Ajouter']);

        $term = (new GlossaryBuilder($this->root))->build()->domains[0]->terms[0];

        $this->assertSame('Add', $term->value('en'));
        $this->assertSame('Ajouter', $term->value('fr'));
    }

    public function test_it_reports_a_key_missing_from_a_locale_as_untranslated(): void
    {
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeLocale('en', ['add' => 'Add']);
        $this->writeLocale('fr', []);

        $term = (new GlossaryBuilder($this->root))->build()->domains[0]->terms[0];

        $this->assertSame('Add', $term->value('en'));
        $this->assertNull($term->value('fr'));
    }

    public function test_it_orders_locales_with_the_reference_one_first(): void
    {
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeLocale('fr', ['add' => 'Ajouter']);
        $this->writeLocale('de', ['add' => 'Hinzufügen']);
        $this->writeLocale('en', ['add' => 'Add']);

        $this->assertSame(['en', 'de', 'fr'], (new GlossaryBuilder($this->root))->build()->locales);
    }

    public function test_it_orders_locales_alphabetically_when_the_reference_one_is_missing(): void
    {
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeLocale('fr', ['add' => 'Ajouter']);
        $this->writeLocale('de', ['add' => 'Hinzufügen']);

        $this->assertSame(['de', 'fr'], (new GlossaryBuilder($this->root))->build()->locales);
    }

    public function test_it_ignores_a_locale_key_that_no_source_file_defines(): void
    {
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeLocale('en', ['add' => 'Add', 'orphan' => 'Orphan']);

        $terms = (new GlossaryBuilder($this->root))->build()->domains[0]->terms;

        $this->assertSame(['add'], array_column($terms, 'key'));
    }

    public function test_it_rejects_a_source_file_that_does_not_return_an_array(): void
    {
        $this->writeFile('source/action.php', '<?php return "not an array";');
        $this->writeLocale('en', []);

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('does not return an array');

        (new GlossaryBuilder($this->root))->build();
    }

    public function test_it_rejects_a_locale_file_that_does_not_contain_a_json_object(): void
    {
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeFile('locales/en/php.json', '{ not json');

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('does not contain a JSON object');

        (new GlossaryBuilder($this->root))->build();
    }

    /**
     * @param  array<string,string>  $terms
     */
    private function writeSource(string $name, array $terms): void
    {
        $this->writeFile('source/'.$name.'.php', '<?php return '.var_export($terms, true).';');
    }

    /**
     * @param  array<string,string>  $terms
     */
    private function writeLocale(string $locale, array $terms): void
    {
        $this->writeFile(
            'locales/'.$locale.'/php.json',
            (string) json_encode($terms, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }

    private function writeFile(string $relativePath, string $contents): void
    {
        $path = $this->root.'/'.$relativePath;

        if (! is_dir(\dirname($path))) {
            mkdir(\dirname($path), recursive: true);
        }

        file_put_contents($path, $contents);
    }

    private function delete(string $path): void
    {
        if (! is_dir($path)) {
            unlink($path);

            return;
        }

        foreach (glob($path.'/*') ?: [] as $child) {
            $this->delete($child);
        }

        rmdir($path);
    }
}
