<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use App\Enums\UserRoles;

use App\Models\staff;
use App\Models\user;
use App\Models\users;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_conducted;
use App\Models\designation;
use App\Models\department;
use App\Models\religion;
use App\Models\event;
use App\Models\notice;

use App\Models\castecategory;
use App\Models\association;
use App\Models\qualifications;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use Auth;

class HodController extends Controller
{
    //
    public function dashboard(Request $request ,staff $staff, user $user )
    {

       // return redirect()->intended('/HOD/dashboard');



        //to display number of employees in particular departmnet
        $department_id=Session ::get('deptid');
        $departments = DB::table('departments')->where('status','active')->first();
        $totalemployee=DB::table('staff')
        ->join('department_staff','department_staff.staff_id','=','staff.id')
        ->join('departments','departments.id','=','department_staff.department_id')
        ->where('department_id','=',$department_id)
        //->select('staff.*','fname','staff.id','mname','lname','department_id')
        ->select(DB::raw('DISTINCT(staff.egov_id)'),'staff.*','fname','staff.id','mname','lname','department_id')

        ->count();
          // dd($totalemployee);

        //to Count number of Teaching employees in particular departmnet
         $teachingstaff=DB::table('staff')
                ->join('department_staff','department_staff.staff_id','=','staff.id')
                ->join('departments','departments.id','=','department_staff.department_id')
                ->join('employee_types','employee_types.staff_id','=','staff.id')
                ->where('employee_types.employee_type','=','Teaching')
               // ->where('staff.employee_type','=','Teaching')
                ->where('department_id','=',$department_id)
                // ->select('staff.*','fname','staff.id','mname','lname','employee_type','department_id')
                ->select(DB::raw('DISTINCT(staff.egov_id)'),'staff.*','fname','staff.id','mname','lname','department_id')

                ->count();

        //to Count number of Non-Teaching employees in particular departmnet
        $nonteachingstaff=DB::table('staff')
                ->join('department_staff','department_staff.staff_id','=','staff.id')
                ->join('departments','departments.id','=','department_staff.department_id')
                ->join('employee_types','employee_types.staff_id','=','staff.id')
                ->where('employee_types.employee_type','=','Non-Teaching')
               // ->where('staff.employee_type','=','Non-Teaching')
                ->where('department_id','=',$department_id)
                // ->select('staff.*','fname','staff.id','mname','lname','employee_type','department_id')
                ->select(DB::raw('DISTINCT(staff.egov_id)'),'staff.*','fname','staff.id','mname','lname','department_id')

                ->count();

        //to count No of Activities in Pro Activity Attended Teaching
        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')

                                            ->count();




        //to count No of Activities in Pro Activity Conducted Teaching
         $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')

                                            ->count();


        //to count No of Activities in Pro Activity Attended Non-Teaching
        $ntactivity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')

                                            ->count();

        //to count No of Activities in Pro Activity Conducted Non-Teaching
        $nt_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                           // ->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->count();


        //to count No of Activities in Conference Activity Attended
        $conferences_attendees=DB::table('conferences_attendees')
                                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(conferences_attendees.egov_id)'),'conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();


        //to count No of Activities in Conference Activity Conducted
        $conferences_conducted=DB::table('conferences_conducteds')
                                            ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                                            ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(conferences_conducteds.egov_id)'),'conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

         $publication=DB::table('publications')
                                            ->join('staff','staff.id','=','publications.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(publications.egov_id)'),'publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

        $fundedproject=DB::table('funded_projects')

                        ->join('staff','staff.id','=','funded_projects.staff_id')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->join('departments','departments.id','=','department_staff.department_id')
                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                        ->where('employee_types.employee_type','=','Teaching')
                        //->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
                        // ->select('funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                        ->select(DB::raw('DISTINCT(funded_projects.egov_id)'),'funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                        ->count();


      $patents=DB::table('patents')
                ->join('staff','staff.id','=','patents.staff_id')
                ->join('department_staff','department_staff.staff_id','=','staff.id')
                ->join('departments','departments.id','=','department_staff.department_id')
                ->join('employee_types','employee_types.staff_id','=','staff.id')
                ->where('employee_types.employee_type','=','Teaching')
                //->where('staff.employee_type','=','Teaching')
                ->where('department_id','=',$department_id)
                // ->select('patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                ->select(DB::raw('DISTINCT(patents.egov_id)'),'patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                ->count();


     $copyrights=DB::table('copyrights')
            ->join('staff','staff.id','=','copyrights.staff_id')
            ->join('department_staff','department_staff.staff_id','=','staff.id')
            ->join('departments','departments.id','=','department_staff.department_id')
            ->join('employee_types','employee_types.staff_id','=','staff.id')
            ->where('employee_types.employee_type','=','Teaching')
            //->where('staff.employee_type','=','Teaching')
            ->where('department_id','=',$department_id)
            // ->select('copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
            ->select(DB::raw('DISTINCT(copyrights.egov_id)'),'copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

            ->count();

    $general_achievements=DB::table('general_achievements')

        ->join('staff','staff.id','=','general_achievements.staff_id')
        ->join('department_staff','department_staff.staff_id','=','staff.id')
        ->join('departments','departments.id','=','department_staff.department_id')
        ->join('employee_types','employee_types.staff_id','=','staff.id')
        ->where('employee_types.employee_type','=','Teaching')
        //->where('staff.employee_type','=','Teaching')
        ->where('department_id','=',$department_id)
        ->select('general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
        ->count();


        //event dashboard
        $user = Auth::user();
        //$department_id = Session::get('deptid');

        // Fetch events only for the specific department
        $deptevent = event::with('department')
            ->whereHas('department', function ($query) use ($department_id) {
                $query->where('departments.id', $department_id);
            })
            ->get();

       // $departments = DB::table('departments')->where('status', 'active')->get();


        //notice board
        $deptnotice = notice::with('department')

        ->whereHas('department', function ($query) use ($department_id) {
            $query->where('departments.id', $department_id);
        })
        ->get();

    $departments = DB::table('departments')->where('status', 'active')->get();


    return view('HOD.dashboard',compact('totalemployee','department_id','teachingstaff','nonteachingstaff','professional_activity_attendee','professional_activity_conducteds','ntactivity_attendee','nt_activity_conducteds','conferences_attendees','conferences_conducted','publication','fundedproject','patents','copyrights','general_achievements','deptevent','departments','deptnotice'));
    }


    public function department_overview(Request $request)
    {
        $user = Auth::user();
        $department_id=Session ::get('deptid');
        $staff=staff::with('departments')->where('user_id','=',$user->id)->get();

        $hods_list = DB::table('staff')
                ->join('designation_staff','staff.id','=','designation_staff.staff_id')
                ->where('designation_staff.designation_id',1)
                ->where('designation_staff.dept_id',$department_id)
                ->orderBy('designation_staff.start_date')->get();
        //dd($hods_list);
        return view('HOD.departmentoverview',compact('staff','hods_list'));

    }

    public function hodview(Request $request)
    {
        return view('HOD.staff.view');
    }
   //staff list code
    public function staff_details(Request $request)
    {

        $filter="";
        $department_id=Session ::get('deptid');
        $staff_list=staff::with('designations')
         ->with('associations')
         ->with('departments')
        ->whereHas('departments',function($query) use($department_id) {
            $query->where('departments.id', $department_id);
           })
        ->with('qualifications')
        ->with('teaching_payscale')
        ->with('ntpayscale')
        ->with('ntcpayscale')
        ->with('consolidated_teaching_pay')
        ->with('fixed_nt_pay')
        //->with('leave_rules' )



        ->orderBy('fname')->get();


        $religions =religion::where('status','active')->get();
        $associations = association::where('status','active')->get();
        $departments = DB::table('departments')->where('status','active')->get();
        $qualifications =DB::table('qualifications')->where('status','active')->get();
        //$leave_rules =DB::table('leave_rules')->where('status','active')->get();

        return view('HOD.hodstaff',compact(['staff_list','religions','associations','departments','qualifications','filter']));

    }

    public function staff_view(Request $request,staff $staff)
    {
        $staff_view=staff::where('staff.id',$staff->id)
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
         ->with(
             ['ntpayscale'=> function ($q){
                 $q->latest();
             }]
             )
         ->with(
             ['ntcpayscale'=> function ($q){
                 $q->latest();
             }]
             )
        ->with(
             ['latestassociation'=>function ($q){
                 $q->latest();
             }]
             )
        ->with(
             ['qualifications'=> function ($q){
                 $q->latest();
             }]
             )
            ->with('consolidated_teaching_pay')
             ->with('fixed_nt_pay')
             ->with('latestfixedntpay','latest_consolidated_teaching_pay','latestteaching_payscale','latestntpayscale','latestntcpayscale')
             ->first();
            // dd($staff_view);

            // $confirmation=$staff->confirmationAssociation()->first();
            $religions =religion::where('status','active')->get();
            $associations = association::where('status','active')->get();
            $departments = DB::table('departments')->where('status','active')->get();
            $castecategories=DB::table('castecategories')->where('status','active')->get();
            $designations = DB::table('designations')->where('status','active')->where('emp_type',$staff->employee_type)->where('isadditional','=',0)->get();
            $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$staff->employee_type)->where('isadditional','=',1)->get();
        //dd($staff->employee_type);
        $payscales="";
        if($staff->employee_type==='Teaching')
        {
             $payscales=DB::table('teaching_payscales')->where('status','active')->get();
        }
        else if($staff->employee_type==="Non-Teaching" && $staff->associations[0]->asso_name=='Confirmed'){
            // $payscales=DB::table('ntpayscales')->where('status','active')->get();
             $payscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->orderby('designations.id')->get();
        }
        else
        {
        // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
        $payscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->orderby('designations.id')->get();
        }
        // dd($payscales);
         $qualifications =DB::table('qualifications')->where('status','active')->get();



         return view('HOD.hodview', compact(['staff_view','religions','payscales','castecategories','associations','qualifications','departments','designations','add_designations']));

    }


    public function hod_professional_activity_attended_teaching(Request $request)
    {

        $department_id=Session ::get('deptid');
       // dd($department_id);
       $professional_activity_attendee = DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff', 'professional_activity_attendee_id', '=', 'professional_activity_attendees.id')
                                            ->join('staff', 'staff.id', '=', 'professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
                                            ->join('departments', 'departments.id', '=', 'department_staff.department_id')
                                            ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id')
                                            ->where('employee_types.employee_type', '=', 'Teaching')
                                            ->where('department_id', '=', $department_id)
                                            ->select('professional_activity_attendees.*', 'fname', 'staff.id', 'mname', 'lname', 'employee_type', 'department_id', 'dept_shortname', 'organizer', 'sponsored', 'sponsored_by')
                                            ->distinct()
                                            ->get();



        //category count teaching
        $teaching_category_counts = DB::table('professional_activity_attendees')
                                        ->join('professional_activity_attendee_staff', 'professional_activity_attendee_id', '=', 'professional_activity_attendees.id')
                                        ->join('staff', 'staff.id', '=', 'professional_activity_attendee_staff.staff_id')
                                        ->join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
                                        ->join('departments', 'departments.id', '=', 'department_staff.department_id')
                                        ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id')
                                        ->where('department_staff.status','active')
                                        ->where('employee_types.employee_type', '=', 'Teaching')
                                        ->where('department_id', '=', $department_id)
                                        ->select(
                                            DB::raw('COUNT( CASE WHEN category = "Seminar" THEN 1 END) as seminar_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Webinar" THEN 1 END) as webinar_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Certification Program" THEN 1 END) as certification_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Workshop" THEN 1 END) as workshop_count'),
                                            DB::raw('COUNT( CASE WHEN category = "FDP" THEN 1 END) as FDP_count'),
                                            DB::raw('COUNT( CASE WHEN category = "STTP" THEN 1 END) as STTP_count'),
                                            DB::raw('COUNT( CASE WHEN category = "MDP/EDP" THEN 1 END) as MDP_FDP_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Hackathon" THEN 1 END) as hackathon_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Space-Talk" THEN 1 END) as space_talk_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Site Visit" THEN 1 END) as site_visit_count')
                                        )
                                        ->first();


        // dd($countproactivity);



         //dd($professional_activity_attendee);

        return view('/HOD/Teaching/hodactivityattended',compact(['professional_activity_attendee','teaching_category_counts']));
    }




    public function hod_professional_activity_conducted_teaching(Request $request)
    {
        $department_id=Session ::get('deptid');
        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')

                                            ->get();
        // dd($professional_activity_conducteds);


        $conducted_category_counts = DB::table('professional_activity_conducteds')
                                        ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                        ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                                        ->join('departments','departments.id','=','department_staff.department_id')
                                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                                        ->where('department_staff.status','active')
                                        ->where('employee_types.employee_type','=','Teaching')
                                        ->where('department_id','=',$department_id)
                                        ->select(
                                            DB::raw('COUNT( CASE WHEN category = "Seminar" THEN 1 END) as seminar_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Webinar" THEN 1 END) as webinar_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Certification Program" THEN 1 END) as certification_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Workshop" THEN 1 END) as workshop_count'),
                                            DB::raw('COUNT( CASE WHEN category = "FDP" THEN 1 END) as FDP_count'),
                                            DB::raw('COUNT( CASE WHEN category = "STTP" THEN 1 END) as STTP_count'),
                                            DB::raw('COUNT( CASE WHEN category = "MDP/EDP" THEN 1 END) as MDP_FDP_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Hackathon" THEN 1 END) as hackathon_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Space-Talk" THEN 1 END) as space_talk_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Site Visit" THEN 1 END) as site_visit_count')
                                        )
                                        ->first();



        return view('/HOD/Teaching/hodactivityconducted',compact(['professional_activity_conducteds','conducted_category_counts']));
    }


    public function hod_professional_activity_attendee_nt(Request $request)
    {

        $department_id=Session ::get('deptid');
        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            ->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->get();
         //dd($professional_activity_attendee);

         $category_counts = DB::table('professional_activity_attendees')
                                ->join('professional_activity_attendee_staff', 'professional_activity_attendee_id', '=', 'professional_activity_attendees.id')
                                ->join('staff', 'staff.id', '=', 'professional_activity_attendee_staff.staff_id')
                                ->join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
                                ->join('departments', 'departments.id', '=', 'department_staff.department_id')
                                ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id')
                                ->where('department_staff.status','active')
                                ->where('employee_types.employee_type', '=', 'Non-Teaching')
                                ->where('department_id', '=', $department_id)
                                ->select(
                                    DB::raw('COUNT( CASE WHEN category = "Seminar" THEN 1 END) as seminar_count'),
                                    DB::raw('COUNT( CASE WHEN category = "Webinar" THEN 1 END) as webinar_count'),
                                    DB::raw('COUNT( CASE WHEN category = "Certification Program" THEN 1 END) as certification_count'),
                                    DB::raw('COUNT( CASE WHEN category = "Hackathon" THEN 1 END) as hackathon_count')
                                )
                                ->first();


        return view('/HOD/Non-Teaching/hodattended',compact(['professional_activity_attendee','category_counts']));
    }
    public function hod_professional_activity_conducted_nt(Request $request)
    {

        $department_id=Session ::get('deptid');
        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            // ->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')

                                            ->get();
        // dd($professional_activity_conducteds);


        $conducted_category_counts = DB::table('professional_activity_conducteds')
                                        ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                        ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                                        ->join('departments','departments.id','=','department_staff.department_id')
                                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                                        ->where('department_staff.status','active')
                                        ->where('employee_types.employee_type','=','Non-Teaching')
                                        ->where('department_id','=',$department_id)
                                        ->select(
                                            DB::raw('COUNT( CASE WHEN category = "Seminar" THEN 1 END) as seminar_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Webinar" THEN 1 END) as webinar_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Certification Program" THEN 1 END) as certification_count'),
                                            DB::raw('COUNT( CASE WHEN category = "Hackathon" THEN 1 END) as hackathon_count')
                                        )
                                        ->first();


        return view('/HOD/Non-Teaching/hodconducted',compact(['professional_activity_conducteds','conducted_category_counts']));
    }





}
