<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->account_type === 'admin') {
            return $next($request);
        } elseif (Auth::check() && Auth::user()->account_type === 'user') {
            return redirect()->route('user.dashboard');
        }

        return redirect()->route('user.dashboard');
    }
}
