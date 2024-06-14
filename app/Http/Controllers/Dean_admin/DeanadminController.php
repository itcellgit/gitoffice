<?php

namespace App\Http\Controllers\Dean_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\leave;
use App\Models\staff;
use Illuminate\Support\Carbon;
use App\Models\holidayrh;
use App\Http\Controllers\ScheduledJobs;
use App\Models\leave_staff_applications;
use App\Models\leave_staff_entitlements;
use App\Models\designation;
use App\Models\department;
use App\Models\employee_type;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\teaching_payscale;
use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Models\consolidated_teaching_pay;
use App\Models\users;
use App\Models\fixed_nt_pay;
use App\Models\event;
use App\Models\notice;

use Session;
use Hash;
use Auth;

class DeanadminController extends Controller
{
    //
    public function dashboard()
    {
        //event
        $dean_admin_event = event::with('department')->get();

         //notice
         $dean_admin_notice = notice::with('department')->get();


       return view('Dean_admin.dashboard',compact('dean_admin_event','dean_admin_notice'));
    }

    public function leaves_lest()
    {
        $leaves=leave::with('combine_leave')->with('leave_rules')->orderby('vacation_type')->orderBy('longname')->get();

        return view('Dean_admin.leaves_management.daleaves',compact('leaves'));
    }


    public function da_leaves_entitlement()
    {

        $year=Carbon::now()->year;

        $leave_types=leave::select('shortname')->distinct('shortname')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();

        $leave_types_taken = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";
        // $staff=DB::select($query);
        // $leave_types_balance = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";

        $staff=staff::with('leave_staff_entitlements')->with('teaching_employee')->get();

        return view('Dean_admin.leaves_management.daleaves_entitlement',compact(['staff','leave_types','leave_types_taken','year'])); //,compact(['Leave_rules','filter']

    }


    public function da_holiday_rh_list()
    {
        //
        $filter = '';
        $holidayrh=holidayrh::orderBy('start')->get();
        return view('Dean_admin.leaves_management.daholiday_rh_list',compact('holidayrh','filter'));
    }


    public function da_calender_view()
    {

        // $user = Auth::user();
        // $staff_id_from_user = staff::where('user_id','=',$user->id)->first();
        $year=Carbon::now()->year;
        $holidayrh=holidayrh::orderBy('start')->get();

        $staff=staff::with('latest_employee_type')->with('latestassociation')->with('latest_additional_designation')->get();

        //dd($staff->latest_employee_type);

        
        return view ('Dean_admin.leaves_management.daleaves_calender');
    }

    public function staff_view()
    {
        $filter="";
       // dd($staff1);
       $staff=staff::with('designations')
        ->with('associations')
       ->with('departments' )
       ->with('teaching_payscale')
       ->with('ntpayscale')
       ->with('ntcpayscale')
       ->with('consolidated_teaching_pay')
       ->with('fixed_nt_pay')
       ->with('latest_employee_type')
       ->orderBy('fname')->get();

       //$staff = DB::table('staff')->with('designations')->with('associations')->orderBy('id')->paginate(15);
       // $caste_categories = castecategory::where('status','active')->get();
        $religions =religion::where('status','active')->get();
        $associations = association::where('status','active')->get();
        $departments = DB::table('departments')->where('status','active')->get();
        $qualifications =DB::table('qualifications')->where('status','active')->get();

        $designations=designation::where('status','active')->get();
        

        //$payscales = teaching::
        return view('Dean_admin.staff.staffindex',compact(['staff','religions','associations','departments','qualifications','filter','designations']));
    }


    public function show_staff_details( staff $staff)
    {
        //

        $user=user::where('id',$staff->user_id)->get();
            $user=$user[0];

        $staff=staff::where('staff.id',$staff->id)
        ->with(
            ['departments' => function ($q){
                $q->latest();
            }]
            )
        ->with(
            ['designations'=> function ($q){
                $q->latest();
            }]
            )
            ->with(
                ['associations'=> function ($q){
                    $q->latest();
                }]
                )
        ->with(
            ['teaching_payscale'=> function ($q){
                $q->latest();
            }]
            )
        ->with('ntpayscale')
        ->with('ntcpayscale')
        ->with('latestassociation')

            ->with(
                ['qualifications'])

               ->with(['consolidated_teaching_pay'=>function($q){
                $q->latest();
               }])
                ->with(['fixed_nt_pay'=>function($q){
                    $q->latest();
                }])
                ->with('latest_employee_type')
                ->with('latestfixedntpay','latest_consolidated_teaching_pay','latestteaching_payscale','latestntpayscale','latestntcpayscale')
                ->first();

       $confirmation=$staff->confirmationAssociation()->first();
       $confirmationdate=null;
       if($confirmation!=null)
       {
            $confirmationdate=$confirmation->pivot->start_date;
       }
       //dd($staff->latest_employee_type[0]->employee_type);
        $religions =religion::where('status','active')->get();
       $associations = association::where('status','active')->get();
       $departments = DB::table('departments')->where('status','active')->get();
       $castecategories=DB::table('castecategories')->where('status','active')->get();
       $emp_type=$staff->latest_employee_type()->first();

       $designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',0)->get();

       $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',1)->get();

       $payscales="";
       if($emp_type->employee_type==='Teaching')
       {
            $payscales=DB::table('teaching_payscales')->where('status','active')->get();
       }
       else if($emp_type->employee_type==="Non-Teaching" && $staff->associations[0]->asso_name=='Confirmed'){
           // $payscales=DB::table('ntpayscales')->where('status','active')->get();
            $payscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->orderby('designations.id')->get();
       }
       else
       {
       // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
       $payscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->orderby('designations.id')->get();

       }

        $qualifications =DB::table('qualifications')->where('status','active')->get();
        return view('Dean_admin.staff.staffview', compact(['staff','user','payscales','castecategories','religions','associations','qualifications','departments','designations','add_designations','confirmationdate']));
    }




    public function hollidayrh_events()
    {

        $holidayrh=holidayrh::select('id','title','start','type')->get();
        //dd($holidayrh);
        return response()->json($holidayrh);

        

    }

    //used in Dean Admin leaves calender section
    public function fetchAllleaveevents(Request $request)
    {

        //$user = Auth::user();
        //$staff = staff::where('user_id','=',$user->id)->first();
        // Process the date as needed (e.g., save to database, perform calculations)
        // $leave_events = leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        // ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        // ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        // ->join('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        //->where('leave_staff_applications.staff_id',$staff->id)

        $leave_events= DB::table('daywise__leaves as daywise')
        ->select(
            DB::raw("CONCAT(leaves.shortname, '-', COUNT(leaves.shortname))  AS title"),
                     'leaves.shortname as leave_name',
         DB::raw('SUM(case when leave_staff_applications.appl_status="pending" then 1 else 0 end) as pending_count'),
     
            'daywise.start as start',
            DB::raw('DATE_ADD(daywise.start, INTERVAL 1 DAY) AS end'),
            
        )
        ->join('leave_staff_applications', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
        ->groupBy('daywise.start','leaves.shortname')
        ->get();
           //dd($leave_events);
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

    //this function display the leave applilcations on the modal for viewing
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
        
        
        // leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        // ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        // ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        // ->leftJoin('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        //  ->join('department_staff AS dept_staff', 'dept_staff.staff_id', '=', 'leave_staff_applications.staff_id')
        //  ->join('departments AS dept', 'dept.id', '=', 'dept_staff.department_id')//->where('leave_staff_applications.staff_id',$staff->id)
        // ->where('dept_staff.status','=','active')
        // ->whereDate('leave_staff_applications.start' , '<=', $date)
        // ->whereDate('leave_staff_applications.end','>=',$date)
        // ->where('leaves.shortname',$shortname)
        // ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
        //         DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
        //         DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
        //         DB::raw('(CASE WHEN leave_staff_applications.cl_type="Morning" THEN "-Morning" WHEN leave_staff_applications.cl_type="Afternoon" THEN "-Afternoon" ELSE "" END) as cltype'),
        //         DB::raw("CONCAT(leaves.shortname,' ',(CASE WHEN leave_staff_applications.cl_type='Morning' THEN '-Morning' WHEN leave_staff_applications.cl_type='Afternoon' THEN '-Afternoon' ELSE '' END))  AS title"),
        //         'leave_staff_applications.start AS start',
        //         'leave_staff_applications.end AS end', 'leave_staff_applications.leave_id AS leave_id',
        //         'leave_staff_applications.appl_status AS appl_status',
        //         'leave_staff_applications.id AS Application_id',
        //         'leave_staff_applications.reason AS reason',
        //         'leaves.shortname AS leave_name',
        //         //DB::raw("DISTINCT(leaves_staff_applications.id)"),
        //         'dept.dept_shortname as shortname')->distinct()
        //         ->dd();
      //  dd($leave_events);
        // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }
   



    //Function for staffdepartment update in Dean_admin Login
    public function update(Request $request, staff $staff)
    {
        $updateresult=true;
        //fetch all the departments the staff is currently working in
        $rdepartments=$request->departments;
        $staff_departments=$staff->activedepartments;
        if($staff->activedepartments()->first()==null){
            foreach($rdepartments as $rdepts)
            {
                 $insertnew=$staff->departments()->attach($rdepts,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
            }
        }
        else
        {
            // dd($staff_departments);
            //fetch all the departments the staff is assigned in the UI.

            //check if there are changes in currently working and the assigned in the UI
            foreach($staff_departments as $sdept)
            {
                $flag=0;
                foreach($rdepartments as $rdepts)
                {
                    if($sdept->id==$rdepts)
                    {
                        $flag=1;
                    }
                }
                //if flag reamians 0, it means that the staff is no more associated with that department
                //update exisiting entry for that department of the staff
                if($flag==0){
                  //  $updateresult= $staff->departments()->updateExistingPivot($sdept->id,['end_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'closed']);
                    $staff_latest_depts=$staff->activedepartments()->get();
                    foreach($staff_latest_depts as $staff_dept)
                    {
                        if($staff_dept->pivot->department_id==$sdept->id){
                            $staff_dept->pivot->end_date=$request->start_date;
                            $staff_dept->pivot->reason=$request->reason;
                            $staff_dept->pivot->gcr=$request->gcr;
                            $staff_dept->pivot->status='closed';
                            $updateresult=$staff_dept->pivot->update();
                        }
                    }
                }
            }

        }

        //check if any new department is assigned to the staff
        foreach($rdepartments as $rdepts)
        {
            $flag=0;
            foreach($staff->departments as $sdept)
            {
                if($sdept->id==$rdepts)
                {
                    $flag=1;
                }
            }
            //if flag reamians 0, implies that the new department is assigned to the staff
            if($flag==0){
                $insertnew=$staff->departments()->attach($rdepts,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
            }
        }
        if($updateresult || $insertnew)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('Dean_admin/staff/staffview'.$staff->id)->with('status',$status);
    }


    public function updatecurrent(request $request, staff $staff, $sdept)
    {
        //dd($request);
        if($request->status=="active"){
          //  $updateresult= $staff->departments()->updateExistingPivot($sdept,['end_date'=>null,'status'=>'active']);
            $staff_latest_depts=$staff->activedepartments()->get();
            foreach($staff_latest_depts as $staff_dept)
            {
                if($staff_dept->pivot->department_id==$sdept->id)
                {
                    $staff_dept->pivot->end_date=null;
                    $staff_dept->pivot->status='active';
                    $updateresult=$staff_dept->pivot->update();
                }
            }
        }
        else
        {
            // $updateresult= $staff->departments()->updateExistingPivot($sdept,['department_id'=>$request->departments_id,'start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
             $staff_latest_depts=$staff->activedepartments()->get();

                    foreach($staff_latest_depts as $staff_dept)
                    {

                        if($staff_dept->pivot->department_id==$sdept)
                        {
                            $staff_dept->pivot->department_id=$request->departments_id;
                            $staff_dept->pivot->start_date=$request->start_date;
                            $staff_dept->pivot->reason=$request->reason;
                            $staff_dept->pivot->gcr=$request->gcr;
                            $updateresult=$staff_dept->pivot->update();
                        }
                    }

        }

        if($updateresult)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('Dean_admin/staff/staffview'.$staff->id)->with('status',$status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff,$dept)
    {

        $delete=DB::table('department_staff')->where('id',$dept)->where('status','active')->delete();

        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/Dean_admin/staff/staffview/'.$staff->id)->with('status',$status);
    }

    


    public function approve_leave(Request $request){

        $application_id = $request->input('application_id');
        //dd($application_id);

        //for updating the leave enititlement
        $staff_details_of_leave_application = DB::table('leave_staff_applications')
                                        ->where('id','=',$application_id)
                                        ->first();

                
        $staff_id = $staff_details_of_leave_application->staff_id;
        $leave_id = $staff_details_of_leave_application->leave_id;
        $today = Carbon::now();
        $year = $today->year;
        $no_of_days = $staff_details_of_leave_application->no_of_days;
        $leave_staff_entitlement=leave_staff_entitlements::where('staff_id',$staff_id)->where('leave_id',$leave_id)->where('year', $year)->first();

        if($staff_details_of_leave_application->appl_status == 'rejected'){
            if($leave_staff_entitlement!=null)
            {
                $leave_staff_entitlement->consumed_curr_year= $leave_staff_entitlement->consumed_curr_year+$no_of_days;
                //   dd($leave_staff_entitlement->consumed_curr_year);
                $leave_staff_entitlement->update();
            }
        }



        $result = DB::table('leave_staff_applications')
            ->where('id', $application_id)
            ->update(['appl_status' => "approved"]);
            //$leave_staff_applications->appl_status = "recommended";

        if($result){
            $return_html = "<div class='bg-white border dark:bg-bgdark border-success alert text-success' role='alert'>
                                <span class='font-bold'>Result</span> Leave Approved
                            </div>";
        }else{
            $return_html = "<div class='bg-white border dark:bg-bgdark border-danger alert text-danger' role='alert'>

                                  <span class='font-bold'>Result</span> 
        </div>

                                <span class='font-bold'>Result</span> Unable to Approve
                            </div>";

        }
        return $return_html;

    }




    //function for reject leaves
    public function reject_leave(Request $request){

        $application_id = $request->input('application_id');
        //dd($application_id);

        //for updating the leave enititlement
        $staff_details_of_leave_application = DB::table('leave_staff_applications')
                                        ->where('id','=',$application_id)
                                        ->first();

                
        $staff_id = $staff_details_of_leave_application->staff_id;
        $leave_id = $staff_details_of_leave_application->leave_id;
        $today = Carbon::now();
        $year = $today->year;
        $no_of_days = $staff_details_of_leave_application->no_of_days;
        $leave_staff_entitlement=leave_staff_entitlements::where('staff_id',$staff_id)->where('leave_id',$leave_id)->where('year', $year)->first();

        if($leave_staff_entitlement!=null)
        {
            $leave_staff_entitlement->consumed_curr_year= $leave_staff_entitlement->consumed_curr_year-$no_of_days;
            //   dd($leave_staff_entitlement->consumed_curr_year);
            $leave_staff_entitlement->update();
        }
       // dd($leave_staff_entitlement);                                

        $result = DB::table('leave_staff_applications')
            ->where('id', $application_id)
            ->update(['appl_status' => "rejected"]);
            //$leave_staff_applications->appl_status = "recommended";

        //dd($result);
        if($result && $leave_staff_entitlement){
            $return_html = "<div class='bg-white border dark:bg-bgdark border-warning alert text-warning' role='alert'>
                                <span class='font-bold'>Result</span> Leave Rejected
                            </div>";
        }else{
            $return_html = "<div class='bg-white border dark:bg-bgdark border-danger alert text-danger' role='alert'>

                                  <span class='font-bold'>Result</span> {{ session('return_data')['result'] }}
        </div>

                                <span class='font-bold'>Result</span> Unable to reject
                            </div>";

        }
    }
    


    
}
