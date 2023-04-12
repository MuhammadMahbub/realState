<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('backend.admin.testimonial.index', compact('testimonials'));
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
            'name'=> 'required',
            'description'=> 'required',
            'image'=> 'required|image',
            'rating'=> 'required|numeric'
        ]);

        if($request->hasFile('image'))
        {
            $image    = $request->file('image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/testimonial/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
        }

        $testimonial = new Testimonial();

        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->rating = $request->rating;
        $testimonial->image = $last_image;

        $testimonial->save();

        return back()->with('success', 'Testimonial Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'image'=> 'image',
            'rating'=> 'required|numeric'
        ]);

        $testimonial = Testimonial::findOrFail($id);
        
        if($request->hasFile('image'))
        {
            if($testimonial->image != 'backend/testimonial/default.jpg'){
                unlink($testimonial->image);
            }
            
            $image    = $request->file('image');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/testimonial/';
            $last_image = $location.$imag_ext;
            $image->move( $location, $imag_ext);
            $testimonial->image = $last_image;
        }


        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->rating = $request->rating;

        $testimonial->save();

        return back()->with('success', 'Testimonial Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if($testimonial->image != 'backend/testimonial/default.jpg'){
            unlink($testimonial->image);
        }
        $testimonial->delete();
        return back()->with('success', 'Testimonial Deleted');
    }
}
