<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        if (!\Session::has('locale'))
        {
            \Session::put('locale',config('app.locale'));
        }
        \App::setLocale(\Session::get('locale'));
        return $next($request);
    }
}
