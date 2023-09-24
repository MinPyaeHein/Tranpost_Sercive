<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DriverMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       //dd(auth()->user()->type);
       if (auth()->check() && auth()->user()->type === 'driver') {
        return $next($request);
    }

    return abort(403, 'Unauthorized');
    }
}
