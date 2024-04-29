<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\holidayrh;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\leave;
use App\Models\staff;
use App\Models\leave_staff_applications;
use Auth;
use Session;

class HODLeaveController extends Controller
{
    //
     public function index(){

        $leaves=leave::with('combine_leave')->with('leave_rules')->orderby('vacation_type')->orderBy('longname')->get();

        return view('HOD.leaves_management',compact('leaves'));

    }

    public function hollidayrh_events(){

        $holidayrh=holidayrh::select('id','title','start','type')->get();
        //dd($holidayrh);
        return response()->json($holidayrh);

    }

    public function fetchDeptleaveevents(Request $request){
        $date = $request->input('date');

        $user = Auth::user();
        $department_id=Session ::get('deptid');
        $staff = staff::where('user_id','=',$user->id)->first();

        // Process the date as needed (e.g., save to database, perform calculations)
        $leave_events = leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        ->leftJoin('daywise__leaves AS daywise', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('department_staff AS dept_staff','dept_staff.staff_id','=','leave_staff_applications.staff_id')
        ->groupBy('daywise.start', 'leave_staff_applications.leave_id', 'leaves.shortname')
        ->where('dept_staff.department_id','=',$department_id)

        ->select(
                'leave_staff_applications.leave_id AS leave_id',
               DB::raw("COUNT(leave_staff_applications.leave_id) as leavecount"),
               DB::raw("CONCAT(leaves.shortname, '-',COUNT(leave_staff_applications.leave_id))  AS title"),
               'daywise.start AS start',
               //DB::raw("date_add(daywise.start, INTERVAL 1 day)  AS end"),

               'leaves.shortname AS leave_name',
                )->get();
            //dd($leave_events);
        // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }

    //for fetching the leave details date-wise in the HoD Login.

    function fetchdatewisedeptleaveevents(Request $request){
        $date = $request->input('date');
        //dd($date);
        $user = Auth::user();
        $department_id=Session::get('deptid');

        $leave_type_id = $request->input('leave_type');

        // Process the date as needed (e.g., save to database, perform calculations)
        $datewiseleave_events = leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        ->leftJoin('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        //->leftjoin('daywise__leaves AS daywise', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('department_staff AS dept_staff','dept_staff.staff_id','=','leave_staff_applications.staff_id')
        ->where('leave_staff_applications.leave_id','=',$leave_type_id)
        ->where('dept_staff.department_id','=',$department_id)
        ->whereDate('leave_staff_applications.start' , '<=', $date)
        ->whereDate('leave_staff_applications.end','>=',$date)
        ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
                DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
                DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
                'leaves.shortname AS title',
                'leave_staff_applications.start AS start',
                'leave_staff_applications.end AS end', 'leave_staff_applications.leave_id AS leave_id',
                'leave_staff_applications.appl_status AS appl_status',
                'leave_staff_applications.id AS Application_id',
                'leave_staff_applications.reason AS reason')->get();
        //dd($leave_events);
        // Return a response (optional)
          return response()->json($datewiseleave_events);
    }

    function recommend_leave(Request $request){
        $application_id = $request->input('application_id');
        //dd($application_id);

        $result = DB::table('leave_staff_applications')
            ->where('id', $application_id)
            ->update(['appl_status' => "recommended"]);
        //$leave_staff_applications->appl_status = "recommended";

        if($result){
            $return_html = "<div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                <span class='font-bold'>Result</span> Successful
                            </div>";
        }else{
            $return_html = "<div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                  <span class='font-bold'>Result</span> {{ session('return_data')['result'] }}
        </div>";
        }
        return $return_html;
    }
}
