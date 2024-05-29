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
use App\Models\leave_staff_entitlements;
use App\Models\Daywise_leave;
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

        $leave_events = DB::table('daywise__leaves as daywise')
                        ->join('leave_staff_applications','daywise.leave_staff_applications_id','=','leave_staff_applications.id')
                    ->join('leaves as l','l.id','=','daywise.leave_id')
                    ->select(
                        DB::raw('CONCAT(l.shortname, "-", COUNT(daywise.leave_id)) AS title'),
                        'leave_staff_applications.id as leave_id',
                        'daywise.start AS start',
                        DB::raw('DATE_ADD(daywise.start, INTERVAL 1 DAY) AS end')
                    )
                    ->groupBy("daywise.leave_id",'daywise.start','l.shortname','leave_staff_applications.id')
                    ->get();


        // leave_staff_applications::join('leaves', 'leaves.id','=','leave_staff_applications.leave_id')
        // ->join('staff AS s1','s1.id','=','leave_staff_applications.staff_id')
        // ->join('staff AS s2','s2.id','=','leave_staff_applications.alternate')
        // ->leftJoin('staff AS s3','s3.id','=','leave_staff_applications.additional_alternate')
        // ->leftJoin('daywise__leaves AS daywise', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        // ->join('department_staff AS ds','ds.staff_id','=','leave_staff_applications.staff_id')
        // ->where('ds.department_id','=', $department_id)
        // //->groupBy('leave_staff_applications.leave_id', 'leave_staff_applications.start' )
        // ->select(DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
        //         DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
        //         DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
        //         DB::raw("case when leaves.shortname='CL' then concat(leaves.shortname,'-',leave_staff_applications.cl_type) else leaves.shortname end AS title"),'daywise.start AS start',
        //          DB::raw("date_add(daywise.start, INTERVAL 1 day)  AS end"),
        //          'leave_staff_applications.leave_id AS leave_id',
        //          'leave_staff_applications.appl_status AS appl_status',
        //          'leaves.shortname AS leave_name',
        //          'leave_staff_applications.id')


        // ->get();
          return response()->json($leave_events);
        //return response()->json(['message' => 'Date clicked: ' . $date]);
    }

    //for fetching the leave details date-wise in the HoD Login.

    function fetchdatewisedeptleaveevents(Request $request){
        dd("here");
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
        ->leftjoin('daywise__leaves AS daywise', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('department_staff AS dept_staff','dept_staff.staff_id','=','leave_staff_applications.staff_id')

        ->where('leave_staff_applications.leave_id','=',$leave_type_id)
        ->where('dept_staff.department_id','=',$department_id)
        ->where('daywise.start' , '=', $date)
        ->select(DB::raw('DISTINCT(leave_staff_applications.id)'),
                DB::raw("CONCAT(s1.fname,' ',s1.mname,' ',s1.lname) AS staff_name"),
                DB::raw("CONCAT(s2.fname,' ',s2.mname,' ',s2.lname) AS alternate_staff"),
                DB::raw("CONCAT(s3.fname,' ',s3.mname,' ',s3.lname) AS additional_alternate_staff"),
                'leaves.shortname AS title',
                'leave_staff_applications.start AS start',
                'leave_staff_applications.end AS end', 'leave_staff_applications.leave_id AS leave_id',
                'leave_staff_applications.appl_status AS appl_status',
                'leave_staff_applications.id AS Application_id',
                'leave_staff_applications.reason AS reason')->get();

        // Return a response (optional)
        return response()->json($datewiseleave_events);
    }


    //for recommendation of leave from HoD account.
    function recommend_leave(Request $request){
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
            ->update(['appl_status' => "recommended"]);
            //$leave_staff_applications->appl_status = "recommended";

        if($result){
            $return_html = "<div class='bg-white border dark:bg-bgdark border-success alert text-success' role='alert'>
                                <span class='font-bold'>Result</span> Leave Recommended
                            </div>";
        }else{
            $return_html = "<div class='bg-white border dark:bg-bgdark border-danger alert text-danger' role='alert'>

                                  <span class='font-bold'>Result</span> {{ session('return_data')['result'] }}
        </div>

                                <span class='font-bold'>Result</span> Unable to recommend
                            </div>";

        }
        return $return_html;
    }

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
