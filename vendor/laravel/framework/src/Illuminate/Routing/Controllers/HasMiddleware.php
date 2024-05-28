<?php

namespace SisLaravelMain\vendor\laravel\framework\src\Illuminate\Routing\Controllers;

interface HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     *
     * @return \Illuminate\Routing\Controllers\Middleware|array
     */
    public static function middleware();
}
