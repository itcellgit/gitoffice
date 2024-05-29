<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ESTB\leave_staff_entitlement;
use App\Http\Requests\Storeleave_staff_entitlementRequest;
use App\Http\Requests\Updateleave_staff_entitlementRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\leave;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\ScheduledJobs;
class LeaveStaffEntitlementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $s = new ScheduledJobs();
        // $s->yearly_leave_entitlements();
         $year=Carbon::now()->year;

        $leave_types=leave::select('shortname')->distinct('shortname')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();

        $leave_types_taken = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";
        // $staff=DB::select($query);
        // $leave_types_balance = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";

       $staff=staff::with('leave_staff_entitlements')->get();
        return view('ESTB.leaves.leave_entitlement.index',compact(['staff','leave_types','leave_types_taken','year'])); //,compact(['Leave_rules','filter']
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
    public function store(Storeleave_staff_entitlementRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(leave_staff_entitlement $leave_staff_entitlement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leave_staff_entitlement $leave_staff_entitlement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateleave_staff_entitlementRequest $request, leave_staff_entitlement $leave_staff_entitlement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leave_staff_entitlement $leave_staff_entitlement)
    {
        //
    }
}
