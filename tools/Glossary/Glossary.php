<?php

declare(strict_types=1);

namespace GenericTermTranslations\Tools\Glossary;

/**
 * Every term of the package, grouped by domain, in every known locale.
 */
final readonly class Glossary
{
    /**
     * @param  Domain[]  $domains
     * @param  string[]  $locales  locale codes, reference locale first
     */
    public function __construct(public array $domains, public array $locales) {}

    public function termCount(): int
    {
        return array_sum(array_map(
            static fn (Domain $domain): int => \count($domain->terms),
            $this->domains
        ));
    }

    public function translatedCount(string $locale): int
    {
        $count = 0;

        foreach ($this->domains as $domain) {
            foreach ($domain->terms as $term) {
                if ($term->value($locale) !== null) {
                    $count++;
                }
            }
        }

        return $count;
    }
}
