<?php

declare(strict_types=1);

namespace GenericTermTranslations\Console;

use GenericTermTranslations\Glossary\Generator;
use Illuminate\Console\Command;

class GenerateGlossary extends Command
{
    protected $signature = 'generic-term-translations:generate-glossary';

    protected $description = 'Generate glossary file with all generic term availables';

    protected Generator $generator;

    public function handdle(Generator $generator)
    {

    }
}
