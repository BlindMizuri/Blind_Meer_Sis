<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;

use SisLaravelMain\app\Providers\RouteServiceProvider;
=======
namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
