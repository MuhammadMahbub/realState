<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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

        // return redirect()->intended(RouteServiceProvider::HOME);

        if(Auth()->user()->role == 1){
            if(Auth()->user()->status == 1){
                return redirect()->intended(route('admin.dashboard'));
            }else{
                return back()->with('fail', 'Your Request in Pending');
            }
        }
        elseif(Auth()->user()->role == 2){
            if(Auth()->user()->status == 1){
                return redirect()->intended(route('agent.dashboard'));
            }else{
                return back()->with('fail', 'Your Request in Pending');
            }
        }
        elseif(Auth()->user()->role == 3){
            if(Auth()->user()->status == 1){
                return redirect()->intended(route('tenant.dashboard'));
            }else{
                return back()->with('fail', 'Your Request in Pending');
            }
        }
        elseif(Auth()->user()->role == 4){
            if(Auth()->user()->status == 1){
                return redirect()->intended(route('landlord.dashboard'));
            }else{
                return back()->with('fail', 'Your Request in Pending');
            }
        }
        elseif(Auth()->user()->role == 5){
            if(Auth()->user()->status == 1){
                return redirect()->intended(route('contractor.dashboard'));
            }else{
                return back()->with('fail', 'Your Request in Pending');
            }
        }
        elseif(Auth()->user()->role == 6){
            if(Auth()->user()->status == 1){
                return redirect()->intended(route('service_provider.dashboard'));
            }else{
                return back()->with('fail', 'Your Request in Pending');
            }
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
