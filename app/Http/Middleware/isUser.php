<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class isUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
           if (Auth::user()->role == 0) {
            return $next($request);
        }
    }
}
