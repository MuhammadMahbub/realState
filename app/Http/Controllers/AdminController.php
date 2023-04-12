<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OtpVerify;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function role_shift($id){
        $user = User::find($id);

        if($user->role == 1){
            $user->role = 4;
        }elseif($user->role == 4){
            $user->role = 1;
        }
        
        $user->save();

        return redirect('login');
    }

    public function register_agent(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'role' => ['required'],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'gernder' => $request->gernder,
            'about' => $request->about,
            'country' => $request->country,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'User Created Success');
    }

    public function profile(Request $request)
    {
        return view('backend.profile.profile');
    }
    public function profile_update(Request $request)
    {
        // return $request;
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
        $user->country = $request->country;
        $user->city = $request->city;
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
            if($user->image != 'backend/default.jpg'){
                unlink($user->image);
            }

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
    public function property_status_change(Request $request){
        // return $request->status;
        $property = Property::findOrFail($request->property_id);

        $property->status = $request->status;

        $property->save();

        return response()->json([
            'message' => "Status Updated"
        ]);
    }

    public function admin_index(){
        return view('backend.admin.dashboard',[
            'users' => User::all()
        ]);
    }

    // public function property_index(){
    //     return view('backend.admin.property.index',[
    //         'properties' => Property::latest()->get()
    //     ]);
    // }
    
    
    
    public function tenant_index(){
        return view('backend.tenant.dashboard');
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

    public function ckeditor_image_uplaod(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
