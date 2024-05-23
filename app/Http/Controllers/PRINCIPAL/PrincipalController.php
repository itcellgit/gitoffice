<?php

namespace App\Http\Controllers\PRINCIPAL;

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

class PrincipalController extends Controller
{
    //
    public function dashboard()
    {
       return view('PRINCIPAL.dashboard');
    }

    //ALL Leave Management Function
    public function holiday_rh()
    {
        //
        $filter = '';
        $holidayrh=holidayrh::orderBy('start')->get();
        return view('PRINCIPAL.leaves_management.principal_holiday_rh',compact('holidayrh','filter'));
    }


    public function leaves_lest()
    {
        $leaves=leave::with('combine_leave')->with('leave_rules')->orderby('vacation_type')->orderBy('longname')->get();

        return view('PRINCIPAL.leaves_management.principal_leaves',compact('leaves'));
    }


    public function leaves_entitlement()
    {

        $year=Carbon::now()->year;

        $leave_types=leave::select('shortname')->distinct('shortname')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();

        $leave_types_taken = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";
        // $staff=DB::select($query);
        // $leave_types_balance = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";

        $staff=staff::with('leave_staff_entitlements')->with('teaching_employee')->get();

        return view('PRINCIPAL.leaves_management.principal_entitlement',compact(['staff','leave_types','leave_types_taken','year'])); //,compact(['Leave_rules','filter']

    }


    public function calender_view()
    {

        // $user = Auth::user();
        // $staff_id_from_user = staff::where('user_id','=',$user->id)->first();
        $year=Carbon::now()->year;
        $holidayrh=holidayrh::orderBy('start')->get();

        $staff=staff::with('latest_employee_type')->with('latestassociation')->with('latest_additional_designation')->get();

        //dd($staff->latest_employee_type);

        
        return view ('PRINCIPAL.leaves_management.principal_leaves_calender');
    }


    
    //code for calenderview in principal

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
            DB::raw("CASE 
                        WHEN leave_staff_applications.cl_type = 'Morning' or leave_staff_applications.cl_type = 'Afternoon'  THEN 
                            CONCAT(leaves.shortname, '-', leave_staff_applications.cl_type, '-', COUNT(daywise.leave_id)) 
                        ELSE 
                            CONCAT(leaves.shortname, '-', COUNT(daywise.leave_id)) 
                     END AS title"),
                     'leaves.shortname as leave_name',
            'daywise.start as start',
            DB::raw('DATE_ADD(daywise.start, INTERVAL 1 DAY) AS end'),
            
        )
        ->join('leave_staff_applications', 'leave_staff_applications.id', '=', 'daywise.leave_id')
        ->join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
        ->groupBy('daywise.start', 'leaves.shortname', 'leave_staff_applications.cl_type')
        ->get();

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

    public function fetchleaveevents(Request $request){
        $date = $request->input('date');
        //dd($date);
        // $user = Auth::user();
        // $staff = staff::where('user_id','=',$user->id)->first();
        // dd($staff);
        // Process the date as needed (e.g., save to database, perform calculations)
        $leave_events = leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        ->leftJoin('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        ->join('department_staff AS dept_staff', 'dept_staff.staff_id', '=', 'leave_staff_applications.staff_id')
        ->join('departments AS dept', 'dept.id', '=', 'dept_staff.department_id')//->where('leave_staff_applications.staff_id',$staff->id)

        ->whereDate('leave_staff_applications.start' , '<=', $date)
        ->whereDate('leave_staff_applications.end','>=',$date)
        ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
                DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
                DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
                DB::raw('(CASE WHEN leave_staff_applications.cl_type="Morning" THEN "-Morning" WHEN leave_staff_applications.cl_type="Afternoon" THEN "-Afternoon" ELSE "" END) as cl_type'),
                DB::raw("CONCAT(leaves.shortname,' ',cl_type)  AS title"),
                'leave_staff_applications.start AS start',
                'leave_staff_applications.end AS end', 'leave_staff_applications.leave_id AS leave_id',
                'leave_staff_applications.appl_status AS appl_status',
                'leave_staff_applications.id AS Application_id',
                'leave_staff_applications.reason AS reason',
                'leaves.shortname AS leave_name',
                'dept.dept_shortname as shortname')->get();
        //dd($leave_events);
        // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }
    
   







    
    //ALL Staff Related Function
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
        return view('PRINCIPAL.staff.index',compact(['staff','religions','associations','departments','qualifications','filter','designations']));
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
        return view('PRINCIPAL.staff.staffview', compact(['staff','user','payscales','castecategories','religions','associations','qualifications','departments','designations','add_designations','confirmationdate']));
    }


}
