<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use session;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if ($request->session('key')=="") {
            return $next($request);
        }
        return redirect("login");


    }
}
