<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class AuthenticatedSessionController extends Controller
{
   
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
    

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::ADMIN_HOME);

        if(Auth()->user()->role == 1){
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }
        elseif(Auth()->user()->role == 2){
            return redirect()->intended(RouteServiceProvider::AGENT_HOME);
        }
        elseif(Auth()->user()->role == 3){
            return redirect()->intended(RouteServiceProvider::TENANT_HOME);
        }
        elseif(Auth()->user()->role == 4){
            return redirect()->intended(RouteServiceProvider::LANDLORD_HOME);
        }
        elseif(Auth()->user()->role == 5){
            return redirect()->intended(RouteServiceProvider::CONTRACTOR_HOME);
        }
        elseif(Auth()->user()->role == 6){
            return redirect()->intended(RouteServiceProvider::SERVICE_PROVIDER_HOME);
        }
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
