<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Property;
use App\Models\Commission;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function agent_index(){
        $members = Membership::where('member_id', auth()->id())->first();
        $present_dateTime = Carbon::now()->format('Y-m-d H:i:s');

        if($members){
            if($present_dateTime > $members->membership_date){
                $members->delete();
            }
        }
        return view('backend.agent.dashboard');
    }

    public function property_index()
    {
        $properties = Property::where('status',1)->get();
        return view('backend.agent.property.index',compact('properties'));
    }

    public function send_request(Request $request)
    {   
        $property = Property::findOrFail($request->property_id);

        $property->agent_status = 2;
        $property->agent_id = Auth::id();

        $property->save();

        return response()->json([
            'message' => "Request Sent"
        ]);
    }

    public function cancel_request(Request $request)
    {   
        $property = Property::findOrFail($request->property_id);

        $property->agent_status = NULL;
        $property->agent_id = NULL;

        $property->save();

        return response()->json([
            'message' => "Request Cancelled"
        ]);
    }
}
