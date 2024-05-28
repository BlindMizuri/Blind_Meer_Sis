<?php

namespace SisLaravelMain\vendor\spatie\backtrace\src\Arguments\ReducedArgument;

class UnReducedArgument implements ReducedArgumentContract
{
    /** @var self|null */
    private static $instance = null;

    private function __construct()
    {
    }

    public static function create(): self
    {
        if (self::$instance !== null) {
            return self::$instance;
        }

        return self::$instance = new self();
    }
}
