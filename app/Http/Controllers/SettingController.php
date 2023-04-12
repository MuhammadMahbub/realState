<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();

        return view('backend.admin.setting.index', compact('setting'));
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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'back_logo' => 'image',
            'front_logo' => 'image',
            'copyright' => 'required',
        ]);

        if($request->hasFile('back_logo'))
        {
            $image    = $request->file('back_logo');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/setting/';
            $back_logo = $location.$imag_ext;
            $image->move($location, $imag_ext);
            $setting->back_logo = $back_logo;
        }

        if($request->hasFile('front_logo'))
        {
            $image    = $request->file('front_logo');
            $imag_ext      = uniqid() . '.' . $image->getClientOriginalExtension();
            $location = 'backend/setting/';
            $front_logo = $location.$imag_ext;
            $image->move($location, $imag_ext);
            $setting->front_logo = $front_logo;
        }

        $setting->copyright = $request->copyright;

        $setting->save();

        return back()->with('success', 'General Settings Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
