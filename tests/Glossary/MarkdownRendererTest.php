<?php

declare(strict_types=1);

namespace Tests\Glossary;

use GenericTermTranslations\Tools\Glossary\Domain;
use GenericTermTranslations\Tools\Glossary\Glossary;
use GenericTermTranslations\Tools\Glossary\MarkdownRenderer;
use GenericTermTranslations\Tools\Glossary\Term;
use PHPUnit\Framework\TestCase;

class MarkdownRendererTest extends TestCase
{
    public function test_it_renders_a_whole_glossary(): void
    {
        $glossary = new Glossary([
            new Domain('action', [
                new Term('add', ['en' => 'Add', 'fr' => 'Ajouter']),
                new Term('add_something', ['en' => 'Add :something', 'fr' => 'Ajouter :something']),
            ]),
            new Domain('misc', [
                new Term('yes', ['en' => 'yes', 'fr' => null]),
            ]),
        ], ['en', 'fr']);

        $expected = <<<'MARKDOWN'
            # Glossary

            > 3 terms · 2 domains · en 3/3 · fr 2/3
            > Generated file — run `composer glossary` after editing `source/`.

            - [Action](#action) — 2 terms
            - [Misc](#misc) — 1 term

            ## Action

            | Key | en | fr | Params |
            | --- | --- | --- | --- |
            | `add` | Add | Ajouter | |
            | `add_something` | Add :something | Ajouter :something | `:something` |

            <details>
            <summary>Usage examples for parameterized keys</summary>

            ```php
            trans('action.add_something', ['something' => e($something)]);
            ```

            </details>

            ## Misc

            | Key | en | fr | Params |
            | --- | --- | --- | --- |
            | `yes` | yes | — | |

            MARKDOWN;

        $this->assertSame($expected, (new MarkdownRenderer())->render($glossary));
    }

    public function test_it_renders_an_untranslated_value_as_a_dash(): void
    {
        $markdown = $this->render(new Term('add', ['en' => 'Add', 'fr' => null]));

        $this->assertStringContainsString('| `add` | Add | — | |', $markdown);
    }

    public function test_it_escapes_a_pipe_inside_a_value(): void
    {
        $markdown = $this->render(new Term('separator', ['en' => 'a | b', 'fr' => 'a | b']));

        $this->assertStringContainsString('| `separator` | a \| b | a \| b | |', $markdown);
    }

    public function test_it_names_the_code_point_of_a_value_made_only_of_whitespace(): void
    {
        $markdown = $this->render(new Term('thousands_separator', ['en' => ',', 'fr' => "\u{00A0}"]));

        $this->assertStringContainsString('| `thousands_separator` | , | `U+00A0` | |', $markdown);
    }

    public function test_it_names_every_code_point_of_a_multi_character_whitespace_value(): void
    {
        $markdown = $this->render(new Term('spacer', ['en' => "\u{00A0} ", 'fr' => "\u{00A0} "]));

        $this->assertStringContainsString('`U+00A0 U+0020`', $markdown);
    }

    public function test_it_marks_an_empty_value_as_empty(): void
    {
        $markdown = $this->render(new Term('thousands_separator', ['en' => '', 'fr' => "\u{00A0}"]));

        $this->assertStringContainsString('| `thousands_separator` | `(empty)` | `U+00A0` | |', $markdown);
    }

    public function test_it_lists_every_placeholder_of_a_term(): void
    {
        $markdown = $this->render(new Term('credit', [
            'en' => 'Written by :author in :year',
            'fr' => 'Écrit par :author en :year',
        ]));

        $this->assertStringContainsString('| `:author`, `:year` |', $markdown);
    }

    public function test_it_omits_the_usage_block_of_a_domain_without_parameterized_term(): void
    {
        $markdown = $this->render(new Term('add', ['en' => 'Add', 'fr' => 'Ajouter']));

        $this->assertStringNotContainsString('<details>', $markdown);
        $this->assertStringNotContainsString('```php', $markdown);
    }

    public function test_it_renders_a_single_parameter_example_on_one_line(): void
    {
        $markdown = $this->render(new Term('add_something', [
            'en' => 'Add :something',
            'fr' => 'Ajouter :something',
        ]));

        $this->assertStringContainsString(
            "trans('action.add_something', ['something' => e(\$something)]);",
            $markdown
        );
    }

    public function test_it_renders_a_multi_parameter_example_on_several_lines(): void
    {
        $markdown = $this->render(new Term('credit', [
            'en' => 'Written by :author in :year',
            'fr' => 'Écrit par :author en :year',
        ]));

        $expected = <<<'PHP'
            trans('action.credit', [
                'author' => e($author),
                'year' => e($year),
            ]);
            PHP;

        $this->assertStringContainsString($expected, $markdown);
    }

    public function test_it_uses_a_valid_php_variable_for_a_hyphenated_parameter(): void
    {
        $markdown = $this->render(new Term('call_phone_number', [
            'en' => 'Call on phone the :phone-number',
            'fr' => 'Appeler le :phone-number',
        ]));

        $this->assertStringContainsString(
            "trans('action.call_phone_number', ['phone-number' => e(\$phoneNumber)]);",
            $markdown
        );
    }

    private function render(Term $term): string
    {
        return (new MarkdownRenderer())->render(
            new Glossary([new Domain('action', [$term])], ['en', 'fr'])
        );
    }
}
