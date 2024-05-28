<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\Context;

interface ContextProvider
{
    /**
     * @return array<int, string|mixed>
     */
    public function toArray(): array;
}
