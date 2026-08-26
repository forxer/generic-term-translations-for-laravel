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
        return \count($this->terms());
    }

    public function translatedCount(string $locale): int
    {
        return \count(array_filter(
            $this->terms(),
            static fn (Term $term): bool => $term->value($locale) !== null
        ));
    }

    /**
     * Every term of every domain, flattened.
     *
     * @return Term[]
     */
    private function terms(): array
    {
        return array_merge(...array_map(
            static fn (Domain $domain): array => $domain->terms,
            $this->domains
        ));
    }
}
