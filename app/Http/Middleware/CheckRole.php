<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        if(Auth::user()->tipousuario_id == 1){
            
            return $next($request);
        }
        if(Auth::user()->tipousuario_id == 2){
            return  redirect()->route('usuario1');
        }
        return  redirect('/');
    }
}