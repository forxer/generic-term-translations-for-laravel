<?php

declare(strict_types=1);

namespace GenericTermTranslations\Glossary;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Symfony\Component\Finder\SplFileInfo;
use \InvalidArgumentException;

class Generator
{
    public const BASE_DIR = __DIR__.'/../../';

    public const NUMBER_TERMS_PER_SUMMARY_LINE = 5;

    protected array $files = [];

    protected string $summary = '';

    protected string $filesContent = '';

    public function __construct()
    {
        $this->files = File::allFiles(static::BASE_DIR.'/source');
    }

    public function generateFile()
    {
        foreach ($this->files as $file) {
            $this->processFile($file);
        }

        $fileContent = "# Glossary\n\n\n";
        $fileContent .= $this->summary();
        $fileContent .= "\n\n";
        $fileContent .= $this->content();

        File::put(static::BASE_DIR.'/GLOSSARY.md', $fileContent);
    }

    private function processFile(SplFileInfo $file)
    {
        $fileBasename = Str::of($file->getFilename())->basename('.php');
        $fileTittle = $fileBasename->title();

        $this->summary(sprintf('[**%s**](#%s)', $fileTittle, $fileBasename->slug()), 2);

        $this->content("## {$fileTittle}", 2);

        $this->processFileTerms($fileBasename, require $file->getPathname());
    }

    private function processFileTerms(Stringable $fileBasename, array $terms)
    {
        $termGroups = array_chunk($terms, static::NUMBER_TERMS_PER_SUMMARY_LINE, true);

        $this->summary(str_repeat('|         ', static::NUMBER_TERMS_PER_SUMMARY_LINE).'|');
        $this->summary(str_repeat('| :-----: ', static::NUMBER_TERMS_PER_SUMMARY_LINE).'|');

        $summaryTerms = [];

        foreach ($termGroups as $terms) {
            foreach ($terms as $key => $value) {
                $keyString = Str::of($key);
                $termTitle = $keyString->title()->replace('_', ' ')->toString();

                $summaryTerms[] = sprintf('[%s](#%s)', $termTitle, $keyString->slug());

                $this->processTerm($fileBasename, $termTitle, $key, $value);
            }

            $this->addToSummary($summaryTerms);
        }

        $this->summary('', 2);
    }

    private function addToSummary(array &$summaryTerms,)
    {
        for ($i=0; $i < static::NUMBER_TERMS_PER_SUMMARY_LINE; $i++) {
            if (empty($summaryTerms[$i])) {
                $summaryTerms[] = ' ';
            }
        }

        if (count($summaryTerms) == static::NUMBER_TERMS_PER_SUMMARY_LINE) {
            $this->summary('|'.implode('|', $summaryTerms).'|');
            $summaryTerms = [];
        }
    }

    private function processTerm(Stringable $fileBasename, string $termTitle, string $key, string $value)
    {
        $this->content("### {$termTitle}", 2);
        $this->content('<details>');
        $this->content("<summary>Click for details and usage of {$termTitle}</summary>", 2);
        $this->content("- Key: `'{$key}'`");
        $this->content("- Value: `'{$value}'`");
        $this->content("- Usage: `'{$fileBasename->toString()}.{$key}'`", 2);
        $this->content($this->usage($fileBasename->toString(), $key, $value), 0);
        $this->content('</details>', 2);
        $this->backTop();

        $loopCount = 0;
    }

    private function usage(string $basename, string $key, string $value): string
    {
        $returnString = '';

        preg_match_all('/(:[a-zA-Z_\-]+)/mu', $value, $paramaters);

        $paramaters = $paramaters[0];

        $returnString = "```php\n";

        if (! empty($paramaters)) {

            // usage example with string
            $paramatersString = ", [\n";

            foreach ($paramaters as $paramater) {
                $paramaterString = Str::of($paramater);
                $paramatersString .= "    '{$paramaterString->replaceFirst(':', '')}' => '{$paramaterString->replaceFirst(':', '')}',\n";
            }

            $paramatersString .= "]";

            $returnString .= "trans('{$basename}.{$key}'{$paramatersString});\n\n";

            // usage example with variable
            $paramatersString = ", [\n";

            foreach ($paramaters as $paramater) {
                $paramaterString = Str::of($paramater);
                $paramatersString .= "    '{$paramaterString->replaceFirst(':', '')}' => e({$paramaterString->replaceFirst(':', '$')}),\n";
            }

            $paramatersString .= "]";

            $returnString .= "trans('{$basename}.{$key}'{$paramatersString});\n";

        } else {
            $returnString .= "trans('{$basename}.{$key}');\n";
        }

        $returnString .= "```\n\n";

        return $returnString;
    }

    private function backTop()
    {
        $this->content('[Back to top ^](#glossary)', 2);
    }

    private function summary(?string $string = null, int $numLineBreack = 1)
    {
        return $this->concat($string, $numLineBreack, 'summary');
    }

    private function content(?string $string = null, int $numLineBreack = 1)
    {
        return $this->concat($string, $numLineBreack, 'filesContent');
    }

    private function concat(?string $string = null, int $numLineBreack = 1, string $stack = '')
    {
        if (! isset($this->$stack)) {
            throw new InvalidArgumentException('You should append string to either "content" or "summary" stack');
        }

        if ($string === null) {
            return $this->$stack;
        }

        $this->$stack .= $string;

        for ($i=0; $i < $numLineBreack; $i++) {
            $this->$stack .= "\n";
        }
    }
}
