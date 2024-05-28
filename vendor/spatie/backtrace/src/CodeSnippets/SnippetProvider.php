<?php

namespace SisLaravelMain\vendor\spatie\backtrace\src\CodeSnippets;

interface SnippetProvider
{
    public function numberOfLines(): int;

    public function getLine(int $lineNumber = null): string;

    public function getNextLine(): string;
}
