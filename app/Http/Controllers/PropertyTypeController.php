<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = PropertyType::latest()->get();
        return view('backend.admin.property.property_type', compact('types'));
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
            'type_name' => 'required',
        ]);

        $type = new PropertyType();

        $type->type_name = $request->type_name;

        $type->save();

        return back()->with('success', 'Property Type Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyType $propertyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyType $propertyType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'type_name' => 'required',
        ]);

        $type = PropertyType::findOrFail($id);

        $type->type_name = $request->type_name;

        $type->save();

        return back()->with('success', 'Property Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        PropertyType::findOrFail($id)->delete();
        return back()->with('success', 'Property Type Deleted');
    }
}
