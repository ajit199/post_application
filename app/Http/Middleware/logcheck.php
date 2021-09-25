<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class logcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       if($request->path() == 'login' && $request->session()->has('key'))
       {
           return redirect('/');
       }elseif($request->path() == 'create' && $request->session()->has('key')){
        return redirect('/');
       }
        return $next($request);

       
    }
}
