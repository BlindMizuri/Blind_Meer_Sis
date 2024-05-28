<?php

namespace SisLaravelMain\vendor\spatie\backtrace\src\CodeSnippets;

class NullSnippetProvider implements SnippetProvider
{
    public function numberOfLines(): int
    {
        return 1;
    }

    public function getLine(int $lineNumber = null): string
    {
        return $this->getNextLine();
    }

    public function getNextLine(): string
    {
        return "File not found for code snippet";
    }
}
