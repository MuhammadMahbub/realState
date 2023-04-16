<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Property;
use App\Models\Commission;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function agent_index(){
        $members = Membership::where('member_id', auth()->id())->first();
        $present_dateTime = Carbon::now()->format('Y-m-d H:i:s');

        if($present_dateTime > $members->membership_date){
            $members->delete();
        }
        return view('backend.agent.dashboard');
    }

    public function property_index()
    {
        $properties = Property::latest()->get();
        return view('backend.agent.property.index',compact('properties'));
    }

    public function request_owned(Request $request)
    {   
       $property = Property::findOrFail($request->property_id);

        $property->agent_status = $request->status;

        $property->save();

        // Commission 
        Commission::create([
            'user_id' => Auth::id(),
            'price' => $property->price,
            'percent' => 9,
            'admin_fee' => round($property->price * 9 / 100),
        ]);

        return response()->json([
            'message' => "Status Updated"
        ]);
    }
}
