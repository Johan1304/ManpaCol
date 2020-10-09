<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        if ($request->user() && $request->user()->Estado)
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                //redirect user or guest to home page or something like that
            }
        }

        return $next($request);

       
       
    }
}
