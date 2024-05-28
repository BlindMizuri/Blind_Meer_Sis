<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\FlareMiddleware;

use Closure;
use Spatie\FlareClient\Report;

class AddEnvironmentInformation implements FlareMiddleware
{
    public function handle(Report $report, Closure $next)
    {
        $report->group('env', [
            'php_version' => phpversion(),
        ]);

        return $next($report);
    }
}
