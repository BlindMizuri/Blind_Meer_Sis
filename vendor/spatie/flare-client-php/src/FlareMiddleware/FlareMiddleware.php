<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\FlareMiddleware;

use Closure;
use Spatie\FlareClient\Report;

interface FlareMiddleware
{
    public function handle(Report $report, Closure $next);
}
