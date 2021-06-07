<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  \String  $AuthCheck
     * 
     * @return mixed
     */
    public function handle(Request $request, Closure $next $AuthCheck)
    {
        if($AuthCheck == "admin" && auth()->user()->role == 1) {
            abort(404);
        }
        if($AuthCheck == "developer" && auth()->user()->role == 2) {
            abort(404);
        }
        return $next($request);
    }
}
