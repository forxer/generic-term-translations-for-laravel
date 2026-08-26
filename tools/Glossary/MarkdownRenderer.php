<?php

declare(strict_types=1);

namespace GenericTermTranslations\Tools\Glossary;

/**
 * Turns a Glossary into the Markdown of GLOSSARY.md. Never touches the disk.
 */
final class MarkdownRenderer
{
    private const UNTRANSLATED = '—';

    public function render(Glossary $glossary): string
    {
        $blocks = [
            '# Glossary',
            $this->header($glossary),
            $this->contents($glossary),
        ];

        foreach ($glossary->domains as $domain) {
            $blocks[] = '## '.$domain->title;
            $blocks[] = $this->table($domain, $glossary->locales);

            if ($domain->parameterizedTerms() !== []) {
                $blocks[] = $this->usage($domain);
            }
        }

        return implode("\n\n", $blocks)."\n";
    }

    private function header(Glossary $glossary): string
    {
        $stats = [
            $this->plural($glossary->termCount(), 'term'),
            $this->plural(\count($glossary->domains), 'domain'),
        ];

        foreach ($glossary->locales as $locale) {
            $stats[] = \sprintf('%s %d/%d', $locale, $glossary->translatedCount($locale), $glossary->termCount());
        }

        return '> '.implode(' · ', $stats)."\n"
            .'> Generated file — run `composer glossary` after editing `source/`.';
    }

    private function contents(Glossary $glossary): string
    {
        return implode("\n", array_map(
            fn (Domain $domain): string => \sprintf(
                '- [%s](#%s) — %s',
                $domain->title,
                $domain->anchor(),
                $this->plural(\count($domain->terms), 'term')
            ),
            $glossary->domains
        ));
    }

    /**
     * @param  string[]  $locales
     */
    private function table(Domain $domain, array $locales): string
    {
        $columns = ['Key', ...$locales, 'Params'];

        $rows = [
            $this->row($columns),
            $this->row(array_fill(0, \count($columns), '---')),
        ];

        foreach ($domain->terms as $term) {
            $rows[] = $this->row([
                \sprintf('`%s`', $term->key),
                ...array_map(
                    fn (string $locale): string => $this->cell($term->value($locale)),
                    $locales
                ),
                $this->params($term),
            ]);
        }

        return implode("\n", $rows);
    }

    /**
     * @param  string[]  $cells
     */
    private function row(array $cells): string
    {
        return '|'.implode('|', array_map(
            static fn (string $cell): string => $cell === '' ? ' ' : ' '.$cell.' ',
            $cells
        )).'|';
    }

    private function cell(?string $value): string
    {
        if ($value === null) {
            return self::UNTRANSLATED;
        }

        if ($value === '') {
            return '`(empty)`';
        }

        // A value made only of spaces — the French thousands separator is a non-breaking
        // space — would render as a cell indistinguishable from an untranslated one.
        if (preg_match('/^[\pZ\s]+$/u', $value) === 1) {
            return \sprintf('`%s`', $this->codePoints($value));
        }

        return str_replace('|', '\|', $value);
    }

    private function codePoints(string $value): string
    {
        return implode(' ', array_map(
            static fn (string $character): string => \sprintf('U+%04X', mb_ord($character, 'UTF-8')),
            preg_split('//u', $value, flags: PREG_SPLIT_NO_EMPTY) ?: []
        ));
    }

    private function params(Term $term): string
    {
        return implode(', ', array_map(
            static fn (Placeholder $placeholder): string => \sprintf('`:%s`', $placeholder->name),
            $term->placeholders
        ));
    }

    private function usage(Domain $domain): string
    {
        $examples = array_map(
            fn (Term $term): string => $this->example($domain->name, $term),
            $domain->parameterizedTerms()
        );

        return "<details>\n"
            ."<summary>Usage examples for parameterized keys</summary>\n\n"
            ."```php\n"
            .implode("\n", $examples)."\n"
            ."```\n\n"
            .'</details>';
    }

    private function example(string $domainName, Term $term): string
    {
        $arguments = array_map(
            static fn (Placeholder $placeholder): string => \sprintf(
                "'%s' => e($%s),",
                $placeholder->name,
                $placeholder->variable
            ),
            $term->placeholders
        );

        if (\count($arguments) === 1) {
            return \sprintf(
                "trans('%s.%s', [%s]);",
                $domainName,
                $term->key,
                rtrim($arguments[0], ',')
            );
        }

        return \sprintf(
            "trans('%s.%s', [\n    %s\n]);",
            $domainName,
            $term->key,
            implode("\n    ", $arguments)
        );
    }

    private function plural(int $count, string $noun): string
    {
        return \sprintf('%d %s%s', $count, $noun, $count === 1 ? '' : 's');
    }
}
