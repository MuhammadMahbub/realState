<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyCategory;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.admin.property.category_index', compact('categories'));
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
            'category_name' => 'required',
            'description' => 'required',
        ]);

        $category = new PropertyCategory();

        $category->category_name = $request->category_name;
        $category->property_qty = $request->property_qty;
        $category->description = $request->description;

        $category->save();

        return back()->with('success', 'Category Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);

        $category = PropertyCategory::findOrFail($id);

        $category->category_name = $request->category_name;
        $category->property_qty = $request->property_qty;
        $category->description = $request->description;

        $category->save();

        return back()->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $property = Property::where('category_id', $id)->get();

        if($property){
            return back()->with('fail', 'Property Exists under this Category');
        }else{
            PropertyCategory::findOrFail($id)->delete();
            return back()->with('success', 'Category Deleted');
        }
    }
}
