<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
