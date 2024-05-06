<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\leave;
use App\Models\staff;
use App\Models\ESTB\leave_staff_entitlement;

class ScheduledJobs extends Controller
{
    public function yearly_leave_entitlements()
    {
        logger("Teaching vacational running");
        //Teaching Vacational
        $statement="select staff.id, fname,mname, lname
        from staff, employee_types, association_staff
        where staff.id not in
        (SELECT s.id
            FROM `staff` s, designation_staff, designations
             where s.id=designation_staff.staff_id and
                    designation_staff.designation_id=designations.id and
                    designations.isadditional=1 and
                    designations.isvacational='Non-Vacational' and
                    designation_staff.status='active') and
                    employee_types.staff_id=staff.id and
                    association_staff.staff_id=staff.id and
                    employee_types.employee_type='teaching' and
                    (association_staff.association_id in
                        (select id
                            from associations
                            where asso_name='Confirmed' or asso_name='Promotional Probationary')) and
                    association_staff.status='active'";

            $staff=DB::select($statement);
        $leaves=leave::with('leave_rules')->where('vacation_type','Vacational')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();

        $year=Carbon::now()->year;
       // $year=intval($year)+1;
        foreach($staff as $st)
        {
            foreach($leaves as $l)
            {
                //fetch the current staff's previous year leave status from leave_staff_entitlement table

                $query="select * from leave_staff_entitlements where staff_id=".$st->id." and leave_id=".$l->id." and year=".$year-1;
                    $pre_year_entltm=DB::select($query);

                if($pre_year_entltm==null)
                {
                        $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'wef'=>$year.'-01-01']);
                }
                else
                {
                    $pre_year_entltm=$pre_year_entltm[0];
                    if($l->leave_rules[0]->carry_forwardable=='Yes')
                    {
                        $accumulated=$pre_year_entltm->accumulated+$pre_year_entltm->entitled_curr_year-$pre_year_entltm->consumed_curr_year;
                    }
                    else
                    {
                        $accumulated=0;
                    }
                    if($l->leave_rules[0]->encashable=="Yes")
                    {
                        $total_encashable=$pre_year_entltm->total_encashed+$pre_year_entltm->encashed_curr_year;
                    }
                    else
                    {
                        $total_encashable=0;
                    }
                    $staff_entitlement=$st->leave_entitlements()->attach($l->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'accumulated'=>$accumulated,'total_encashed'=> $total_encashable,'wef'=>$year.'-01-01']);
                }

            }

        }
        logger("Teaching non-vacational running");
        //Teaching Non Vacational
        $statement="SELECT s.id FROM `staff` s, designation_staff, designations
        where s.id=designation_staff.staff_id and designation_staff.designation_id=designations.id
        and designations.isadditional=1 and designations.isvacational='Non-Vacational' and designation_staff.status='active'";
        $staff=DB::select($statement);
        $leaves=leave::with('leave_rules')->where('vacation_type','Non-Vacational')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();
        foreach($staff as $st)
        {
            foreach($leaves as $l)
            {
                //fetch the current staff's previous year leave status from leave_staff_entitlement table
                    $query="select * from leave_staff_entitlements where staff_id=".$st->id." and leave_id=".$l->id." and year=".$year-1;
                    $pre_year_entltm=DB::select($query);

                    if($pre_year_entltm==null)
                    {

                        if($l->shortname=='EL')
                        {

                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>0,'wef'=>$year.'-01-01']);
                        }
                        else
                        {

                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'wef'=>$year.'-01-01']);
                        }

                    }
                    else
                    {
                        $pre_year_entltm=$pre_year_entltm[0];
                        if($l->leave_rules[0]->carry_forwardable=='Yes')
                        {
                            $accumulated=$pre_year_entltm->accumulated+$pre_year_entltm->entitled_curr_year-$pre_year_entltm->consumed_curr_year;
                        }
                        else
                        {
                            $accumulated=0;
                        }
                        if($l->leave_rules[0]->encashable=="Yes")
                        {
                            $total_encashable=$pre_year_entltm->total_encashed+$pre_year_entltm->encashed_curr_year;
                        }
                        else
                        {
                            $total_encashable=0;
                        }
                        if($l->shortname=='EL')
                        {

                             $staff_entitlement=$st->leave_entitlements()->attach($l->id,['year'=>$year,'entitled_curr_year'=>0,'accumulated'=>$accumulated,'total_encashed'=> $total_encashable,'wef'=>$year.'01-01']);
                        }
                        else
                        {

                            $staff_entitlement=$st->leave_entitlements()->attach($l->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'accumulated'=>$accumulated,'total_encashed'=> $total_encashable,'wef'=>$year.'01-01']);
                        }

                    }
            }

        }
        logger("Non-Teaching non-vacational");
        //Non-Teaching confirmed to be assigned non-vacational leaves
        $staff=staff::join('employee_types','employee_types.staff_id','=','staff.id')->join('association_staff','association_staff.staff_id','=','staff.id')
               ->where('employee_types.employee_type','=','Non-Teaching')
               ->where('employee_types.status','=','active')
               ->where('association_staff.status','=','active')
                ->where('association_staff.association_id','=',6)
                ->orWhere('association_staff.association_id','=',12)
                ->select('staff.*')->get();


                $leaves=leave::with('leave_rules')->where('vacation_type','Non-Vacational')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();
                foreach($staff as $st)
                {

                    foreach($leaves as $l)
                    {
                        //fetch the current staff's previous year leave status from leave_staff_entitlement table

                        $query="select * from leave_staff_entitlements where staff_id=".$st->id." and leave_id=".$l->id." and year=".$year-1;
                            $pre_year_entltm=DB::select($query);

                        if($pre_year_entltm==null)
                        {
                                $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'wef'=>$year.'-01-01']);
                        }
                        else
                        {
                            $pre_year_entltm=$pre_year_entltm[0];
                            if($l->leave_rules[0]->carry_forwardable=='Yes')
                            {
                                $accumulated=$pre_year_entltm->accumulated+$pre_year_entltm->entitled_curr_year-$pre_year_entltm->consumed_curr_year;
                            }
                            else
                            {
                                $accumulated=0;
                            }
                            if($l->leave_rules[0]->encashable=="Yes")
                            {
                                $total_encashable=$pre_year_entltm->total_encashed+$pre_year_entltm->encashed_curr_year;
                            }
                            else
                            {
                                $total_encashable=0;
                            }
                            $staff_entitlement=$st->leave_entitlements()->attach($l->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'accumulated'=>$accumulated,'total_encashed'=>$pre_year_entltm->total_encashed,'wef'=>$year.'-01-01']);
                        }

                    }

                }
         logger('Yearly entitlement!');

    }
    public function monthly_leave_entitlements()
    {
        //fetch current year and month
        logger('Monthly entitlement started');
        $year=Carbon::now()->year;
      //  $year=intval($year)+1;
        $month=Carbon::now()->month;


        //fetch the staff details who are not confirmed or not on promotional probationary
        $statement="select staff.*, association_staff.start_date as as_start_date from staff, employee_types, association_staff where
        employee_types.staff_id=staff.id and association_staff.staff_id=staff.id and
        association_staff.association_id!=6 and association_staff.association_id!=12 and association_staff.status='active' and staff.id not in
        (select staff_id from leave_staff_entitlements WHERE year!=$year)";

       $staff=DB::select($statement);
        //write the eloquent data access for the above raw query.
       foreach($staff as $st)
       {
        // dd($st);
        //get current date
            $current=Carbon::now()->toDateString();
            //compute the number of days from date of joining
            $doa=Carbon::createFromFormat('Y-m-d', $st->as_start_date);
            //convert the days to float value for further calcuations
            $no_of_days=floatval($doa->diffInDays($current));
            //compute the number of days to be given as entitlement
            $leave_entitlement=floor(fmod($no_of_days,365)/22.5);

            //fetch the leave that has to be given entitlements like cl, rh, el etc
            $leaves=leave::with('general_leaves')->whereHas('general_leaves')->whereNotNull('max_entitlement')->where('vacation_type','Non-Vacational')->where('status','active')->get();


           //check if the month for which the entitlement has to be given is Jan.
            if($month==1)
            {
                foreach($leaves as $l)
                {
                    if($leave_entitlement>$l->max_entitlement)
                    {
                        //applying correction factor if leave_entitlements computed is going to 16
                        $leave_entitlement=$l->max_entitlement;
                    }

                    //get the staff entitlements for previous year. As this staff is on non-confirmed assocation
                    //we need to continute the entitlements with the previous year
                    $statement="select * from leave_staff_entitlements where year=$year-1 and staff_id=$st->id and leave_id=$l->id";
                    $st_entitlement=DB::select($statement);
                    //if count of entitlement for previous year is zero => this employee has new entitlements
                    //else we need to given him/her entitlements based on what is taken in previous year.
                    if(count($st_entitlement)==0 )
                    {
                        if($l->shortname=='CL')
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$leave_entitlement,'wef'=>$year.'01-01']);
                        }
                        else if($l->shortname=='RH')
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'wef'=>$year.'01-01']);
                        }
                        else
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>0,'wef'=>$year.'-01-01']);
                        }
                    }
                    else
                    {
                        if($l->shortname=='CL')
                        {
                            $st_entitlement_previous_year=$st_entitlement[0]->entitled_curr_year-$st_entitlement[0]->consumed_curr_year;
                            $entitled_curr_year=$leave_entitlement-$st_entitlement_previous_year;
                             $staff_entitlement=$leaves->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$entitled_curr_year,'wef'=>$year.'-01-01']);
                        }
                        else if($l->shortname=='RH')
                        {
                            $staff_entitlement=$leaves->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'wef'=>$year.'-01-01']);
                        }
                        else
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>0,'wef'=>$year.'-01-01']);
                        }
                    }
                }
            }
            else
            {
                foreach($leaves as $l)
                {
                    $statement="select * from leave_staff_entitlements where year=$year and staff_id=$st->id and leave_id=$l->id";
                    $st_entitlement=DB::select($statement);
                    if(count($st_entitlement)==0)
                    {
                        if($l->shortname=='CL' )
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$leave_entitlement,'wef'=>$year.'-01-01']);
                        }
                        else if($l->shortname=='RH')
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>$l->max_entitlement,'wef'=>$year.'-01-01']);
                        }
                        else
                        {
                            $staff_entitlement=$l->leave_staff_entitlements()->attach($st->id,['year'=>$year,'entitled_curr_year'=>0,'wef'=>$year.'-01-01']);
                        }
                    }
                    else{
                        $staff_entitlement=staff::with(['leave_staff_entitlements'=>function($q) use($year,$l){
                            $q->where('year',$year)->where('leave_id',$l->id);
                        }])->where('id',$st->id)->first();
                        $staff_entitlement=$staff_entitlement->leave_staff_entitlements[0];
                        if($staff_entitlement->shortname=='CL')
                        {
                            $staff_entitlement->pivot->entitled_curr_year=$l->max_entitlement;
                            $staff_entitlement->pivot->update();
                        }
                    }
                }

            }
        }
    }
    //For Teaching non-vacational employee EL entitlement is updated based on their date of additional desigantion
    //example if an employee was given hod on 18th June 2023 then EL is given on 18th June every year after
    //the first year is completed.  No EL for the first year.
    public function daily_Non_Vacational_EL()
    {
        $year=Carbon::Now()->year;
        $current_month=Carbon::Now()->month;
        $current_day=Carbon::Now()->day;
        $Non_vacational_EL_leave=leave::with('leave_rules')->where('shortname','EL')->where('vacation_type','non-vacational')->where('status','active')->first();

        $staff_el_entitlements= leave_staff_entitlement::
       where('leave_staff_entitlements.leave_id', $Non_vacational_EL_leave->id)
        ->where('year',$year)
        ->where('leave_staff_entitlements.status', 'active')
        ->whereIn('leave_staff_entitlements.staff_id', function ($query) use($year){
            $query->select('staff_id')
                ->from('designation_staff')
                ->where('status','active')
                ->whereYear('start_date','<',$year)
                ->whereIn('designation_id', function ($subQuery) {
                    $subQuery->select('id')
                        ->from('designations')
                        ->where('isvacational', 'non-vacational')
                        ->where('isadditional', 1)
                        ->where('status', 'active');
                });
        })->distinct()
        ->get();
       // dd($staff_el_entitlements);
        foreach($staff_el_entitlements as $s_el_e)
        {
            $get_staff_additional_designation=DB::table('designation_staff')
                ->where('status','active')
                ->whereYear('start_date','<',$year)
                ->whereIn('designation_id',function($q){
                    $q->select('id')
                        ->from('designations')
                        ->where('isadditional',1)
                        ->where('isvacational','non-vacational')
                        ->where('status','active');
                })
                ->where('staff_id',$s_el_e->staff_id)
                ->orderBy(DB::raw("MONTHNAME(start_date)"))
                ->select('start_date')
                ->first();
                if($get_staff_additional_designation!=null)
                {
                     $desingation_start_month=Carbon::parse($get_staff_additional_designation->start_date)->month;
                    $designation_start_day=Carbon::parse($get_staff_additional_designation->start_date)->day;
                    if($current_day==$designation_start_day && $current_month==$desingation_start_month)
                    {
                        $s_el_e->entitled_curr_year=$Non_vacational_EL_leave->max_entitlement;
                        $s_el_e->update();
                    }
                }

        }
        logger('day wise entitlement of EL for Teaching Non-Vacational completed');
    }

    public function inactivate_previous_year()
    {
        $year=Carbon::now()->year-1;
      //  dd($year);
        $leave_entitlement_previous_year=leave_staff_entitlement::where('year',$year)->where('status','active')->get();
    }

}