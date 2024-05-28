<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\Concerns;

use Spatie\FlareClient\Time\SystemTime;
use Spatie\FlareClient\Time\Time;

trait UsesTime
{
    public static Time $time;

    public static function useTime(Time $time): void
    {
        self::$time = $time;
    }

    public function getCurrentTime(): int
    {
        $time = self::$time ?? new SystemTime();

        return $time->getCurrentTime();
    }
}
