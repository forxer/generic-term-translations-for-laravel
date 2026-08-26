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

        // Laravel substitutes the longest matching name, so a separator right before the
        // end of the placeholder is literal text: ":address-" names the parameter "address".
        $names = array_filter(array_map(
            static fn (string $name): string => rtrim($name, '-_'),
            $matches[1]
        ));

        return array_values(array_map(
            static fn (string $name): self => new self($name),
            array_unique($names)
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
