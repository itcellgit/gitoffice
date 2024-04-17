<?php

namespace App\Http\Controllers\Deanrnd;

use App\Http\Controllers\Controller;

use App\Enums\UserRoles;
use App\Models\users;
use App\Models\staff;
use App\Models\user;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_conducted;
use App\Models\funded_project;
use App\Models\qualification;
use App\Models\conferences_attendee;
use App\Models\qualification_staff;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use Auth;

class DeanRndController extends Controller
{
    //
    public function dashboard( )
    {
        //$password = Hash::make('password');
        //dd($password);
        $department_id=Session ::get('deptid');

        // $departmentName = departments::getDepartmentName($deptid);

       //professional Activity Attended For Non-Teaching
        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            //->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')

                                            ->count();


        //professional Activity Conducte For Non-Teaching
        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                           // ->where('staff.employee_type','=','Non-teaching')
                                            //->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')

                                            ->count();

        //professional Activity Attended For Teaching
        $teaching_activity_attended=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            //->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')

                                            ->count();

        //professional Activity Conducted For Teaching
        $teaching_activity_conducted=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            //->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')

                                            ->count();


        //Conference Activity Attended For Teaching
        $conferences_attendees=DB::table('conferences_attendees')
                                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            //->select('conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(conferences_attendees.egov_id)'),'conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

        //Conference Activity Conducted For Teaching
        $conferences_conducted=DB::table('conferences_conducteds')
                                            ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                                            ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            //->select('conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(conferences_conducteds.egov_id)'),'conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();


        //publication
        $publication=DB::table('publications')
                                            ->join('staff','staff.id','=','publications.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(publications.egov_id)'),'publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

        //funded project
        $fundedproject=DB::table('funded_projects')
                                            ->join('staff','staff.id','=','funded_projects.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(funded_projects.egov_id)'),'funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

        //patents
        $patents=DB::table('patents')

                                            ->join('staff','staff.id','=','patents.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            //->select('patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(patents.egov_id)'),'patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();


        $copyrights=DB::table('copyrights')
                                            ->join('staff','staff.id','=','copyrights.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(copyrights.egov_id)'),'copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

        $general_achievements=DB::table('general_achievements')
                                            ->join('staff','staff.id','=','general_achievements.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                           // ->where('staff.employee_type','=','Teaching')
                                            //->select('general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(general_achievements.egov_id)'),'general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                                            ->count();

        //count of all research activities
        $totalresearchCount = $conferences_attendees + $conferences_conducted + $publication + $fundedproject + $patents + $copyrights + $general_achievements;

        //count of grants received
         $totalFundsReceived = funded_project::whereNotNull('fund_received')->sum('fund_received');

         //count of GIT Sponsored events

        $gitsponsoredevents = professional_activity_attendee::where('sponsored_by', 'KLS GIT')->count();
                            + conferences_attendee::where('sponsored_by', 'KLS GIT')->count();

        //count of research scholars
        $researchscholarscount = DB::table('qualifications as q1')
        ->join('qualification_staff', 'q1.id', '=', 'qualification_staff.qualification_id')
        ->join('qualifications as q2', 'q2.id', '=', 'qualification_staff.staff_id')
        ->where('q1.status', '=', 'Pursuing')
        ->count();


         return view('Deanrnd.dashboard',compact(['professional_activity_attendee','professional_activity_conducteds','teaching_activity_attended','teaching_activity_conducted','conferences_attendees','conferences_conducted','publication','fundedproject','patents','copyrights','general_achievements','totalresearchCount','totalFundsReceived','gitsponsoredevents','researchscholarscount']));
    }


    public function professional_activity_attendee_nt(Request $request)
    {
        //$user = Auth::user();

        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            //->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->get();
         //dd($professional_activity_attendee);


        return view('/Deanrnd/Non-Teaching/index',compact(['professional_activity_attendee']));
    }


    public function professional_activity_conducted_nt(Request $request)
    {


        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            //->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->get();
        // dd($professional_activity_conducteds);

        return view('/Deanrnd/Non-Teaching/conducted',compact(['professional_activity_conducteds']));
    }

       public function professional_activity_attended_teaching(Request $request)
    {


        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->get();
         //dd($professional_activity_attendee);

        return view('/Deanrnd/Teaching/activityattended',compact(['professional_activity_attendee']));
    }

    public function professional_activity_conducted_teaching(Request $request)
    {


        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->get();
        // dd($professional_activity_conducteds);

        return view('/Deanrnd/Teaching/activityconducted',compact(['professional_activity_conducteds']));
    }


}
