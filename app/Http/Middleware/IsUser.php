<?php

namespace App\Http\Middleware;

use Closure;

class IsUser
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
        
        if( auth()->user() !== null){

            switch(auth()->user()->role){
                default:
                return $next($request);
            }

            return redirect()->route('loginpage');
        }
    }
}
