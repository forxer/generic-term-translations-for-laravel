<?php

declare(strict_types=1);

namespace Tests;

use GenericTermTranslations\Tools\Glossary\GlossaryBuilder;
use GenericTermTranslations\Tools\Glossary\MarkdownRenderer;
use PHPUnit\Framework\TestCase;

class GlossaryUpToDateTest extends TestCase
{
    public function test_the_committed_glossary_matches_the_sources_and_locales(): void
    {
        $basePath = \dirname(__DIR__);

        $expected = (new MarkdownRenderer())->render((new GlossaryBuilder($basePath))->build());

        $this->assertSame(
            $expected,
            file_get_contents($basePath.'/GLOSSARY.md'),
            'GLOSSARY.md is out of date: run `composer glossary` and commit the result.'
        );
    }
}
