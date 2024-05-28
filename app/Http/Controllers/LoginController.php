<?php

namespace SisLaravelMain\app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SisLaravelMain\app\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    // Authenticate the user
    public function login(Request $request)
    {
        $credentials = $request->only('student_id', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['student_id' => 'These credentials do not match our records.']);
    }
}
