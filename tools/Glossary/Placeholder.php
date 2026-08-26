<?php

declare(strict_types=1);

namespace GenericTermTranslations\Tools\Glossary;

/**
 * A `:parameter` found in a translation value.
 *
 * `name` is the key Laravel substitutes and must never be altered.
 * `variable` is the same name made usable as a PHP variable in code examples.
 */
final readonly class Placeholder
{
    public string $variable;

    public function __construct(public string $name)
    {
        $this->variable = self::toVariableName($name);
    }

    /**
     * Digits are deliberately excluded from the character class so that a time
     * such as "10:30" is not mistaken for a placeholder.
     *
     * @return self[]
     */
    public static function extractFrom(string $value): array
    {
        preg_match_all('/:([a-zA-Z_-]+)/u', $value, $matches);

        return array_values(array_map(
            static fn (string $name): self => new self($name),
            array_unique($matches[1])
        ));
    }

    private static function toVariableName(string $name): string
    {
        if (preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $name) === 1) {
            return $name;
        }

        $segments = preg_split('/[^a-zA-Z0-9]+/', $name, flags: PREG_SPLIT_NO_EMPTY) ?: [];

        return array_shift($segments).implode('', array_map(\ucfirst(...), $segments));
    }
}
