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
        -join('daywise__leaves AS daywise', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        //->leftJoin('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        ->join('department_staff AS dept_staff','dept_staff.staff_id','leave_staff_applications.staff_id')
        ->groupBy('daywise.start')
        ->where('dept_staff.department_id','=',$department_id)

        ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
                DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
                DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
                'leaves.shortname AS title','daywise.start AS start',
                DB::raw("date_add(daywise.start, INTERVAL 1 day)  AS end"), 
                'leave_staff_applications.leave_id AS leave_id',
                'leave_staff_applications.appl_status AS appl_status',
                'leaves.shortname AS leave_name',
                'leave_staff_applications.id')->dd();
        // Return a response (optional)
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }
}
