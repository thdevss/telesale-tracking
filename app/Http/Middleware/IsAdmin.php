<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
Use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if (Auth::user() &&  Auth::user()->role == 'admin') {
            return $next($request);
        }

       return abort(403);
    }
}
