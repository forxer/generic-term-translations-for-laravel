<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Domain;
use GenericTermTranslations\Tools\Glossary\Glossary;
use GenericTermTranslations\Tools\Glossary\Term;
use PHPUnit\Framework\TestCase;

class GlossaryTest extends TestCase
{
    public function test_it_counts_the_terms_of_every_domain(): void
    {
        $glossary = new Glossary([
            new Domain('action', [new Term('add', ['en' => 'Add']), new Term('edit', ['en' => 'Edit'])]),
            new Domain('misc', [new Term('yes', ['en' => 'yes'])]),
        ], ['en']);

        $this->assertSame(3, $glossary->termCount());
        $this->assertCount(2, $glossary->domains);
    }

    public function test_it_counts_the_translated_terms_of_a_locale(): void
    {
        $glossary = new Glossary([
            new Domain('action', [
                new Term('add', ['en' => 'Add', 'fr' => 'Ajouter']),
                new Term('edit', ['en' => 'Edit', 'fr' => null]),
            ]),
        ], ['en', 'fr']);

        $this->assertSame(2, $glossary->translatedCount('en'));
        $this->assertSame(1, $glossary->translatedCount('fr'));
    }
}
