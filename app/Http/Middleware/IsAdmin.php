<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check() && Auth::user()->role == 'admin')
        {
            return $next($request);
        }
        elseif(Auth::check() && Auth::user()->role == 'employee')
            {
                return redirect()->route('admin-home');
            }
        else
        {
            return redirect()->route('login');
        }
    }
}
