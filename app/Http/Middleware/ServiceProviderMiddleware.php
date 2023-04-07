<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ServiceProviderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->status == 0){
            Auth::logout();
            return redirect()->route('login')->withErrors([
                'message' => "Your Service Provider Request is Pending",
            ]);  
        }

        if(Auth::check() && Auth::user()->role == 6){
            return $next($request);
        }else {
            return redirect()->route('login');
        }
    }
}
