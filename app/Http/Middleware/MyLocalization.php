<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
class MyLocalization
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
        if(\Session::has('locale'))
        {
            \App::setlocale(\Session::get('locale'));
            
        }
        return $next($request);
    }
}
