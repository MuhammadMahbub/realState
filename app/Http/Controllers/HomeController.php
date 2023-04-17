<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\PreferredChoice;
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
        $preferred_choices =  PreferredChoice::all();
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

    public function all_agent(){

        // $all_agents = User::where('role', 2)->get();

        $all_agents = [];

        // return response()->json([
        //     'all_agents' => $all_agents
        // ]);

        return view('frontend.agent',compact('all_agents'));
    }

    public function searchAgent(Request $request)
    {
      
        $all_agents = User::where('role',2)->where('name', 'LIKE', '%' . $request->searchValue . '%')->get();
        
        $view = view('frontend.includes.agent_search',compact('all_agents'))->render();

        return response()->json(['data'=>$view ]);
        
        // return response()->json([
        //     'all_agents' => $all_agents
        // ]);

    }

    public function agentFilter(Request $request)
    {
        if($request->filetrValue == 'active'){
            $all_agents = User::where('role',2)->where('status', 1)->get();
        }elseif($request->filetrValue == 'new'){
            $all_agents = User::where('role',2)->latest()->take(1)->get();
        }elseif($request->filetrValue == 'all'){
            $all_agents = User::where('role',2)->latest()->get();
        }
        
        $view = view('frontend.includes.agent_search',compact('all_agents'))->render();

        return response()->json(['data'=>$view ]);         
    }

    public function property_details($slug)
    {
        $property = Property::where('slug',$slug)->first();
        // $property = Property::find($slug);
        $related_properties = Property::where('category_id', $property->category_id)->where('id', '!=', $property->id)->get();
        $latest_properties = Property::latest()->take(5)->get();

        // return response()->json([
        //     'property' => $property,
        //     'related_properties' => $related_properties,
        //     'latest_properties' => $latest_properties,
        // ]);

        return view('frontend.property.property_details', compact('property','related_properties','latest_properties'));
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

    public function property_search_view(){
        $properties = [];
        return view('frontend.property.property_search', compact('properties'));
    }

    public function searchWiseFilter(Request $request)
    {
        $properties = Property::where('short_title', 'like', '%' . $request->searchValue . '%')
        ->get();
        
        $view = view('frontend.includes.property_search',compact('properties'))->render();

        return response()->json(['data'=>$view ]);         
    }

    public function propertyFilter(Request $request)
    {
        if($request->filetrValue == 'latest'){
            $properties = Property::latest()->get();
        }elseif($request->filetrValue == 'oldest'){
            $properties = Property::orderBy('created_at','ASC')->get();
        }elseif($request->filetrValue == 'lowToHigh'){
            $properties = Property::orderBy('price','ASC')->get();
        }elseif($request->filetrValue == 'highToLow'){
            $properties = Property::orderBy('price','DESC')->get();
        }
        
        $view = view('frontend.includes.property_search',compact('properties'))->render();

        return response()->json(['data'=>$view ]);         
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
