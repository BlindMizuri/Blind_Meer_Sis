<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\Context;

interface ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider;
}
