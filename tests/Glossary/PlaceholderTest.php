<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Placeholder;
use PHPUnit\Framework\TestCase;

class PlaceholderTest extends TestCase
{
    public function test_it_keeps_a_name_that_is_already_a_valid_php_identifier(): void
    {
        $placeholder = new Placeholder('something');

        $this->assertSame('something', $placeholder->name);
        $this->assertSame('something', $placeholder->variable);
    }

    public function test_it_keeps_underscores_which_php_allows_in_identifiers(): void
    {
        $placeholder = new Placeholder('first_name');

        $this->assertSame('first_name', $placeholder->variable);
    }

    public function test_it_camel_cases_a_name_containing_a_hyphen(): void
    {
        $placeholder = new Placeholder('phone-number');

        $this->assertSame('phone-number', $placeholder->name);
        $this->assertSame('phoneNumber', $placeholder->variable);
    }

    public function test_it_extracts_a_placeholder_from_a_value(): void
    {
        $this->assertSame(['something'], $this->namesExtractedFrom('Add :something'));
    }

    public function test_it_extracts_nothing_from_a_value_without_placeholder(): void
    {
        $this->assertSame([], $this->namesExtractedFrom('Add'));
    }

    public function test_it_extracts_a_hyphenated_placeholder(): void
    {
        $this->assertSame(['phone-number'], $this->namesExtractedFrom('Call on phone the :phone-number'));
    }

    public function test_it_extracts_a_placeholder_surrounded_by_quotes(): void
    {
        $this->assertSame(['string'], $this->namesExtractedFrom('":string"'));
    }

    public function test_it_does_not_mistake_a_time_for_a_placeholder(): void
    {
        $this->assertSame([], $this->namesExtractedFrom('Doors open at 10:30'));
    }

    public function test_it_does_not_mistake_a_trailing_colon_for_a_placeholder(): void
    {
        $this->assertSame([], $this->namesExtractedFrom('Mandatory fields are indicated by:'));
    }

    public function test_it_extracts_several_placeholders_in_order(): void
    {
        $this->assertSame(['author', 'year'], $this->namesExtractedFrom('Written by :author in :year'));
    }

    public function test_it_extracts_a_repeated_placeholder_only_once(): void
    {
        $this->assertSame(['name'], $this->namesExtractedFrom('Hello :name, goodbye :name'));
    }

    public function test_it_drops_a_separator_trailing_the_placeholder(): void
    {
        $this->assertSame(['address'], $this->namesExtractedFrom('See :address- now'));
        $this->assertSame(['address'], $this->namesExtractedFrom('See :address_ now'));
    }

    public function test_it_extracts_nothing_from_a_colon_followed_only_by_separators(): void
    {
        $this->assertSame([], $this->namesExtractedFrom('A rule written as :--- here'));
    }

    /**
     * @return string[]
     */
    private function namesExtractedFrom(string $value): array
    {
        return array_map(
            static fn (Placeholder $placeholder): string => $placeholder->name,
            Placeholder::extractFrom($value)
        );
    }
}
