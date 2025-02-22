<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YourMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Add your constraint logic here

        return $next($request);
    }
}
