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
            'gernder' => $request->gernder,
            'about' => $request->about,
            'location' => $request->location,
            'country' => $request->country,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);
        

            
        event(new Registered($user));
        
        
        Auth::login($user);

        // return redirect(RouteServiceProvider::ADMIN_HOME);


        if(Auth()->user()->role == 1){
            return redirect(route(RouteServiceProvider::ADMIN_HOME));
        }else{
            return redirect(route('login'))->with('fail', 'Your Request in pending');
        }
        
    }
    
    
}
