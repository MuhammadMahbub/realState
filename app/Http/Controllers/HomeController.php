<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Property;
use App\Models\Testimonial;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $testmonials = Testimonial::all();
        $all_news = News::with('relationwithNewsCategory')->take(3)->get();
        $property_categories = PropertyCategory::all();
        $property_types = PropertyType::all();
        $properties = Property::all();
        $property_location = DB::table('properties')->select('location')->distinct()->get();
        return view('frontend.home', compact('testmonials', 'all_news','properties', 'property_categories','property_types','property_location'));
    }


    public function searchProperty(Request $request)
    {
        // return $request;
        $request->validate([
            'property_type_id' => 'required',
            'category_id' => 'required',
            'location' => 'required',
        ]);

        
          return  Property::where('location', 'like', '%' . $request->location . '%')
            ->where('category_id', $request->category_id)
            ->where('property_type_id', $request->property_type_id)
            ->get();
                
    }

    public function subscribe(Request $request)
    {
        // return $request;
        $request->validate([
            'email' => 'required|unique:subscribes,email',
        ]);

        if(Auth::check())
        {
            Subscribe::create([
                'email' => $request->email
            ]);
            return back()->with('success', 'Thanks for Subscription');
        }else{
            return back()->with('fail', 'You r not a registered person');
        }
        

                
    }

}
