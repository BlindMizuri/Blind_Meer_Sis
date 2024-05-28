<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;
=======
namespace App\Http\Middleware;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

use Illuminate\Routing\Middleware\ValidateSignature as Middleware;

class ValidateSignature extends Middleware
{
    /**
     * The names of the query string parameters that should be ignored.
     *
     * @var array<int, string>
     */
    protected $except = [
        // 'fbclid',
        // 'utm_campaign',
        // 'utm_content',
        // 'utm_medium',
        // 'utm_source',
        // 'utm_term',
    ];
}
