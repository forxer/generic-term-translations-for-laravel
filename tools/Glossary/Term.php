<?php

declare(strict_types=1);

namespace GenericTermTranslations\Tools\Glossary;

/**
 * A single translation key with its value in every known locale.
 */
final readonly class Term
{
    /** @var Placeholder[] */
    public array $placeholders;

    /**
     * @param  array<string,?string>  $values  locale code => translated value, null when the locale
     *                                         does not translate this key
     */
    public function __construct(public string $key, public array $values)
    {
        $this->placeholders = Placeholder::extractFrom(self::firstTranslatedValue($values));
    }

    public function value(string $locale): ?string
    {
        return $this->values[$locale] ?? null;
    }

    public function hasPlaceholders(): bool
    {
        return $this->placeholders !== [];
    }

    /**
     * Placeholders are part of the key definition, so any translated value carries them.
     * The first one available is used, which is the reference locale unless it is missing.
     *
     * @param  array<string,?string>  $values
     */
    private static function firstTranslatedValue(array $values): string
    {
        foreach ($values as $value) {
            if ($value !== null) {
                return $value;
            }
        }

        return '';
    }
}
