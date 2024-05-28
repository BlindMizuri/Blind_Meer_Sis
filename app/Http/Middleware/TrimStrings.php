<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
        'password',
        'password_confirmation',
    ];
}
