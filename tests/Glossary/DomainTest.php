<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Domain;
use GenericTermTranslations\Tools\Glossary\Term;
use PHPUnit\Framework\TestCase;

class DomainTest extends TestCase
{
    public function test_it_titles_its_name(): void
    {
        $domain = new Domain('action', []);

        $this->assertSame('action', $domain->name);
        $this->assertSame('Action', $domain->title);
    }

    public function test_it_titles_a_name_made_of_several_words(): void
    {
        $domain = new Domain('date_format', []);

        $this->assertSame('Date Format', $domain->title);
    }

    public function test_its_anchor_matches_the_one_github_derives_from_the_title(): void
    {
        $this->assertSame('action', (new Domain('action', []))->anchor());
        $this->assertSame('date-format', (new Domain('date_format', []))->anchor());
    }

    public function test_it_reports_no_parameterized_term_when_it_has_none(): void
    {
        $domain = new Domain('action', [new Term('add', ['en' => 'Add'])]);

        $this->assertSame([], $domain->parameterizedTerms());
    }

    public function test_it_lists_only_its_parameterized_terms(): void
    {
        $domain = new Domain('action', [
            new Term('add', ['en' => 'Add']),
            new Term('add_something', ['en' => 'Add :something']),
            new Term('edit_something', ['en' => 'Edit :something']),
        ]);

        $this->assertSame(
            ['add_something', 'edit_something'],
            array_map(static fn (Term $term): string => $term->key, $domain->parameterizedTerms())
        );
    }
}
