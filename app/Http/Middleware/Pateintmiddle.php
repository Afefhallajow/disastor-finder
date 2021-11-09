<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pateintmiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {if(!Auth::guest() && (Auth::user()->ispatent ==1) )
    {
        return $next($request);

    }
      /* if (!Auth::guest() && (Auth::user()->isadmin == 1))
           {return $next($request);}
      */
      return redirect('/per');
    }
}
