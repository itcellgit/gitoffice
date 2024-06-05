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
     // Create the subquery for concatenating departments.


     //compute the sum of no_of_days for each leave type for each staff
     $sum_days=DB::table('leave_staff_applications')
                    ->join('leaves','leaves.id','=','leave_staff_applications.leave_id')
                    ->where('leave_staff_applications.appl_status','!=','rejected')
                    ->select('staff_id', 'leaves.shortname',DB::raw("sum(no_of_days) as total_days"))
                    ->groupBy('leave_staff_applications.staff_id',
                              'leave_staff_applications.leave_id',
                              'leaves.shortname')->get();
      
    $staff = Staff::with(['leave_staff_entitlements' => function ($q) {
        $q->wherePivot('status', 'active');
    }])->whereIn('id', function ($q) {
        $q->select('staff_id')
            ->from('association_staff')
            ->whereIn('association_id', function ($q1) {
                $q1->select('id')
                    ->from('associations')
                    ->where('asso_name', 'like', '%Confirmed%')
                    ->orWhere('asso_name', 'like', '%Contractual%')
                    ->orWhere('asso_name', 'like', '%Probationary%')
                    ->orWhere('asso_name', 'like', '%Temporary%');
            });
    })
    ->get();
                   
                  
                               
                
                  //  dd($staff);

                    $data=[];
                    foreach($staff as $st)
                    {
                        $data[$st->id]=[];
                        $data[$st->id]['id']=$st->id;
                        $data[$st->id]['name']=$st->fname." ".$st->mname." ".$st->lname;
                        foreach($st->leave_staff_entitlements as $lse)
                        {
                            $data[$st->id][$lse->shortname]=[];
                            $data[$st->id][$lse->shortname]['entitled']=$lse->pivot->entitled_curr_year;
                            $data[$st->id][$lse->shortname]['availed']=$lse->pivot->consumed_curr_year;
                            $data[$st->id][$lse->shortname]['balance']=$data[$st->id][$lse->shortname]['entitled']+$lse->pivot->accumulated-$data[$st->id][$lse->shortname]['availed'];
                        }
                        foreach($sum_days as $sd)
                        {
                            if($sd->staff_id==$st->id)
                            {
                                $is_different_leave=true;
                                foreach($st->leave_staff_entitlements as $lse)
                                {
                                    if($lse->shortname==$sd->shortname)
                                    {
                                        $is_different_leave=false;
                                    }
                                }
                                if($is_different_leave)
                                {
                                    $data[$st->id][$sd->shortname]['availed']=$sd->total_days;
                                }
                            }

                        }
                    }
                 //   dd($data);
                //  foreach($data as $d)
                //     foreach($leave_types as $l)
                //           dd($d[$l->shortname]['entitled']);
        return view('ESTB.leaves.leave_entitlement.index',compact(['data','leave_types','leave_types_taken','year'])); //,compact(['Leave_rules','filter']
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
