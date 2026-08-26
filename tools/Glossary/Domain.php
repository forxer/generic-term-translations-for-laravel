<?php

declare(strict_types=1);

namespace GenericTermTranslations\Tools\Glossary;

/**
 * One `source/*.php` file and the terms it defines, in the order of the file.
 */
final readonly class Domain
{
    public string $title;

    /**
     * @param  Term[]  $terms
     */
    public function __construct(public string $name, public array $terms)
    {
        $this->title = ucwords(str_replace(['_', '-'], ' ', $name));
    }

    /**
     * The anchor GitHub derives from the `## {title}` heading.
     */
    public function anchor(): string
    {
        return strtolower(str_replace(' ', '-', $this->title));
    }

    /**
     * @return Term[]
     */
    public function parameterizedTerms(): array
    {
        return array_values(array_filter(
            $this->terms,
            static fn (Term $term): bool => $term->hasPlaceholders()
        ));
    }
}
