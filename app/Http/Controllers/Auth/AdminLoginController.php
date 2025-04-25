<?php


// app/Http/Controllers/Auth/AdminLoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Load your login page
    }

    public function login(Request $request)
    {
        // Validate the form input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Get the authenticated user
            $user = Auth::user();

            // Check if the user is an admin
            if ($user->is_admin) {
                // Redirect to the admin dashboard
                return redirect()->route('admin_dashboard');
            } else {
                // If not an admin, redirect to a user home page or something appropriate
                return redirect()->route('home'); // Add this line for non-admin users
            }
        }

        // If authentication fails, redirect back to login page
        return redirect()->route('login')->with('error', 'Invalid credentials.');
    }
}
