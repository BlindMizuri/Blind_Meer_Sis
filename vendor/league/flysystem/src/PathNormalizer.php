<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\league\flysystem\src;

interface PathNormalizer
{
    public function normalizePath(string $path): string;
}
