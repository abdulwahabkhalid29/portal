<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role_as == 'admin')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status','Access Denied! as you are not as admin');
            }
        }
        else
        {
            return redirect('/')->with('status','Please Login First');
        }
    }


    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
}
