<?php

namespace SisLaravelMain\vendor\spatie\laravel-ignition\src\Support;

class LaravelVersion
{
    public static function major(): string
    {
        return explode('.', app()->version())[0];
    }
}
