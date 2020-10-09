<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
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

        //     if(Auth::user()->tipousuario_id==1){
        //         return new RedirectResponse(url('/admin'));
        //       }else{
        //         return new RedirectResponse(url('/usuario'));
        //       }
            
        // }

        

        return $next($request);
    }
}
