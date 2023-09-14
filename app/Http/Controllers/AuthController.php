<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {

            // Check user role
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard-admin'); // Redirect to the admin dashboard
            }

            return redirect()->route('dashboard-overview'); // Default redirection for other users
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