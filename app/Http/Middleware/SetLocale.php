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
        $locale = \Session::get('locale');
        if ($locale){
            app()->setLocale($locale);
        }else{
            app()->setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
