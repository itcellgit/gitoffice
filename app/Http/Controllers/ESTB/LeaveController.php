<?php

namespace App\Http\Controllers\ESTB;

use App\Models\leave;
use Auth;
use App\Models\staff;
use App\Models\user;
use App\Models\holidayrh;
use App\Http\Requests\StoreleaveRequest;
use App\Http\Requests\UpdateleaveRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\leave_staff_applications;
use App\Models\employee_type;
use App\Http\Requests\Storeleave_staff_applicationsRequest;
use App\Http\Requests\Updateleave_staff_applicationsRequest;
use App\Models\leave_staff_entitlements;
use App\Models\Daywise_Leave;
use Carbon\CarbonPeriod;
use App\Models\notifications;


class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $leaves=leave::with('combine_leave')->with('leave_rules')->orderby('vacation_type')->orderBy('longname')->get();
        //dd($leaves);
        return view('ESTB.leaves.index',compact('leaves'));
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
        $leave=new leave();
        $leave->longname=$request->longname;
        $leave->shortname=$request->shortname;
        $leave->vacation_type=$request->vacation_type;
        $leave->max_entitlement=$request->max_entitlement;
        $leave->min_days=$request->min_days;
        $leave->max_days=$request->max_days;
        $leave->leave_wef=$request->leave_wef;
        $leave->applicable_to=$request->applicable_to;
        $leave->created_at=Carbon::now();
        $insert=$leave->save();
        if($insert)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/leaves')->with('status',$status);
    }

    /**
     * Display the specified resource.
     */
    public function show(leave $leave)
    {
        //

        if($leave->status=='inactive'){
            $leaves=leave::with('latest_combine_leave')->with(['leave_rules'=>function($query){
                $query->orderBy('leave_rules.id','desc');
            }])->where('id',$leave->id)->first();


        }
        else
        {

             $leaves=leave::with('combine_leave')->with([
                'leave_rules'=>function($query){
                $query->orderBy('leave_rules.id','desc');
            }
            ])->where('id',$leave->id)->first();

        }

        $allleaves=leave::orderBy('longname')->get();

        return view('ESTB.leaves.leave_rules.index',compact('leaves','allleaves'));
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
       
        $leave->longname=$request->longname;
        $leave->shortname=$request->shortname;
        $leave->vacation_type=$request->vacation_type;
        $leave->max_entitlement=$request->max_entitlement;
        $leave->min_days=$request->min_days;
        $leave->max_days=$request->max_days;
        $leave->leave_wef=$request->leave_wef;
        $leave->leave_end_date=$request->leave_end_date;
        $leave->applicable_to=$request->applicable_to;
        if($request->leave_end_date)
        {
            $leave->status='inactive';

            $leavecombinations=$leave->combine_leave()->get();

            foreach($leavecombinations as $cl)
            {
                $cl->pivot->status='inactive';
                $cl->pviot->closing_wef=$request->leave_end_date;
                $cl->pivot->update();
            }
            $leave_rules=$leave->leave_rules()->where('status','active')->get();

            foreach($leave_rules as $lr)
            {
              //dd($lr);
                $lr->cf_closing_date=$request->leave_end_date;
               // $lr->cf_closing_gcr=$request->leave_end_date;
                $lr->enc_closing_date =$request->leave_end_date ;
                //$lr->enc_closing_gcr =$request->leave_end_date ;
                $lr->gap_closing_date=$request->leave_end_date;
               // $lr->gap_closing_gcr=$request->leave_end_date;
                $lr->created_at=Carbon::Now();
                $lr->status='inactive';
                $lr->update();
            }

        }
        $leave->created_at=Carbon::now();
        $insert=$leave->save();
        if($insert)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/leaves')->with('status',$status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(leave $leave)
    {

    }

    public function calender_view()
    {

        // $user = Auth::user();
        // $staff_id_from_user = staff::where('user_id','=',$user->id)->first();
        $year=Carbon::now()->year;
        $holidayrh=holidayrh::orderBy('start')->get();

        $staff=staff::with('latest_employee_type')->with('latestassociation')->with('latest_additional_designation')->orderby('fname')->get();

        $leaves=leave::with('combine_leave')->with('leave_rules')->where('status','active')->orderby('vacation_type')->orderBy('longname')->get();
       
        
        //dd($leaves);
        //dd($staff->latest_employee_type);

        // if(count($staff->latest_additional_designation)>0)
        // {
        //     foreach($staff->latest_additional_designation as $addtnl_design)
        //     {

        //         if($addtnl_design->isvacational=="Non-Vacational")
        //         {
        //             $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    -> whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','Non-vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();

        //         }
        //         else
        //         {
        //             $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    ->whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
        //         }
        //     }

        // }
        // else
        // {
        //     //dd($staff->latestassociation()->first()->asso_name=='Confirmed');
        //     if($staff->latest_employee_type[0]->employee_type=="Teaching" && ($staff->latestassociation()->first()->asso_name=='Confirmed'||$staff->latestassociation()->first()->asso_name=='Promotional Probationary'))
        //     {
        //         $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    ->whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
        //     }
        //     else
        //     {
        //         $leaves=DB::table('leaves')->join('leave_rules','leave_rules.leave_id','=','leaves.id')
        //                                    -> whereNull('leave_rules.max_time_allowed')
        //                                    ->where('vacation_type','Non-vacational')
        //                                    ->where('leaves.status','active')
        //                                    ->orderBy('leaves.shortname')
        //                                     ->get();
        //     }
        // }


        return view ('ESTB.leaves.leave_calender.index',compact(['leaves','staff']));
    }



    //to fetch the alternate_staff and additional alternate staff
    public function fetchAlternateStaff(Request $request)
    {
        $selectedStaffId = $request->input('selected_staff_id');

        if (is_null($selectedStaffId)) {
            return response()->json(['error' => 'selected_staff_id parameter is missing in the request.'], 404);
        }

        // Fetch the selected staff with their departments and latest employee type
        $selectedStaff = staff::with(['departments', 'latest_employee_type' => function($query) {
            $query->orderBy('created_at', 'desc'); 
        }])->find($selectedStaffId);

        if (!$selectedStaff) {
            return response()->json(['error' => 'Selected staff not found.'], 404);
        }

        // Get the department IDs of the selected staff
        $departmentIds = $selectedStaff->departments->pluck('id')->toArray();

        // Get the latest employee type of the selected staff
        $staffEmpType = $selectedStaff->latest_employee_type->first()->employee_type;

        // Fetch alternate staff from the same departments with the same employee type
        $alternateStaff = staff::with(['latest_employee_type', 'latestassociation', 'latest_additional_designation'])
                                ->where('id', '!=', $selectedStaffId)
                                ->whereHas('departments', function ($query) use ($departmentIds) {
                                    $query->whereIn('departments.id', $departmentIds);
                                })
                                ->whereHas('latest_employee_type', function ($query) use ($staffEmpType) {
                                    $query->where('employee_type', $staffEmpType);
                                })
                                ->orderBy('fname')
                                ->get();

       
        $additionalAlternateStaff = staff::with(['latest_employee_type', 'latestassociation', 'latest_additional_designation'])
                                    ->where('id', '!=', $selectedStaffId)
                                    ->orderBy('fname')
                                    ->get();

        return response()->json(['alternate_staff' => $alternateStaff, 'additional_alternate_staff' => $additionalAlternateStaff]);
    }


    // To store the staff leave in ESTB
    public function ESTB_Leave_store(Storeleave_staff_applicationsRequest $request)
    {

       //dd($request);
        // Find the staff based on the provided user_id in the request
        $staff = staff::findOrFail($request->staff_id);

        //dd($staff);


        $check_additional_non_vacational = DB::table('designation_staff')
            ->whereIn('designation_id', function ($q) {
                $q->select('id')->from('designations')
                    ->where('isadditional', 1)
                    ->where('isvacational', 'Non-Vacational');
            })
            ->where('staff_id', '=', $staff->id)
            ->where('status', 'active')
            ->count();
    
        $hod = null;
        
        if ($check_additional_non_vacational > 0) {
            $hod = user::select('id as user_id')->where('role', 'Principal')->first();
        } else {
            $hod = staff::select('user_id')
                ->where('staff.id', function ($query) use ($staff) {
                    $query->select('staff_id')
                        ->from('designation_staff')
                        ->whereIn('designation_id', function ($q) {
                            $q->select('id')
                                ->from('designations')
                                ->whereIn('design_name', ['HoD', 'REGISTRAR', 'Controller of examination', 'Dean MBA', 'PLACEMENT OFFICER']);
                        })
                        ->where('status', 'active')
                        ->where('dept_id', function ($q1) use ($staff) {
                            $q1->select('department_id')
                                ->from('department_staff as ds')
                                ->where('ds.staff_id', $staff->id)
                                ->where('ds.status', 'active')
                                ->whereNotExists(function ($query) use ($staff) {
                                    $query->select(DB::raw(1))
                                        ->from('designation_staff as dsg')
                                        ->whereColumn('dsg.dept_id', 'ds.department_id')
                                        ->where('dsg.staff_id', $staff->id)
                                        ->whereNotNull('dsg.dept_id')
                                        ->where('dsg.status', 'active');
                                });
                        });
                })->first();
        }
    
        if (!$hod) {
            return back()->with('error', 'HOD not found.');
        }
    
        $dean_admin = user::where('role', 'Dean_admin')->select('id')->first();
        $principal = user::where('role', 'Principal')->select('id')->first();
    
        $result = $this->validateleave($request, $staff);
        $status = false;
        $leave_appn_id = 0;
    
        if ($result === "success") {
            $leave_application = new leave_staff_applications();
            $leave_application->leave_id = $request->type;
            $leave_application->cl_type = $request->cl_type;
            $from_year = Carbon::parse($request->from_date)->year;
    
            $leave_application->start = $request->from_date;
            $leave_application->end = $request->to_date;
            $leave_application->reason = $request->leave_reason;
            $leave_application->staff_id = $staff->id;
    
            if ($check_additional_non_vacational > 0 || $request->no_of_days >= 5) {
                $leave_application->recommender = $hod->user_id;
                $leave_application->approver = $hod->user_id;
            } else {
                $leave_application->recommender = $hod->user_id;
                $leave_application->approver = $dean_admin->id;
            }
    
            $leave_application->no_of_days = $request->no_of_days;
    
            if ($request->additional_alternate != '#') {
                $leave_application->additional_alternate = $request->additional_alternate;
            }
            $leave_application->alternate = $request->alternate;
    
            $leave_application->appl_status = 'pending';
            $leave_application->leave_status = 'awaiting';
            $leave_application->year = Carbon::parse($request->to_date)->year;
    
            $leave_appn_id = $leave_application->save();
    
            $period = CarbonPeriod::create($request->from_date, $request->to_date);
            $daywise_leave_result = false;
    
            foreach ($period as $dt) {
                $day_wise_leave = new Daywise_Leave();
                $day_wise_leave->leave_staff_applications_id = $leave_application->id;
                $day_wise_leave->leave_id = $request->type;
                $day_wise_leave->start = $dt->format('Y-m-d');
                $daywise_leave_result = $day_wise_leave->save();
            }
    
            $leave_staff_entitlement = leave_staff_entitlements::where('staff_id', $staff->id)
                ->where('leave_id', $request->type)
                ->where('year', $from_year)
                ->first();
    
            if ($leave_staff_entitlement != null) {
                $leave_staff_entitlement->consumed_curr_year = $leave_staff_entitlement->consumed_curr_year + $request->no_of_days;
                $leave_staff_entitlement->update();
            }
    
            $alternate_staff = staff::find($request->alternate);
    
            $user_notification = new notifications();
            $user_notification->user_id = $staff->user_id;
            $user_notification->notification_title = 'Leave Application';
            $user_notification->notification_type = 'Leave';
            $user_notification->date = now();
            $user_notification->description = 'A leave application has been submitted successfully.';
            $user_notification->save();
    
            if ($hod) {
                $hod_notification = new notifications();
                $hod_notification->user_id = $hod->user_id;
                $hod_notification->notification_title = 'Leave Application';
                $hod_notification->notification_type = 'Leave';
                $hod_notification->date = now();
                $hod_notification->description = 'A leave application has been submitted by ' . $staff->fname . ' ' . $staff->mname . ' ' . $staff->lname . ' for your recommendation.';
                $hod_notification->save();
            }
    
            if ($alternate_staff) {
                $alternate_user_id = staff::where('id', $request->alternate)->value('user_id');
                $alternate_notification = new notifications();
                $alternate_notification->user_id = $alternate_user_id;
                $alternate_notification->notification_title = 'Leave Assignment';
                $alternate_notification->notification_type = 'leave';
                $alternate_notification->date = now();
                $alternate_notification->description = 'You have been assigned as an alternate for a leave application submitted by ' . $staff->fname . ' ' . $staff->mname . ' ' . $staff->lname;
                $alternate_notification->save();
            }
        }
     
        if ($leave_appn_id && $daywise_leave_result && $result) {
            $status = 1;
        } else {
            $status = $result;
        }
        $return_data = [
            'status' => $status,
            'result' => $result,
            'start_date' => $request->from_date,
            'leave_type' => $request->type,
            'appl_edit' => 0,
            'reason' => $request->leave_reason,
            'alternative' => $request->alternate
        ];
        
        //dd($return_data);
        //return redirect('/ESTB/leaves/leave_calender')->with('return_data', $return_data);
        return redirect()->back()->with('return_data', $return_data);
    }
    


    //Validate the leave in ESTB
    public function validateleave(request $request, staff $staff)
    {

        $result="";
        $leave=leave::with(['combine_leave'=>function($q){
            $q->wherePivot('status','active');
        }])->with(['leave_rules'=>function($q){
            $q->where('leave_rules.status','active');
        }])->where('id',$request->type)->first();

        //dd($staff_leaves_applications);
        //Rules to check
        //1. Leave days must not overlap.
        //2. Leave can be combined with only a few type of leaves and also they can be take on one side or bothsides -listed in combine_leaves
        //3. no. of days of leave must be more than min_days and less than max_days - listed in leaves table
        //4. the gap between two similar kind of leave is maintained (applicable for special type of leaves) - listed in leave_rules
        //5. special type of leave can be availed for a maximum times in a specified periord - listed in leave_rules
        //6. Some leave require prior initmation ie., the leave application must be done that many days before availing the leave - listed in leave_rules
        //7. The total number of leaves that any staff can take in a year must be less than the total number of leaves entitled for that year - listed as entitled_cur_year in leave_staff_entitlements

        //Rule 4:Gap between leaves
        $similar_leave_appl=$result = leave_staff_applications::
            where('staff_id', $staff->id)
            ->where('leave_id', $request->type)
            ->select(DB::raw('ABS(DATEDIFF(start, "2024-05-27")) as days'))
            ->take(1)->get();
         if($leave->leave_rules[0]->gas=="Yes" && $leave->leave_rules[0]->min_gap>$similar_leave_appl->days)
         {
            $result="Error You have already taken a similar leave recently. You must wait for at least ".$leave->leave_rules[0]->min_gap.".";
            return $result;
        }

        
      //  if($similar_leave_appl->days<$leave->leave_rules-
        //implementation of the above rules
        $result="";
        $from_year=Carbon::parse($request->from_date)->year;
        $to_year=Carbon::parse($request->to_date)->year;
        if($from_year!=$to_year)
        {
            $result.="Error: Leave dates cannot be from two different years. Please create two different applications for the respective years. ";
            return $result;
        }
        $staff_leave_entitlements=leave_staff_entitlements::where('staff_id',$staff->id)->where('leave_id',$request->type)->where('year',$from_year)->first();
        // dd($staff_leave_entitlements->consumed_curr_year);
        if($staff_leave_entitlements!=null)
        {
            if($request->no_of_days+$staff_leave_entitlements->consumed_curr_year>($staff_leave_entitlements->entitled_curr_year+$staff_leave_entitlements->accumulated))
            {
                $result.="Error: You do not have that many leaves left to your credit. You can avail only ".($staff_leave_entitlements->entitled_curr_year+$staff_leave_entitlements->accumulated)-$staff_leave_entitlements->consumed_curr_year.".  ";
            }
        }

        $leave=leave::with('combine_leave')->with('leave_rules')->where('id',$request->type)->first();

        //Rule-1: No overlapping leaves
        $staff_leaves=array();
        //this 'if' is only to check for overlapping of leave in case of new leaves
        //it must not be checked for updated leave
        if(!$request->has('leave_staff_application_id')){
                $staff_leaves=DB::table('daywise__leaves as daywise')
                        ->join('leave_staff_applications','leave_staff_applications.id','=','daywise.leave_staff_applications_id')
                        ->join('leaves','leaves.id','=','daywise.leave_id')
                        ->where('leave_staff_applications.appl_status','!=','rejected')
                        ->where('leave_staff_applications.staff_id',$staff->id)
                        ->whereBetween('daywise.start',[$request->from_date,$request->to_date])
                        ->select('leaves.shortname','leave_staff_applications.*','daywise.start as leaveday')->get();
        }

        //leave ending on previous day of this leave start day duration variable is initialised to 0.
        $previous_leave_duration=0;
        //leave starting on next day of this leave end day duration variable is initialised to 0.
        $next_leave_duration=0;
        //if $staff_leaves count is greater than 0 => the leave dates are clashing
        if(count($staff_leaves)>0)
        {
            $result="Error: The day mentioned in this leave applicaiton is having an overlapping days of another leave application. ";
            return $result;
        }
        // else indicates that the leave dates are not clashing hence, check for any leave that is ending on the previous day of this applications start date
        //if there is any leave application before the start date =>
        // 1. Check if both leave types are same, if both are same check for the total number of days of leave (both together).
        // It should not be more than the max_days allowed for that leave type
        //if the leave types are not same then check they can be availed together or no.
        $previous_date=Carbon::parse($request->from_date)->addDays(-1)->format('Y-m-d');
        $leaveholidayflag=true;
        $total_no_of_leave_days=0;

        while($leaveholidayflag && $request->cl_type!='Afternoon')
        {
            $holidaydates=[];
            $isFirstOrThirdSaturdayflag=false;
            $holidays=holidayrh::where('start',$previous_date)->where('title','not like','Republic Day')->whereOr('title','not like','Independence Day')->first();
            if($holidays!=null)
            {
                $holidaydates[]=Carbon::parse($previous_date)->format('d-m-Y');
                $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');

            }
            $dayofweek=Carbon::parse($previous_date)->format('l');
            if($dayofweek=="Sunday")
            {
                $holidaydates[]=Carbon::parse($previous_date)->format('d-m-Y');
                $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');
            }
            $isFirstOrThirdSaturdayflag=$this->isFirstOrThirdSaturday($previous_date);

            if($isFirstOrThirdSaturdayflag)
            {
                $holidaydates[]=Carbon::parse($previous_date)->format('d-m-Y');
                $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');

            }
            //check if the day previous to leave start day ther was a leave
            $staff_leaves_before_start_day=leave_staff_applications::
                join('leaves','leaves.id','=','leave_staff_applications.leave_id')
                ->where('leave_staff_applications.staff_id',$staff->id)
                ->where('end',$previous_date)
                ->where('leaves.shortname','Not like','%DL%')
                ->select('leaves.shortname','leave_staff_applications.*')->first();
                
                //if there is a leave check if it is morning half day, if leave is morning half day then staff can avail any leave
                //if the previous day leave is not morning half day and the current leave applicaiton is cl afternoon, then there is no issue.
                //but if the previous day is not morning half day and current leave is not afternoon half day then, check if they can be combined or no.
            if($staff_leaves_before_start_day!=null && $staff_leaves_before_start_day->cl_type!='Morning')
            {

                if(count($holidaydates)>0)
                {
                    $result="Error: You are extending your current leave with a holiday inbetween.  Please apply this leave from the date ".$holidaydates[count($holidaydates) - 1].".";
                }
                //if the previous day leave and current leave are same type then it implies that staff is extending the current leave type
                //compute the total leave days as it must not be more than max allowed at a time.
                if( $staff_leaves_before_start_day->leave_id==$request->type)
                {
                        //the two leave are of same type so check for maximum days allowed
                        $total_no_of_leave_days=$total_no_of_leave_days+$staff_leaves_before_start_day->no_of_days;
                        $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');
                        continue;
                }
                else
                {
                    $not_combine_able=true;

                    foreach($leave->combine_leave as $leavecombination)
                    {
                        if($leavecombination->pivot->combined_id==$staff_leaves_before_start_day->leave_id)
                        {
                            $not_combine_able=false;
                            $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');
                            break;
                        }
                    }
                    if($not_combine_able)
                    {

                        $result.="Error: Application rejected as it is combined with a leave that is not allowed. ";
                        return $result;
                    }
                }
            }
            else
            {
                $leaveholidayflag=false;
            }

            if($staff_leaves_before_start_day==null && $holidays==null && $dayofweek!='Sunday' && $isFirstOrThirdSaturdayflag==false)
            {
                $leaveholidayflag=false;
            }
        }

        $next_date=Carbon::parse($request->to_date)->addDays(1)->format('Y-m-d');
        $leaveholidayflag=true;

        while($leaveholidayflag && $request->cl_type!='Morning')
        {
            $holidaydatespost=[];
            $isFirstOrThirdSaturdayflag=false;
            $holidays=holidayrh::where('start',$next_date)->where('title','not like','Republic Day')->whereOr('title','not like','Independence Day')->first();
            if($holidays!=null)
            {
                $holidaydatespost[]=Carbon::parse( $next_date)->format('d-m-Y');
                $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');

            }
            $dayofweek=Carbon::parse( $next_date)->format('l');
            if($dayofweek=="Sunday")
            {
                $holidaydatespost[]=Carbon::parse( $next_date)->format('d-m-Y');
                $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');

            }
            $isFirstOrThirdSaturdayflag=$this->isFirstOrThirdSaturday($previous_date);
            if($isFirstOrThirdSaturdayflag)
            {
                $holidaydatespost[]=Carbon::parse( $next_date)->format('d-m-Y');
                $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');

            }
            $staff_leave_after_end_date=leave_staff_applications::
                join('leaves','leaves.id','=','leave_staff_applications.leave_id')
                ->where('leave_staff_applications.staff_id',$staff->id)
                ->where('leaves.shortname','Not like','%DL%')
                ->where('start',$next_date)
                ->select('leaves.shortname','leave_staff_applications.*')->first();

            if($staff_leave_after_end_date!=null && $staff_leave_after_end_date->cl_type!='Afternoon')
            {
              //  dd($holidaydatespost);
                if(count($holidaydatespost)>0)
                {
                    $result="Error: You are extending your current leave with a holiday inbetween.  Please apply this leave upto the date ".$holidaydatespost[count($holidaydatespost) - 1].".";
                }
                if($staff_leave_after_end_date->leave_id==$request->type)
                {
                    $total_no_of_leave_days=$total_no_of_leave_days+$staff_leave_after_end_date->no_of_days;
                    $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');
                    continue;
                }
                else
                {
                    $not_combine_able=true;

                    foreach($leave->combine_leave as $leavecombination)
                    {
                        if($leavecombination->pivot->combined_id==$staff_leave_after_end_date->leave_id || $request->cl_type=='Morning' || $staff_leaves_before_start_day->cl_type=='Afternoon')
                        {
                            $not_combine_able=false;
                            break;
                        }
                    }
                    if($not_combine_able)
                    {
                        $result.="Error: Application rejected as it is combined with a leave that is not allowed. ";
                        return $result;
                    }

                }
            }

            if($staff_leave_after_end_date==null && $holidays==null && $dayofweek!='Sunday' && $isFirstOrThirdSaturdayflag==false)
            {
                $leaveholidayflag=false;
            }
        }

        if($request->no_of_days<$leave->min_days)
        {
            $result= "Error:Request does not match the min days requirement - Min days allowed is ".$leave->min_days.". ";
        }

        elseif($request->no_of_days+ $total_no_of_leave_days>$leave->max_days && $leave->max_days!=null)
        {
            $result=$result. "Error:You cannot extend your leave days as it voilates the max days allowed for this leave type and Max days allowed is ".$leave->max_days.". ";
        }


        //code for Rule-2.
        //code for Rule-4
        //Note: Carbon has a function diffInDays that returns no. of days between two dates
        //but this function return the absolute value of prior date as well as future date.
        //we need to check if the leave start date if a future date so not using diffInDays()
        //application date is today
        if($leave->leave_rules[0]->prior_intimation_days>0)
        {
            $today=Carbon::now();
            $three_days_from_current_date=$today->addDays($leave->leave_rules[0]->prior_intimation_days);
            $leave_start_date=Carbon::parse($request->from_date);

        // dd($request->from_date.' carbon='.$leave_start_date.' three days after='.$three_days_from_current_date.' greaterthanor='.$leave_start_date->greaterThanOrEqualTo($three_days_from_current_date));
            if($leave_start_date->lessThan($three_days_from_current_date))
            {
                $result=$result."Error:Application is rejected as the application must be done ".$leave->leave_rules[0]->prior_intimation_days." days before. ";
            }
        }

        if($result=="")
        {
                return "success";
        }
        return $result;
    }

    function isFirstOrThirdSaturday($dateString) {
        // Parse the date string into a Carbon instance
        $date = Carbon::parse($dateString);

        // Get the day of the week (0 for Sunday, 6 for Saturday)
        $dayOfWeek = $date->dayOfWeek;

        // Get the day of the month
        $dayOfMonth = $date->day;

        // Check if it's Saturday and it's either the first or third week of the month
        if ($dayOfWeek === Carbon::SATURDAY && (($dayOfMonth >= 1 && $dayOfMonth <= 7) || ($dayOfMonth >= 15 && $dayOfMonth <= 21))) {
            return true;
        } else {
            return false;
        }
    }


     //for editing the applied leave.
    public function edit_myleave(Request $request){
      
        $application_id = $request->input('application_id');
        dd($application_id);

        $result = leave_staff_applications:: join('leaves','leaves.id','=','leave_staff_applications.leave_id')
            ->where('leave_staff_applications.id', $application_id)
            ->get();
    
        //dd($result);
        return $result;
    }

   


    //Function for Updating the Leave in the ESTB Staff 
     //for updating the leave application (Editing)
    public function ESTB_leave_update(Updateleave_staff_applicationsRequest $request)
    {
        
        //$user = Auth::User();
        $staff=staff::where('user_id','=',$user->id)->first();
        $result=$this->validateleave($request,$staff);
        // dd($request);
         $leave_staff_applications=leave_staff_applications::where('id',$request->leave_staff_application_id)->first();
        // dd($request->leave_staff_application_id);
          $update_result = '';
         if($result == "success"){ //if validation of leave rules hold good then insert.
         //     //dd($result);
              $from_year=Carbon::parse($request->from_date)->year;
            //dd($leave_staff_applications);
             $difference_in_days=$request->no_of_days-$leave_staff_applications->no_of_days;
            // dd($request->no_of_days.' '.$leave_staff_applications->no_of_days.' '.$difference_in_days);
             $leave_staff_entitlement=leave_staff_entitlements::where('staff_id',$staff->id)->where('leave_id',$request->type)->where('year', $from_year)->first();
 
             if($leave_staff_entitlement!=null)
             {
                 $leave_staff_entitlement->consumed_curr_year= $leave_staff_entitlement->consumed_curr_year+$difference_in_days;
              //   dd($leave_staff_entitlement->consumed_curr_year);
                 $leave_staff_entitlement->update();
             }
             if($request->additional_alternate=='#')
             {
                 $additional_aternate=null;
             }
             else
             {
                 $additional_aternate=$request->additional_alternate;
             }
             $update_result =  DB::table('leave_staff_applications')
                         ->where('id', $request->leave_staff_application_id)
                         ->update(['leave_id' => $request->type,
                         'cl_type' => $request->cl_type,
                         'start' => $request->from_date,
                         'end' => $request->to_date,
                         'no_of_days' => $request->no_of_days,
                         'reason' => $request->leave_reason,
                         'alternate' => $request->alternate,
                         'additional_alternate' => $additional_aternate]);
 
              //dd($update_result);
             // = $leave_staff_applications->update();
             $daywise_leave_result = false;
 
             //checking if the previous start and end dates are modified
             if($leave_staff_applications->start != $request->from_date || $leave_staff_applications->end != $request->to_date){
 
                 //for deleting the old entries.
                 $previous_entry_delete_result = Daywise_Leave::where('leave_staff_applications_id', $request->leave_staff_application_id)->delete();
 
                 //inserting the new values.
                 $period = CarbonPeriod::create($request->from_date, $request->to_date);
 
 
 
                 foreach ($period as $dt) {
 
                     $day_wise_leave = new Daywise_Leave();
                     $day_wise_leave->leave_staff_applications_id = $request->leave_staff_application_id;
                     $day_wise_leave->leave_id = $request->type;
                     $day_wise_leave->start = $dt->format('Y-m-d');
                     //dd($dt->format('Y-m-d'));
                     $daywise_leave_result = $day_wise_leave->save();
 
                 }
             }
 
 
        }
         //$result = 'success';
         if($update_result  && $daywise_leave_result && $result){
             $status = 1;
         }else{
             $status = $result;
         }
 
         $return_data = [
             'status' => $status,
             'result' => $result,
             'start_date'=>$request->from_date,
             'leave_type'=>$request->type,
             'appl_edit'=>1,
             'reason'=>$request->leave_reason,
             'alternative'=>$request->alternate
         ];
 
         return redirect('/Teaching/leaves/')->with('return_data', $return_data);
 
    }


    public function hollidayrh_events(){

        $holidayrh=holidayrh::select('id','title','start','type')->get();
        //dd($holidayrh);
        return response()->json($holidayrh);

    }

       //used in ESTB leaves calender section
       public function fetchAllleaveevents(Request $request){

        $leave_events= DB::table('daywise__leaves as daywise')
        ->select(
            DB::raw("CONCAT(leaves.shortname, '-', COUNT(leaves.shortname))  AS title"),
                     'leaves.shortname as leave_name',
            'daywise.start as start',
            DB::raw('DATE_ADD(daywise.start, INTERVAL 1 DAY) AS end'),
            DB::raw('SUM(case when leave_staff_applications.appl_status="pending" then 1 else 0 end) as pending_count'),
            
        )
        ->join('leave_staff_applications', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
        ->groupBy('daywise.start','leaves.shortname')
        ->get();

        //$user = Auth::user();
        //$staff = staff::where('user_id','=',$user->id)->first();
        // Process the date as needed (e.g., save to database, perform calculations)
        // $leave_events = leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        // ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        // ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        // ->join('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        // //->where('leave_staff_applications.staff_id',$staff->id)

        // ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),'leaves.shortname AS title','leave_staff_applications.start AS start', 'leave_staff_applications.end AS end', 'leave_staff_applications.leave_id AS leave_id','leave_staff_applications.appl_status AS appl_status','leave_staff_applications.id AS Application_id', 'leave_staff_applications.reason AS reason')->get();
        // // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }

    //ESTB fetch leave events after event clicking
    public function fetchleaveevents(Request $request){
        $date = $request->input('date');
        $shortname=$request->input('leave_name');
        //dd($date);
        // $user = Auth::user();
        // $staff = staff::where('user_id','=',$user->id)->first();
        // dd($staff);
        // Process the date as needed (e.g., save to database, perform calculations)

       // Create the subquery for concatenating departments.
        $departmentsSubquery = DB::table('department_staff')
            ->join('departments', 'departments.id', '=', 'department_staff.department_id')
            ->where('department_staff.status', 'active')
            ->select(
                'department_staff.staff_id',
                DB::raw('GROUP_CONCAT(departments.dept_shortname ORDER BY departments.dept_shortname ASC SEPARATOR ", ") as dept_shortname')
            )
            ->groupBy('department_staff.staff_id');
        
        //fetch the staff leaves based on given date and leave.shortname
        $leave_events = leave_staff_applications::join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
        ->join('staff AS s1', 's1.id', '=', 'leave_staff_applications.staff_id')
        ->join('staff AS s2', 's2.id', '=', 'leave_staff_applications.alternate')
        ->leftJoin('staff AS s3', 's3.id', '=', 'leave_staff_applications.additional_alternate')
        ->leftJoinSub($departmentsSubquery, 'grouped_depts', function($join) {
            $join->on('grouped_depts.staff_id', '=', 'leave_staff_applications.staff_id');
        })
        ->whereDate('leave_staff_applications.start', '<=', $date)
        ->whereDate('leave_staff_applications.end', '>=', $date)
        ->where('leaves.shortname', $shortname)
        ->select(
            DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
            DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
            DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
            DB::raw('(CASE WHEN leave_staff_applications.cl_type="Morning" THEN "-Morning" 
                         WHEN leave_staff_applications.cl_type="Afternoon" THEN "-Afternoon" ELSE "" END) as cltype'),
            DB::raw("CONCAT(leaves.shortname,' ',(CASE WHEN leave_staff_applications.cl_type='Morning' THEN '-Morning' 
                         WHEN leave_staff_applications.cl_type='Afternoon' THEN '-Afternoon' ELSE '' END)) AS title"),
            'leave_staff_applications.start AS start',
            'leave_staff_applications.end AS end',
            'leave_staff_applications.leave_id AS leave_id',
            'leave_staff_applications.appl_status AS appl_status',
            'leave_staff_applications.id AS Application_id',
            'leave_staff_applications.reason AS reason',
            'leaves.shortname AS leave_name',
            'grouped_depts.dept_shortname as shortname'
        )
        ->groupBy(
            'leave_staff_applications.id',
            's1.fname', 's1.mname', 's1.lname', 
            's2.fname', 's2.mname', 's2.lname', 
            's3.fname', 's3.mname', 's3.lname', 
            'leave_staff_applications.cl_type', 
            'leaves.shortname', 
            'leave_staff_applications.start', 
            'leave_staff_applications.end', 
            'leave_staff_applications.leave_id', 
            'leave_staff_applications.appl_status', 
            'leave_staff_applications.reason',
            'grouped_depts.dept_shortname'
        )
        ->get();     
        
    
      //  dd($leave_events);
        // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }

     //for fetching the specific holiday and rh for the clicked date (Ajax call)
     public function fetchholidayrhevents(Request $request){

        $date = $request->input('date');
        //dd($date);
        // Process the date as needed (e.g., save to database, perform calculations)
        $holidayrh_list=holidayrh::where('start',$date)->get();
        // Return a response (optional)
        //dd($holidayrh_list);
        return response()->json($holidayrh_list);
        //['message' => 'Date clicked: ' . $date]
    }
}
