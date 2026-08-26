<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Term;
use PHPUnit\Framework\TestCase;

class TermTest extends TestCase
{
    public function test_it_exposes_the_value_of_a_given_locale(): void
    {
        $term = new Term('add', ['en' => 'Add', 'fr' => 'Ajouter']);

        $this->assertSame('Add', $term->value('en'));
        $this->assertSame('Ajouter', $term->value('fr'));
    }

    public function test_it_returns_null_for_a_locale_that_does_not_translate_the_key(): void
    {
        $term = new Term('add', ['en' => 'Add', 'fr' => null]);

        $this->assertNull($term->value('fr'));
    }

    public function test_it_returns_null_for_an_unknown_locale(): void
    {
        $term = new Term('add', ['en' => 'Add']);

        $this->assertNull($term->value('de'));
    }

    public function test_it_has_no_placeholder_when_no_value_contains_one(): void
    {
        $term = new Term('add', ['en' => 'Add', 'fr' => 'Ajouter']);

        $this->assertSame([], $term->placeholders);
        $this->assertFalse($term->hasPlaceholders());
    }

    public function test_it_derives_its_placeholders_from_the_first_translated_value(): void
    {
        $term = new Term('add_something', ['en' => 'Add :something', 'fr' => 'Ajouter :something']);

        $this->assertTrue($term->hasPlaceholders());
        $this->assertCount(1, $term->placeholders);
        $this->assertSame('something', $term->placeholders[0]->name);
    }

    public function test_it_falls_back_to_a_later_locale_when_the_first_one_is_untranslated(): void
    {
        $term = new Term('add_something', ['en' => null, 'fr' => 'Ajouter :something']);

        $this->assertSame('something', $term->placeholders[0]->name);
    }

    public function test_it_has_no_placeholder_when_no_locale_translates_the_key(): void
    {
        $term = new Term('add_something', ['en' => null, 'fr' => null]);

        $this->assertSame([], $term->placeholders);
        $this->assertFalse($term->hasPlaceholders());
    }
}
