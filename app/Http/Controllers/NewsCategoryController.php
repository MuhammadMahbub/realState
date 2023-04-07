<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = NewsCategory::latest()->get();
        return view('backend.admin.news.category_index', compact('categories'));
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
        ]);

        $category = new NewsCategory();

        $category->category_name = $request->category_name;

        $category->save();

        return back()->with('success', 'Category Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsCategory $newsCategory)
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
        ]);

        $category = NewsCategory::findOrFail($id);

        $category->category_name = $request->category_name;

        $category->save();

        return back()->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $news = News::where('category_id', $id)->get();
        
        if($news){
            return back()->with('fail', 'News are available in this Category');
        }else{
            NewsCategory::findOrFail($id)->delete();
            return back()->with('success', 'Category Deleted');
        }
        
    }
}
