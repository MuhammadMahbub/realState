<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\SendOtp;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        // return $request->role;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'role' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        

            
        event(new Registered($user));
        
        
        Auth::login($user);
        
        // $user->notify(new SendOtp);

        // return view('verify_otp',[
        //         ''
        //     ]);

        // return redirect(RouteServiceProvider::HOME);
        // return redirect(route('login'));

        if(Auth()->user()->role == 1){
            return redirect(route('admin.dashboard'));
        }
        elseif(Auth()->user()->role == 2){
            if(Auth()->user()->status == 1){
                return redirect(route('agent.dashboard'));
            }else{
                return redirect(route('login'))->with('fail','Your Request in pending');
            }
        }
        elseif(Auth()->user()->role == 3){
            if(Auth()->user()->status == 1){
                return redirect(route('tenant.dashboard'));
            }else{
                return redirect(route('login'))->with('fail','Your Request in pending');
            }
        }
        elseif(Auth()->user()->role == 4){
            if(Auth()->user()->status == 1){
                return redirect(route('landlord.dashboard'));
            }else{
                return redirect(route('login'));
            }
        }
        elseif(Auth()->user()->role == 5){
            if(Auth()->user()->status == 1){
                return redirect(route('contractor.dashboard'));
            }else{
                return redirect(route('login'));
            }
        }
        elseif(Auth()->user()->role == 6){
            if(Auth()->user()->status == 1){
                return redirect(route('service_provider.dashboard'));
            }else{
                return redirect(route('login'));
            }
        }
    }
    
    
}
