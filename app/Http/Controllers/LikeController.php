<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like_property(Request $request){

        $like = Like::where('user_id', Auth::id())->where('property_id',$request->property_id)->first();

        if(!$like){
            Like::create([
                'user_id' => Auth::id(),
                'property_id' => $request->property_id,
                'like_count' => 1,
            ]);

            $count = Like::where('property_id', $request->property_id)->count();

            return response()->json([
                'status' => 200,
                'count' => $count,
                'property_id' => $request->property_id,
            ]);
        }else{
            $like->delete();

            $count = Like::where('property_id', $request->property_id)->count();

            return response()->json([
                'status' => 400,
                'count' => $count,
                'property_id' => $request->property_id,
            ]);
        }
     
    }
}
