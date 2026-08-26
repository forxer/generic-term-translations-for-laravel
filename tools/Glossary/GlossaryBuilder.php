<?php

declare(strict_types=1);

namespace GenericTermTranslations\Tools\Glossary;

use RuntimeException;

/**
 * Assembles a Glossary from the `source/` definitions and the `locales/` translations.
 *
 * Keys and their order come from `source/*.php`, which is the definition. Values come
 * from `locales/{locale}/php.json` — including English — so that every column shows what
 * a consuming application actually receives. Any divergence between the two is caught by
 * the PluginTest, not here.
 */
final readonly class GlossaryBuilder
{
    /**
     * Locale listed first in the glossary, all others following alphabetically.
     */
    public const REFERENCE_LOCALE = 'en';

    public function __construct(private string $basePath) {}

    public function build(): Glossary
    {
        $translations = $this->translations();
        $locales = array_keys($translations);

        $domains = [];

        foreach ($this->sourceFiles() as $file) {
            $domains[] = $this->domain($file, $translations, $locales);
        }

        return new Glossary($domains, $locales);
    }

    /**
     * @param  array<string,array<string,string>>  $translations
     * @param  string[]  $locales
     */
    private function domain(string $file, array $translations, array $locales): Domain
    {
        $terms = [];

        foreach ($this->definitions($file) as $key => $value) {
            $values = [];

            foreach ($locales as $locale) {
                $values[$locale] = $translations[$locale][$key] ?? null;
            }

            $terms[] = new Term((string) $key, $values);
        }

        return new Domain(basename($file, '.php'), $terms);
    }

    /**
     * @return string[]
     */
    private function sourceFiles(): array
    {
        $files = glob($this->basePath.'/source/*.php') ?: [];

        sort($files);

        return $files;
    }

    /**
     * @return array<string,string>
     */
    private function definitions(string $file): array
    {
        $definitions = require $file;

        if (! \is_array($definitions)) {
            throw new RuntimeException(\sprintf('Source file "%s" does not return an array.', $file));
        }

        return $definitions;
    }

    /**
     * @return array<string,array<string,string>> locale code => key => value
     */
    private function translations(): array
    {
        $translations = [];

        foreach (glob($this->basePath.'/locales/*/php.json') ?: [] as $file) {
            $translations[basename(\dirname($file))] = $this->decode($file);
        }

        ksort($translations);

        if (\array_key_exists(self::REFERENCE_LOCALE, $translations)) {
            $translations = [
                self::REFERENCE_LOCALE => $translations[self::REFERENCE_LOCALE],
                ...$translations,
            ];
        }

        return $translations;
    }

    /**
     * @return array<string,string>
     */
    private function decode(string $file): array
    {
        $decoded = json_decode((string) file_get_contents($file), true);

        if (! \is_array($decoded)) {
            throw new RuntimeException(\sprintf('Locale file "%s" does not contain a JSON object.', $file));
        }

        return $decoded;
    }
}
