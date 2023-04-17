<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\MultiplePropertyImage;
use App\Models\Property;
use Illuminate\Support\Str;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\PropertySpecification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role == 1){
            $properties = Property::latest()->get();
            return view('backend.admin.property.index',compact('properties'));
        }else{
            $properties = Property::where('role_id', Auth::id())->where('status',1)->get();
            return view('backend.landlord.property.index',compact('properties'));
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PropertyCategory::all();
        $types = PropertyType::all();
        if(Auth::user()->role == 1){
            return view('backend.admin.property.create', compact('categories','types'));
        }else{
            return view('backend.landlord.property.create', compact('categories','types'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=> 'required',
            'property_type_id'=> 'required',
            'thumbnail_image'=> 'required|image',
            'short_title'=> 'required',
            'description'=> 'required',
            'price'=> 'required|numeric',
        ]);

        if($request->hasFile('thumbnail_image'))
        {
            $image    = $request->file('thumbnail_image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/property/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
        }

        $property = new Property();

        $property->role_id = Auth::id();
        $property->category_id = $request->category_id;
        $property->property_type_id = $request->property_type_id;
        $property->thumbnail_image = $last_image;
        $property->short_title = $request->short_title;
        $property->slug = uniqid().'--'.Str::slug($request->short_title);
        $property->location = $request->location;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->property_id = $request->property_id;
        $property->status = $request->status == 'on' ? 1 : 0;
        $property->isFavorite = $request->isFavorite == 'on' ? 1 : 0;
        // $property->multiple_feature_image = json_encode($request->multiple_feature_image);

        $property->save();

        if($request->file('multiple_image')){
            foreach($request->file('multiple_image') as $multi_image){
                $image_ext      = $property->id . '.' . $multi_image->getClientOriginalExtension();
                $path = 'backend/property/';
                $multiple_image = $path.$image_ext;
                $multi_image->move( $path, $image_ext);

                MultiplePropertyImage::insert([
                    'property_id' => $property->id,
                    'multiple_image' => $multiple_image,
                    'created_at' => Carbon::now()
                ]);    
            }
        }

        // Commission 
        Commission::create([
            'user_id' => Auth::id(),
            'price' => $property->price,
            'percent' => 7,
            'admin_fee' => round($property->price * 7 / 100),
        ]);

        if(Auth::user()->role == 1){
            return redirect()->route('property.index')->with('success', 'Property Created');
        }else{
            return redirect()->route('landlord.property.index')->with('success', 'Property Created');
        }
     }

    /**
     * Display the specified resource.
     */
    public function property_show($slug)
    {
        $property = Property::where('slug', $slug)->first();

        if(Auth::user()->role == 1){
            return view('backend.admin.property.show', compact('property'));
        }else{
            return view('backend.landlord.property.show', compact('property'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $categories = PropertyCategory::all();
        $types = PropertyType::all();

        if(Auth::user()->role == 1){
            return view('backend.admin.property.edit', compact('categories','types','property'));
        }else{
            return view('backend.landlord.property.edit', compact('categories','types','property'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'=> 'required',
            'property_type_id'=> 'required',
            'thumbnail_image'=> 'image',
            'short_title'=> 'required',
            'price'=> 'required|numeric',
        ]);

        $property = Property::findOrFail($id);

        if($request->hasFile('thumbnail_image'))
        {
            if($property->thumbnail_image != 'backend/property/default.jpg'){
                unlink($property->thumbnail_image);
            }

            $image    = $request->file('thumbnail_image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/property/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
            $property->thumbnail_image = $last_image;
        }

        $property->role_id = Auth::id();
        $property->category_id = $request->category_id;
        $property->property_type_id = $request->property_type_id;
        $property->short_title = $request->short_title;
        $property->location = $request->location;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->property_id = $request->property_id;
        $property->isFavorite = $request->isFavorite == 'on' ? 1 : 0;
        $property->multiple_feature_image = json_encode($request->multiple_feature_image);
        if($request->status){
            $property->status = $request->status;
        }

        $property->save();

        if($request->file('multiple_image')){
            foreach($request->file('multiple_image') as $multi_image){
                $image_ext      = $property->id . '.' . $multi_image->getClientOriginalExtension();
                $path = 'backend/property/';
                $multiple_image = $path.$image_ext;
                $multi_image->move( $path, $image_ext);
                

                MultiplePropertyImage::insert([
                    'property_id' => $property->id,
                    'multiple_image' => $multiple_image,
                    'created_at' => Carbon::now()
                ]);    
            }
        }

        if(Auth::user()->role == 1){
            return redirect()->route('property.index')->with('success', 'Property Updated');
        }else{
            return redirect()->route('landlord.property.index')->with('success', 'Property Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $specifications = PropertySpecification::where('property_id',$id)->get();

        foreach($specifications as $specification){
            $specification->delete();
        }

        $multi_image = MultiplePropertyImage::where('property_id',$id)->get();

        foreach($multi_image as $multi){
            $multi->delete();
        }
        
        $property = Property::findOrFail($id);
        if($property->thumbnail_image != 'backend/property/default.jpg'){
            unlink($property->thumbnail_image);
        }
        $property->delete();
        return back()->with('success', 'Property Deleted');
    }

    public function remove_multiple_image(Request $request){
        // return $request->status;
        $image = MultiplePropertyImage::findOrFail($request->data_id);

        $image->delete();

        return response()->json([
            'message' => "Image deleted"
        ]);
    }
}
