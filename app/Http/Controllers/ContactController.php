<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();

        return view('backend.admin.contact.index', compact('contact'));
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'mail' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

        $contact->mail = $request->mail;
        $contact->phone = $request->phone;
        $contact->mobile = $request->mobile;
        $contact->address = $request->address;
        $contact->social_links = json_encode($request->social_links);

        $contact->save();

        return back()->with('success', 'Contact Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
