<?php

namespace SisLaravelMain\vendor\spatie\flare-client-php\src\Time;

use DateTimeImmutable;

class SystemTime implements Time
{
    public function getCurrentTime(): int
    {
        return (new DateTimeImmutable())->getTimestamp();
    }
}
