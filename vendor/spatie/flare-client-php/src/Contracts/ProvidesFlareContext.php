<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\Contracts;

interface ProvidesFlareContext
{
    /**
     * @return array<int|string, mixed>
     */
    public function context(): array;
}
