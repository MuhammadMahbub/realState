<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();
        $categories = NewsCategory::latest()->get();
        return view('backend.admin.news.index', compact('news','categories'));
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
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $news = new News();

        $news->category_id = $request->category_id;
        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return back()->with('success', 'News Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $news = News::findOrFail($id);

        $news->category_id = $request->category_id;
        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();

        return back()->with('success', 'News Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return back()->with('success', 'News Updated');
    }
}
