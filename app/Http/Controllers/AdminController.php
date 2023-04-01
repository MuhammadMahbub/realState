<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OtpVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function all_users(){
        $users = User::all();
        return view('backend.admin.all_users',compact('users'));
    }
    public function user_destroy($id){
        User::findOrFail($id)->delete();
        return back()->with('success','User Deleted');
    }
    public function approve_pending(Request $request){
        // return $request->user_id;
        $user = User::findOrFail($request->user_id);
        $user->update([
            'status' => $request->status,
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
