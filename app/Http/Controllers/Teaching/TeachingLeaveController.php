<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\Teaching\leave;
use App\Http\Requests\StoreleaveRequest;
use App\Http\Requests\UpdateleaveRequest;
use Auth;
use App\Models\user;
use App\Models\staff;
use App\Models\holidayrh;
use Illuminate\Support\Carbon;
use App\Models\department;
use Illuminate\Support\Facades\DB;


class TeachingLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        
        $user = Auth::user();
        $year=Carbon::now()->year;
        $holidayrh=holidayrh::orderBy('start')->get();
        $staff_leave_entitlements=staff::join('leave_staff_entitlements','staff_id','=','staff.id')
                                        ->join('leaves','leaves.id','=','leave_staff_entitlements.leave_id')
                                        ->where('user_id',$user->id)
                                        ->where('leave_staff_entitlements.year','=',$year)
                                        ->where('leave_staff_entitlements.status','=','active')
                                        ->where('leaves.status','=','active')
                                        ->get();
        $staff_active_dept=staff::with('activedepartments')->where('user_id',$user->id)->first();
        $dept_ids=array();
       //dd($staff_leave_entitlements);
        foreach($staff_active_dept->activedepartments as $depts)
        {
            array_push( $dept_ids,$depts->id);
        }
        $dept_staff=department::with(['staff'=>function($q) use ($staff_leave_entitlements){
               return $q->where('staff.id','!=',$staff_leave_entitlements[0]->staff_id)->where('status','active')->get();
            
            }])->whereIn('id',$dept_ids)->get();
        //dd($dept_staff);
        $staff=staff::with('latest_employee_type')->with('latestassociation')->with('latest_additional_designation')->where('user_id',$user->id)->first();
       //dd($staff);
        if(count($staff->latest_additional_designation)>0)
        {
            foreach($staff->latest_additional_designation as $addtnl_design)
            {
                
                if($addtnl_design->isvacational=="Non-Vacational")
                {
                    $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
                                            ->where('leave_rules.status','active')
                                           -> whereNull('leave_rules.max_time_allowed')
                                           ->where('vacation_type','Non-vacational')
                                           ->where('leaves.status','active')
                                           ->orderBy('leaves.shortname')
                                           ->distinct()
                                            ->get();
                           break;
                }
                else
                {
                    $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
                                            ->where('leave_rules.status','active')
                                           ->whereNull('leave_rules.max_time_allowed')
                                           ->where('vacation_type','vacational')
                                           ->where('leaves.status','active')
                                           ->orderBy('leaves.shortname')
                                           ->distinct()
                                            ->get();
                                            
                }
            }
             
        }
        else
        {
            //dd($staff->latestassociation()->first()->asso_name=='Confirmed');
            if($staff->latest_employee_type[0]->employee_type=="Teaching" && ($staff->latestassociation()->first()->asso_name=='Confirmed'||$staff->latestassociation()->first()->asso_name=='Promotional Probationary'))
            {
                $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
                ->where('leave_rules.status','active')  
                                           ->whereNull('leave_rules.max_time_allowed')
                                           ->where('vacation_type','vacational')
                                           ->where('leaves.status','active')
                                           ->orderBy('leaves.shortname')
                                           ->distinct()
                                            ->get();
            }
            else
            {
                $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
                ->where('leave_rules.status','active')
                                           -> whereNull('leave_rules.max_time_allowed')
                                           ->where('vacation_type','Non-vacational')
                                           ->where('leaves.status','active')
                                           ->orderBy('leaves.shortname')
                                           ->distinct()
                                            ->get();
            }
        }
                   
        return view('Staff.Teaching.leaves',compact(['staff_leave_entitlements','holidayrh','dept_staff','leaves']));

    }

    public function holidayrh_events(){

        $holidayrh=holidayrh::select('id','title','start','type')->get();
        //dd($holidayrh);
        return response()->json($holidayrh);

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
    public function store(StoreleaveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateleaveRequest $request, leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leave $leave)
    {
        //
    }
}
