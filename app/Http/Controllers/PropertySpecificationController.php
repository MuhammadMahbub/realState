<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertySpecification;
use Illuminate\Http\Request;

class PropertySpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specifications = PropertySpecification::latest()->get();
        $properties = Property::latest()->get();
        return view('backend.admin.property.property_specification', compact('specifications','properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' =>'required',
            'specification' =>'required',
            'property_id' =>'required',
        ]);

        $specification = new PropertySpecification();

        // $specification->specification = $request->specification;
        // $specification->icon = $request->icon;
        // $specification->property_id = $request->property_id;

        foreach($request->specification as $key=>$opt){
            PropertySpecification::insert([
                'property_id' => $request->property_id,
                'icon' => $request->icon[$key],
                'specification' => $request->specification[$key],
            ]);
        }

        // $specification->save();

        return back()->with('success', 'Property Specification Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertySpecification $propertySpecification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertySpecification $propertySpecification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'icon' =>'required',
            'specification' =>'required',
            'property_id' =>'required',
        ]);

        $specification = PropertySpecification::findOrFail($id);

        $specification->specification = $request->specification;
        $specification->icon = $request->icon;
        $specification->property_id = $request->property_id;

        $specification->save();
        
        // $specification->save();
        // foreach($request->specification as $key=>$opt){
        //     $specification->update([
        //         'property_id' => $request->property_id,
        //         'icon' => $request->icon[$key],
        //         'specification' => $request->specification[$key],
        //     ]);
        // }

        return back()->with('success', 'Property Specification Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        PropertySpecification::findOrFail($id)->delete();
        return back()->with('success', 'Property Specification Deleted');
    }
}
