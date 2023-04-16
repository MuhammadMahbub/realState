<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\ManageCommission;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function commission_manage(){
        $commission = ManageCommission::all();
        return view('backend.admin.commission.index', compact('commission'));
    }

    public function commission_store(Request $request)
    {
       $commission = new ManageCommission();

       $commission->commission_type = $request->commission_type;
       $commission->percent = $request->percent;

       $commission->save();

       return back();
     }

    public function commission_update(Request $request, $id)
    {
       $commission = ManageCommission::findOrFail($id);

       $commission->commission_type = $request->commission_type;
       $commission->percent = $request->percent;

       $commission->save();

       return back();
     }
    public function commission_destroy($id)
    {
       $commission = ManageCommission::findOrFail($id);

       $commission->delete();

       return back();
     }
}
