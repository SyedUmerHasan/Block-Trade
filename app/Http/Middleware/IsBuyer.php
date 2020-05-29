<?php

namespace App\Http\Middleware;

use Closure;

class IsBuyer
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
                case 'admin':
                    return redirect()->route('home');
                    break;
                case 'buyer':
                    return $next($request);
                break;
                case 'seller':
                    return redirect()->route('seller.home');
                    break;
            }

        }

        return redirect()->route('loginpage')->with('error',"You don't have admin access.");
    }
}
