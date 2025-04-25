<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and an admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // If the user is not an admin, redirect to the login page or home
        return redirect()->route('login');  // You can change this to redirect elsewhere if needed
    }
}
