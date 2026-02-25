<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //  $request->filled('remember')
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'))->with('success', 'Login successful! You are now logged in.');
        }

        return back()->withErrors([
            'login' => 'Incorrect email or password'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Logout successful! You are now logged out.');
    }
}
