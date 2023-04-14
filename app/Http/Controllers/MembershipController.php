<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        return view('backend.admin.membership.membership');
    }

    // weekly subscription
    public function weeklySubscription()
    {
        Membership::insert([
            'member_id' => auth()->id(),
            'membership_date' => Carbon::now()->addDays(7),
            'membership_status' => 'on',
        ]);
        return redirect()->back()->with('success', 'Subscription Purchase successfully');
    }

    // monthly subscription
    public function monthlySubscription()
    {
        Membership::insert([
            'member_id' => auth()->id(),
            'membership_date' => Carbon::now()->addMonths(1),
            'membership_status' => 'on',
        ]);
        return redirect()->back()->with('success', 'Subscription Purchase successfully');
    }

    // yearly subscription 
    public function yearlySubscription()
    {
        Membership::insert([
            'member_id' => auth()->id(),
            'membership_date' => Carbon::now()->addYears(1),
            'membership_status' => 'on',
        ]);
        return redirect()->back()->with('success', 'Subscription Purchase successfully');
    }

}
