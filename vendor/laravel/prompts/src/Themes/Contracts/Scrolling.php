<?php

namespace SisLaravelMain\vendor\laravel\prompts\src\Themes\Contracts;

interface Scrolling
{
    /**
     * The number of lines to reserve outside of the scrollable area.
     */
    public function reservedLines(): int;
}
