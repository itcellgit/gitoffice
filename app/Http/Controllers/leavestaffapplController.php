<?php
namespace App\Http\Controllers;

use App\Models\leave_staff_applications;
use App\Http\Requests\Storeleave_staff_applicationsRequest;
use App\Http\Requests\Updateleave_staff_applicationsRequest;
use Auth;
use App\Models\staff;
use App\Models\leave;
use App\Models\user;
use App\Models\holidayrh;
use Illuminate\Support\Carbon;
use App\Models\department;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\leave_staff_entitlements;
use App\Models\Daywise_Leave;
use Carbon\CarbonPeriod;
use Session;


class LeaveStaffApplController extends Controller
{

public function validateleave(request $request, staff $staff){

    $result="";
    $leave=leave::with('combine_leave')->with('leave_rules')->where('id',$request->type)->first();

    //dd($staff_leaves_applications);
    //Rules to check
    //1. Leave days must not overlap.
    //2. Leave can be combined with only a few type of leaves and also they can be take on one side or bothsides -listed in combine_leaves
    //3. no. of days of leave must be more than min_days and less than max_days - listed in leaves table
    //4. the gap between two similar kind of leave is maintained (applicable for special type of leaves) - listed in leave_rules
    //5. special type of leave can be availed for a maximum times in a specified periord - listed in leave_rules
    //6. Some leave require prior initmation ie., the leave application must be done that many days before availing the leave - listed in leave_rules
    //7. The total number of leaves that any staff can take in a year must be less than the total number of leaves entitled for that year - listed as entitled_cur_year in leave_staff_entitlements

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

    //Code for Rule-1.
    //check for the overlapping leaves
    $staff_leaves=array();
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
    while($leaveholidayflag && $request->cl_type!='Afternoon')
    {
        //check if the day previous to leave start day ther was a leave
        $staff_leaves_before_start_day=leave_staff_applications::
            join('leaves','leaves.id','=','leave_staff_applications.leave_id')
            ->where('leave_staff_applications.staff_id',$staff->id)
            ->where('end',$previous_date)
            ->select('leaves.shortname','leave_staff_applications.*')->first();
            //if there is a leave check if it is morning half day, if leave is morning half day then staff can avail any leave
            //if the previous day leave is not morning half day and the current leave applicaiton is cl afternoon, then there is no issue. 
            //but if the previous day is not morning half day and current leave is not afternoon half day then, check if they can be combined or no. 
        if($staff_leaves_before_start_day!=null && $staff_leaves_before_start_day->cl_type!='Morning')
        {   
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
        $holidays=holidayrh::where('start',$previous_date)->first();
        if($holidays!=null)
        {
            $holidaydates[]=Carbon::parse($previous_date)->format('d-m-Y');
            $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');
            continue;
        }
        $dayofweek=Carbon::parse($previous_date)->format('l');
        if($dayofweek=="Sunday")
        {
            $holidaydates[]=Carbon::parse($previous_date)->format('d-m-Y');
            $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');
            continue;
        }
        $isFirstOrThirdSaturdayflag=$this->isFirstOrThirdSaturday($previous_date);
        if($isFirstOrThirdSaturdayflag)
        {
            $holidaydates[]=Carbon::parse($previous_date)->format('d-m-Y');
            $previous_date=Carbon::parse($previous_date)->addDays(-1)->format('Y-m-d');
            continue;
        } 
        if($staff_leaves_before_start_day==null && $holidays==null && $dayofweek!='Sunday' && isFirstOrThirdSaturdayflag==false)
        {
            $leaveholidayflag=false;
        }
    }
    $next_date=Carbon::parse($request->to_date)->addDays(1)->format('Y-m-d');
    $leaveholidayflag=true;
    while($leaveholidayflag && $request->cl_type!='Morning')
    {
        $staff_leave_after_end_date=leave_staff_applications::
            join('leaves','leaves.id','=','leave_staff_applications.leave_id')
            ->where('leave_staff_applications.staff_id',$staff->id)
            ->where('start',$next_date)
            ->select('leaves.shortname','leave_staff_applications.*')->first();
        $holidaydates=array();
        if($staff_leave_after_end_date!=null && $staff_leaves_before_start_day->cl_type!='Afternoon')
        {
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
        $holidays=holidayrh::where('start',$next_date)->first();
        if($holidays!=null)
        {
            $holidaydatespost[]=Carbon::parse( $next_date)->format('d-m-Y');
            $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');
            continue;
        }
        $dayofweek=Carbon::parse( $next_date)->format('l');
        if($dayofweek=="Sunday")
        {
            $holidaydatespost[]=Carbon::parse( $next_date)->format('d-m-Y');
            $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');
            continue;
        }
        $isFirstOrThirdSaturdayflag=$this->isFirstOrThirdSaturday($previous_date);
        if($isFirstOrThirdSaturdayflag)
        {
            $holidaydatespost[]=Carbon::parse( $next_date)->format('d-m-Y');
            $next_date=Carbon::parse( $next_date)->addDays(1)->format('Y-m-d');
            continue;
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
            dd($request->no_of_days." ".$total_no_of_leave_days);
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
}