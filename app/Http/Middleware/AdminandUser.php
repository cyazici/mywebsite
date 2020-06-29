<?php

namespace App\Http\Middleware;

use Closure;

class AdminandUser
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
        if(auth()->user()->yetki == '2' || auth()->user()->yetki == '1')
            return $next($request);

        return redirect()->route('login.show');
    }
}
