<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
             
            if (Auth::guard($guard)->check() && Auth::user()->role == 1) {
                return redirect()->route('admin.dashboard');
            }
            elseif(Auth::guard($guard)->check() && Auth::user()->role == 2 && Auth()->user()->status == 1){
                return redirect()->route('agent.dashboard');
            }elseif(Auth::guard($guard)->check() && Auth::user()->role == 3 && Auth()->user()->status == 1){
                return redirect()->route('tenant.dashboard');
            }elseif(Auth::guard($guard)->check() && Auth::user()->role == 4 && Auth()->user()->status == 1){
                return redirect()->route('landlord.dashboard');
            }elseif(Auth::guard($guard)->check() && Auth::user()->role == 5 && Auth()->user()->status == 1){
                return redirect()->route('contractor.dashboard');
            }elseif(Auth::guard($guard)->check() && Auth::user()->role == 6 && Auth()->user()->status == 1){
                return redirect()->route('service_provider.dashboard');
            }
            
            else {
                return $next($request);
            }
        }
    }
}
