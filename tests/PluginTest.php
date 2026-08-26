<?php

declare(strict_types=1);

namespace Tests;

use LaravelLang\StatusGeneratorTests\TestCase as BaseTestCase;

class PluginTest extends BaseTestCase
{
    protected string $base_path = __DIR__.'/../';

    public function test_source_values_match_en_locale(): void
    {
        $locale = json_decode(file_get_contents(__DIR__.'/../locales/en/php.json'), true);

        foreach (glob(__DIR__.'/../source/*.php') as $file) {
            foreach (require $file as $key => $value) {
                $this->assertSame(
                    $value,
                    $locale[$key] ?? null,
                    \sprintf('Key "%s" from %s does not match the en locale.', $key, basename($file))
                );
            }
        }
    }
}
