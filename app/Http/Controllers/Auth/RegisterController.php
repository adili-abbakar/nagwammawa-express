<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Propaganistas\LaravelPhone\PhoneNumber;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|phone:INTERNATIONAL|unique:users,phone_number',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->mixedCase()]
        ], [
            'phone_number.phone' => 'Please enter a valid international phone number starting with + (e.g. +2348012345678).',
        ]);


        $normalizedPhone = PhoneNumber::make($validated['phone_number'])->formatE164();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $$validated['phone_number'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        return redirect()->intended(route('home'))->with('success', 'Registration successful! You are now logged in.');
    }
}
