<?php

declare(strict_types=1);

namespace GenericTermTranslations;

use GenericTermTranslations\Plugins\Main;
use LaravelLang\Publisher\Plugins\Provider;

class Plugin extends Provider
{
    protected ?string $package_name = 'forxer/generic-term-translations-for-laravel';

    protected string $base_path = __DIR__.'/../';

    protected array $plugins = [
        Main::class,
    ];
}
