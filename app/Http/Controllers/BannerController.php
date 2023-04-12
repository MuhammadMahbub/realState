<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::first();

        return view('backend.admin.banner.index', compact('banner'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image'=> 'image',
            'title'=> 'required',
            'sub_title'=> 'required',
        ]);

        if($request->hasFile('image'))
        {
            $image    = $request->file('image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/banner/';
            $last_image = $location.$imag_ext;
            $image->move($location, $imag_ext);
            $banner->image = $last_image;
        }

        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;

        $banner->save();

        return back()->with('success', 'Banner Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
