<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Property;
use App\Models\Testimonial;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\Subscribe;
use App\Models\User;
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

        $all_users = User::all();
        $agent_list = []; // role 2
        $tenant_list = [] ; // role 3
        $landlord_list = []; // role 4

        foreach($all_users as $all_user){
            
            // check agent role
            if($all_user->role === 2){
                $agent_list[] = $all_user;
            }

            // check tenant role
            if($all_user->role === 3){
                $tenant_list[] = $all_user;
            }

            // check landlord role
            if($all_user->role === 4){
                $landlord_list[] = $all_news;
            }
              
        } 
        return view('frontend.home', compact('testmonials', 'agent_list' , 'tenant_list', 'landlord_list', 'all_news','properties', 'property_categories','property_types','property_location'));
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
