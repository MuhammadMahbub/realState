<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function landlord_index(){
        $contractors = User::where('role',5)->where('status', 1)->get();
        return view('backend.landlord.dashboard',compact('contractors'));
    }

    public function choose_block(Request $request){
        // return $request->user_id;
        $user = User::findOrFail($request->user_id);

        $user->landlord_choice = $request->status;

        $user->save();

        return response()->json([
            'message' => "Status Updated"
        ]);
    }
}
