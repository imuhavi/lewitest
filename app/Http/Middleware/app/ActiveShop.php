<?php

namespace App\Http\Middleware\app;

use Closure;
use Illuminate\Http\Request;

class ActiveShop
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->shop && auth()->user()->shop->status == 'Active'){
            return $next($request);
        }
        return redirect('/')->with('error', 'Your shop has been inactivated! Please contact with the admin.');
    }
}