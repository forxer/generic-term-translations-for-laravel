<?php

declare(strict_types=1);

namespace GenericTermTranslations\Glossary;

use Illuminate\Support\Facades\File;

class Generator
{
    public const SOURCE_DIR = __DIR__.'/../source';

    public const FILENAME = 'GLOASSARY.md';

    public function build()
    {
        $files = File::allFiles(static::SOURCE_DIR);

        dump($files);
    }
}
