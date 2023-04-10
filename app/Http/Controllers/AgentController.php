<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agent_index(){
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

        return response()->json([
            'message' => "Status Updated"
        ]);
    }
}
