<?php

declare(strict_types=1);

namespace GenericTermTranslations\Plugins;

use LaravelLang\Publisher\Plugins\Plugin;

class Main extends Plugin
{
    public function files(): array
    {
        return [
            'action.php' => '{locale}/action.php',
            'back.php' => '{locale}/back.php',
            'civilities.php' => '{locale}/civilities.php',
            'email.php' => '{locale}/email.php',
            'env.php' => '{locale}/env.php',
            'errors.php' => '{locale}/errors.php',
            'misc.php' => '{locale}/misc.php',
            'number.php' => '{locale}/number.php',
            'placeholder.php' => '{locale}/placeholder.php',
            'status.php' => '{locale}/status.php',
            'unit.php' => '{locale}/unit.php',
        ];
    }
}
