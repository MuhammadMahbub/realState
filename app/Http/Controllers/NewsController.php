<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
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
            'image' => 'required|image',
        ]);

        $news = new News();

        if($request->hasFile('image'))
        {
            $image    = $request->file('image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/news/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
        }

        $news->category_id = $request->category_id;
        $news->title = $request->title;
        $news->slug = $news->category_id.'-'.Str::slug($request->title);
        $news->description = $request->description;
        $news->image = $last_image;

        $news->save();

        return back()->with('success', 'News Added');
    }

    /**
     * Display the specified resource.
     */
    public function news_show($slug)
    {
        $news = News::where('slug',$slug)->first();
        return view('backend.admin.news.show', compact('news'));
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
            'image' => 'image',
        ]);

        $news = News::findOrFail($id);

        if($request->hasFile('image'))
        {
            if($news->image != 'backend/news/default.jpg'){
                unlink($news->image);
            }

            $image    = $request->file('image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/news/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
            $news->image = $last_image;
        }

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
        $news = News::findOrFail($id);
        if($news->image != 'backend/news/default.jpg'){
            unlink($news->image);
        }
        $news->delete();
        return back()->with('success', 'News Deleted');
    }
}
