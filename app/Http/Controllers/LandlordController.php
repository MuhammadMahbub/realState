<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandlordController extends Controller
{
    public function landlord_index(){
        return view('backend.landlord.dashboard');
    }
}
