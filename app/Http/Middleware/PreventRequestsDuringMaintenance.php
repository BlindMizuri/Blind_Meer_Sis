<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
