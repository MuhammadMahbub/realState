<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OtpVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register_agent(Request $request)
    {
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
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Agent Created Success');
    }

    public function profile(Request $request)
    {
        return view('backend.profile.profile');
    }
    public function profile_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::findOrFail(Auth::id());

        if($request->password){
            $exist = Hash::check($request->password, Auth::user()->password);

            if(!$exist){
                $user->password = Hash::make($request->password);
            }
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->location = $request->location;
        $user->website = $request->website;
        if($request->social_links){
            $user->social_links = json_encode($request->social_links);
        }
        
        $user->save();

        return back()->with('success', 'Profile Updated');

    }
    public function profile_image_update(Request $request)
    {

        $user = User::findOrFail(Auth::id());

        if($request->hasFile('image'))
        {
            $image    = $request->file('image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/profile/';
            $last_image = $location.$imag_ext;
            $image->move($location, $imag_ext);
            $user->image = $last_image;
        }

        $user->save();

        return back()->with('success', 'Profile Image Changed');


    }


    public function all_users(){
        $users = User::all();
        return view('backend.admin.all_users',compact('users'));
    }
    public function user_destroy($id){
        User::findOrFail($id)->delete();
        return back()->with('success','User Deleted');
    }
    public function approve_pending(Request $request){
        // return $request->status;
        $user = User::findOrFail($request->user_id);

        $user->status = $request->status;

        $user->save();

        return response()->json([
            'message' => "Status Updated"
        ]);
    }

    public function admin_index(){
        return view('backend.admin.dashboard');
    }
    
    public function agent_index(){
        return view('backend.agent.dashboard');
    }
    
    public function tenant_index(){
        return view('backend.tenant.dashboard');
    }
    
    public function landlord_index(){
        return view('backend.landlord.dashboard');
    }
    
    public function contractor_index(){
        return view('backend.contractor.dashboard');
    }
    
    public function service_provider_index(){
        return view('backend.service_provider.dashboard');
    }

    public function verify_otp_code(Request $request){
        $otpCode = OtpVerify::where('phone', Auth::user()->phone)->first();
        if($otpCode->otp_code == $request->otp_code){
            $otpCode->delete();
            return redirect()->route('login');
        }else{
            return back()->with('fail', 'Your OTP is wrong');
        }
    }
}
