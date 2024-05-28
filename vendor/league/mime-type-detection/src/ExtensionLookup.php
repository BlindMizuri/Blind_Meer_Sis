<?php
declare(strict_types=1);

namespace SisLaravelMain\vendor\league\mime-type-detection\src;

interface ExtensionLookup
{
    public function lookupExtension(string $mimetype): ?string;

    /**
     * @return string[]
     */
    public function lookupAllExtensions(string $mimetype): array;
}
