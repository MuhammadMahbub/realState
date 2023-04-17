<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Membership;
use App\Models\Property;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function landlord_index(){
        $members = Membership::where('member_id', auth()->id())->first();
        $present_dateTime = Carbon::now()->format('Y-m-d H:i:s');

        if($members){
            if($present_dateTime > $members->membership_date){
                $members->delete();
            }
        }

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

    public function accept_request(Request $request){
        $property = Property::findOrFail($request->property_id);

        $property->agent_status = 1;

         // Commission 
        Commission::create([
            'user_id' => $property->agent_id,
            'price' => $property->price,
            'percent' => 9,
            'admin_fee' => round($property->price * 9 / 100),
        ]);

        $property->save();

        return response()->json([
            'message' => "Request Accepted"
        ]);
    }

    public function decline_request(Request $request){
        // return $request->user_id;
        $property = Property::findOrFail($request->property_id);

        $property->agent_status = NULL;

        $property->save();

        return response()->json([
            'message' => "Request Declined"
        ]);
    }
}
