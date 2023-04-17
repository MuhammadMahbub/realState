<?php

namespace App\Http\Controllers;

use App\Http\Requests\PreferredRequest;
use App\Models\PreferredChoice;
use Illuminate\Http\Request;

class PreferredChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preferred_choices =  PreferredChoice::all();
        return view('backend.admin.preferred_choices.index', compact('preferred_choices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.preferred_choices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PreferredRequest $request)
    {
        PreferredChoice::insert($request->except('_token'));
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = PreferredChoice::findOrFail($id);
        return view('backend.admin.preferred_choices.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        PreferredChoice::findOrFail($id)->update($request->except('_token'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        PreferredChoice::findOrFail($id)->delete();
        return back();

    }
}
