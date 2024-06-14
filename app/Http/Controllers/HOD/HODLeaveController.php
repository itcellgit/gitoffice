<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
       // $staff = staff::where('user_id','=',$user->id)->first();

        // Process the date as needed (e.g., save to database, perform calculations)

        $leave_events =  DB::table('daywise__leaves as daywise')
        ->select(
            DB::raw("CONCAT(leaves.shortname, '-', COUNT(leaves.shortname))  AS title"),
                     'leaves.shortname as leave_name',
            'daywise.start as start',
            DB::raw('DATE_ADD(daywise.start, INTERVAL 1 DAY) AS end'),
           
           
            DB::raw('SUM(case when leave_staff_applications.appl_status="pending" then 1 else 0 end) as pending_count'),
    
            //DB::raw("COUNT(leave_staff_applications.appl_status) AS pending_count"), 
        )
        ->join('leave_staff_applications', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        ->join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
        ->whereIn('leave_staff_applications.staff_id',function($q)use($department_id){
            $q->select('staff_id')->from('department_staff')
            ->where('department_id','=',$department_id)
            ->where('status','active');
        })
        ->groupBy('daywise.start','leaves.shortname')
        ->get();


        // //to get the count of leaves which are in pending status.
        // $pending_leave_count = DB::table('daywise__leaves as daywise')
        // ->select(
        //     'leave_staff_applications.appl_status',
        //     DB::raw('COUNT(leave_staff_applications.appl_status) AS appl_status_count'),
        // )
        // ->join('leave_staff_applications', 'leave_staff_applications.id', '=', 'daywise.leave_staff_applications_id')
        // ->join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
        // ->whereIn('leave_staff_applications.staff_id',function($q)use($department_id){
        //     $q->select('staff_id')->from('department_staff')->where('department_id','=',$department_id);
        // })
        // ->groupBy('daywise.start','leaves.shortname','leave_staff_applications.appl_status')
        // ->get();


       // $leave_events_json = $leave_events->toArray();
        // dd($pending_leave_count);
        // //$pending_leave_events_json = response()->json($pending_leave_count);
       

        // $leave_events_json = json_encode(
        //     array_merge(
        //         json_decode($leave_events, true),
        //         json_decode($pending_leave_count, true)
        //     )
        // );
        //$final_leave_collection = $leave_events_json->merge($pending_leave_events_json);
        //dd($leave_events_json);

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
        //dd("here");
        $date = $request->input('date');
       // dd($date);
        $user = Auth::user();
        $department_id=Session::get('deptid');

        $leave_type_id = $request->input('leave_type');
        //dd($leave_type_id);
        // Process the date as needed (e.g., save to database, perform calculations)
      
    
    //fetch the staff leaves based on given date and leave.shortname
    $datewiseleave_events =  leave_staff_applications::join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')
    ->join('staff AS s1', 's1.id', '=', 'leave_staff_applications.staff_id')
    ->join('staff AS s2', 's2.id', '=', 'leave_staff_applications.alternate')
    ->leftJoin('staff AS s3', 's3.id', '=', 'leave_staff_applications.additional_alternate')
    
    ->whereIn('s1.id',function($q)use($department_id){
        $q->select('staff_id')
        ->from('department_staff')
        ->where('department_id',$department_id)
        ->where('status','active');
    })
    ->whereDate('leave_staff_applications.start', '<=', $date)
    ->whereDate('leave_staff_applications.end', '>=', $date)
    ->where('leaves.shortname',  $leave_type_id)
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
        //'grouped_depts.dept_shortname'
    )
    ->get();     
   //dd( $datewiseleave_events);

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
