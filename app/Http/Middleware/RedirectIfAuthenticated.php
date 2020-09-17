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
        switch ($guard){

            case 'store':
                if (Auth::guard($guard)->check()){
                    return redirect()->route('food.index');
                }
                break;


            // case 'driver':
            //     if (Auth::guard($guard)->check()){
            //         return 'drvier';
            //     }
            //     break;


            default:
                if (Auth::guard($guard)->check()){
                    return 'belom dibuat bro';
                }
                break;
        }
        return $next($request);
    }
}
