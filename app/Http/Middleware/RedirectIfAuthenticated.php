<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     switch(Auth::user()->role){
        //         case 'admin':
        //             return redirect()->route('home');
        //             break;
        //         case 'buyer':
        //             return redirect()->route('buyer.home');
        //             break;
        //         case 'seller':
        //             return redirect()->route('seller.home');
        //             break;
        //     }
        // }
        if (Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
