<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\league\mime-type-detection\src;

interface ExtensionToMimeTypeMap
{
    public function lookupMimeType(string $extension): ?string;
}
