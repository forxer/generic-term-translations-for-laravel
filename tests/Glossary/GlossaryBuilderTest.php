<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Domain;
use GenericTermTranslations\Tools\Glossary\GlossaryBuilder;
use PHPUnit\Framework\TestCase;

class GlossaryBuilderTest extends TestCase
{
    private string $root;

    protected function setUp(): void
    {
        $this->root = sys_get_temp_dir().'/glossary-builder-'.uniqid();

        mkdir($this->root.'/source', recursive: true);
    }

    protected function tearDown(): void
    {
        foreach (glob($this->root.'/{source,locales/*}/*', GLOB_BRACE) ?: [] as $file) {
            unlink($file);
        }

        foreach (glob($this->root.'/{source,locales/*,locales}', GLOB_BRACE) ?: [] as $directory) {
            rmdir($directory);
        }

        rmdir($this->root);
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

    public function test_it_ignores_a_locale_key_that_no_source_file_defines(): void
    {
        $this->writeSource('action', ['add' => 'Add']);
        $this->writeLocale('en', ['add' => 'Add', 'orphan' => 'Orphan']);

        $terms = (new GlossaryBuilder($this->root))->build()->domains[0]->terms;

        $this->assertSame(['add'], array_column($terms, 'key'));
    }

    /**
     * @param  array<string,string>  $terms
     */
    private function writeSource(string $name, array $terms): void
    {
        file_put_contents(
            $this->root.'/source/'.$name.'.php',
            '<?php return '.var_export($terms, true).';'
        );
    }

    /**
     * @param  array<string,string>  $terms
     */
    private function writeLocale(string $locale, array $terms): void
    {
        mkdir($this->root.'/locales/'.$locale, recursive: true);

        file_put_contents(
            $this->root.'/locales/'.$locale.'/php.json',
            json_encode($terms, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }
}
