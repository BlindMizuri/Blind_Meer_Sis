<?php

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
    }
}
