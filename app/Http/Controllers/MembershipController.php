<?php

namespace App\Http\Controllers;

use App\Models\ManageMembership;
use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function membership_manage()
    {
        $membership = ManageMembership::all();
        return view('backend.admin.membership.index', compact('membership'));
    }

    public function membership_store(Request $request)
    {
        $request->validate([
            'percent' => 'required'
        ]);

       $manage_membership = new ManageMembership();

       $manage_membership->membership_type = $request->membership_type;
       $manage_membership->percent = $request->percent;

       $manage_membership->save();

       return back();
     }

    public function membership_update(Request $request, $id)
    {
        $request->validate([
            'percent' => 'required'
        ]);

       $manage_membership = ManageMembership::findOrFail($id);

       $manage_membership->percent = $request->percent;

       $manage_membership->save();

       return back();
     }
    public function membership_destroy($id)
    {
       $manage_membership = ManageMembership::findOrFail($id);

       $manage_membership->delete();

       return back();
     }

    public function index()
    {
        $members = Membership::where('member_id', auth()->id())->first();
        
        return view('backend.admin.membership.membership', compact('members'));
    }

    // weekly subscription
    public function weeklySubscription()
    {

        $members = Membership::where('member_id', Auth::id());
        if( $members->exists()){ 

            $member = $members->first();

            $member->package_name = 'weekly';
            $member->membership_date = Carbon::now()->addDays(7);
            $member->amount = 100;
            $member->membership_status = 'on';

            $member->save();

            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }else{
            
            Membership::insert([
                'member_id' => auth()->id(),
                'membership_date' => Carbon::now()->addDays(7),
                'amount' => 100,
                'package_name' => 'weekly',
                'membership_status' => 'on',
            ]);
            return back()->with('success', 'Subscription Purchase successfully');
        }
        
    }

    // monthly subscription
    public function monthlySubscription()
    {
        $members = Membership::where('member_id', Auth::id());
        if( $members->exists()){

            $member = $members->first();

            $member->package_name = 'monthly';
            $member->membership_date = Carbon::now()->addMonths(1);
            $member->amount = 200;
            $member->membership_status = 'on';

            $member->save();

            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }else{
            Membership::insert([
                'member_id' => auth()->id(),
                'membership_date' => Carbon::now()->addMonths(1),
                'package_name' => 'monthly',
                'amount' => 200,
                'membership_status' => 'on',
            ]);
            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }
       
    }

    // yearly subscription 
    public function yearlySubscription()
    {
        $members = Membership::where('member_id', Auth::id());
        if( $members->exists()){

            $member = $members->first();

            $member->package_name = 'yearly';
            $member->membership_date = Carbon::now()->addYears(1);
            $member->amount = 300;
            $member->membership_status = 'on';

            $member->save();

            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }else{
            Membership::insert([
                'member_id' => auth()->id(),
                'membership_date' => Carbon::now()->addMonths(1),
                'package_name' => 'yearly',
                'amount' => 300,
                'membership_status' => 'on',
            ]);
            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }
 
    }

    public function cancelMembership()
    {
        $members = Membership::where('member_id', Auth::id())->first();
        $members->delete();
        return redirect()->back()->with('success', 'Subscription canceled successfully');
    }


}
