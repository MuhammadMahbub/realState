<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Str;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\PropertySpecification;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::latest()->get();
        return view('backend.admin.property.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PropertyCategory::all();
        $types = PropertyType::all();
        return view('backend.admin.property.create', compact('categories','types'));
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

        $property->role_id = Auth::user()->role;
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
        $property->multiple_feature_image = json_encode($request->multiple_feature_image);

        $property->save();

        return redirect()->route('property.index')->with('success', 'Property Created');
     }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $property = Property::findOrFail($id);
        return view('backend.admin.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $categories = PropertyCategory::all();
        $types = PropertyType::all();
        return view('backend.admin.property.edit', compact('categories','types','property'));
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
            $image    = $request->file('thumbnail_image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/property/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
            $property->thumbnail_image = $last_image;
        }

        $property->role_id = Auth::user()->role;
        $property->category_id = $request->category_id;
        $property->property_type_id = $request->property_type_id;
        $property->short_title = $request->short_title;
        $property->location = $request->location;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->property_id = $request->property_id;
        $property->status = $request->status == 'on' ? 1 : 0;
        $property->isFavorite = $request->isFavorite == 'on' ? 1 : 0;
        $property->multiple_feature_image = json_encode($request->multiple_feature_image);

        $property->save();

        return redirect()->route('property.index')->with('success', 'Property Updated');
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
        
        Property::findOrFail($id)->delete();
        return back()->with('success', 'Property Deleted');
    }
}
