<?php

<<<<<<< HEAD
namespace SisLaravelMain\app\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
=======
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::guard('web')->guest()) {
            Log::info('Unauthenticated user trying to access protected route');
            return redirect()->route('login');
        }

        Log::info('Authenticated user accessing route', ['user' => Auth::user()]);
        return $next($request);
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882
    }
}
