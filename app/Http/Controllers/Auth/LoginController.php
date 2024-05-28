<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Student_id' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('Student_id', 'password');

        Log::info('Login attempt', ['credentials' => $credentials]);

        if (Auth::attempt($credentials)) {
            Log::info('Login successful');
            return redirect()->intended('/home');
        }

        Log::warning('Login attempt failed', ['credentials' => $credentials]);
        return redirect()->back()->withErrors(['Student_id' => 'These credentials do not match our records.'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function username()
    {
        return 'Student_id';
    }
}
