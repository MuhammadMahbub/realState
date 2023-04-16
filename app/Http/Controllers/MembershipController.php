<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
 

class MembershipController extends Controller
{
    public function index()
    {

        $members = Membership::where('member_id', auth()->id())->first();
        return view('backend.admin.membership.membership', compact('members'));
    }

    // weekly subscription
    public function weeklySubscription()
    {
        $members = Membership::where('member_id', Auth::id())->first();
        
        if($members->membership_status == "off"){
            Membership::findOrFail(Auth::id())->update([
                'member_id' => auth()->id(),
                'membership_date' => Carbon::now()->addDays(7),
                'amount' => 100,
                'package_name' => 'weekly',
                'membership_status' => 'on',
            ]);
            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }
        else {
            if( $members->exists()){
                return redirect()->back()->with('fail', 'You have already Purchase one plan');
            }
            else {
                Membership::insert([
                    'member_id' => auth()->id(),
                    'membership_date' => Carbon::now()->addDays(7),
                    'amount' => 100,
                    'package_name' => 'weekly',
                    'membership_status' => 'on',
                ]);
                return redirect()->back()->with('success', 'Subscription Purchase successfully');
            }
           
        }

       
     
    }

    // monthly subscription
    public function monthlySubscription()
    {
        
        $members = Membership::where('member_id', Auth::id())->first();
        if($members->membership_status == "off"){
            Membership::findOrFail(Auth::id())->update([
                'member_id' => auth()->id(),
                'membership_date' => Carbon::now()->addMonths(1),
                'amount' => 200,
                'membership_status' => 'on',
            ]);
            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        }
        else {
            if( $members->exists()){
                return redirect()->back()->with('fail', 'You have already Purchase one plan');
            }
            else {
                Membership::insert([
                    'member_id' => auth()->id(),
                    'membership_date' => Carbon::now()->addMonths(1),
                    'amount' => 200,
                    'membership_status' => 'on',
                ]);
                return redirect()->back()->with('success', 'Subscription Purchase successfully');
            }
           
        }


       
    }

    // yearly subscription 
    public function yearlySubscription()
    {

      

        if(Membership::where('member_id', Auth::id())->orWhere('membership_status', 'off')->exists()){
            return redirect()->back()->with('fail', 'You have already Purchase one plan'); 
        }
        else {
            Membership::insert([
                'member_id' => auth()->id(),
                'membership_date' => Carbon::now()->addYears(1),
                'amount' => 300,
                'membership_status' => 'on',
            ]);
            return redirect()->back()->with('success', 'Subscription Purchase successfully');
        } 
    }

    public function cancelMembership()
    {
        Membership::findOrFail(Auth::id())->update([
            'membership_status' => 'off'
        ]);
        return redirect()->back()->with('success', 'Subscription cancel successfully');
    }


}
