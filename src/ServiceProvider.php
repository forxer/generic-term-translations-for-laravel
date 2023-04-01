<?php

declare(strict_types=1);

namespace GenericTermTranslations;

use GenericTermTranslations\Console\GenerateGlossary;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use LaravelLang\Publisher\Plugins\Provider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        if (class_exists(Provider::class)) {
            $this->app->register(Plugin::class);
        }
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands(GenerateGlossary::class);
        }
    }
}
