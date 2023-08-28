<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // This view should be located in resources/views/auth/login.blade.php
    }

    // Handle the login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication was successful. Redirect to dashboard-overview.
            return redirect()->route('dashboard-overview');
        }

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle the logout request
    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect back to login page after logout
    }
}