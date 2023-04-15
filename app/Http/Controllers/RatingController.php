<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function rate_property(Request $request){

        // return Auth::id();
        $rate = Rating::where('user_id', Auth::id())->where('property_id',$request->property_id)->first();
        
        if(!$rate){
            $rating = new Rating();

            $rating->user_id = Auth::id();
            $rating->property_id = $request->property_id;
            $rating->rate_count = $request->rate_value;
            
            $rating->save();

        }else{
            $rating = Rating::find($rate->id);

            $rating->user_id = Auth::id();
            $rating->property_id = $request->property_id;
            $rating->rate_count = $request->rate_value;
            
            $rating->save();
        }

        $count = Rating::where('property_id', $request->property_id)->count();
        $total_rating =  Rating::where('property_id', $request->property_id)->sum('rate_count');
        $avg_count = round(($total_rating/$count), 1);

        return response()->json([
            'status' => 200,
            'property_id' => $request->property_id,
            'avg_count' => $avg_count,
        ]);
     
    }
}
