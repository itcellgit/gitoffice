<?php

namespace App\Http\Controllers\egov;

use App\Http\Controllers\Controller;

use App\Enums\UserRoles;
use App\Models\users;
use App\Models\staff;
use App\Models\user;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_conducted;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use Auth;


class EgovAdminController extends Controller
{

    public function dashboard()
    {
        //professional activity attended Teaching
        $department_id=Session ::get('deptid');
         $teaching_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('department_staff.status','active')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            //->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->count();




        //professional activity conducted teaching
        $teaching_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            ->where('department_staff.status','active')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)
                                            //->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->count();


        //professional activity attended non teaching
        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            ->where('department_staff.status','active')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            //->select('professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->count();


        //professional activity conducted non teaching
        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                    ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                    ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                                    ->join('departments','departments.id','=','department_staff.department_id')
                                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                                    ->where('employee_types.employee_type','=','Non-Teaching')
                                    ->where('department_staff.status','active')
                                    //->where('staff.employee_type','=','Non-teaching')
                                    ->where('department_id','=',$department_id)
                                    //->select('professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                    ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                    ->count();


        //conference attendee
        $conferences_attendees=DB::table('conferences_attendees')
                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                            ->where('department_staff.status','active')
                            //->where('staff.employee_type','=','Teaching')
                            ->where('department_id','=',$department_id)
                            //->select('conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->select(DB::raw('DISTINCT(conferences_attendees.egov_id)'),'conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->count();







        //conference conducted
        $conferences_conducted=DB::table('conferences_conducteds')
                        ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                        ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->join('departments','departments.id','=','department_staff.department_id')
                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                        ->where('employee_types.employee_type','=','Teaching')
                        ->where('department_staff.status','active')
                       // ->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
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
                        ->where('department_staff.status','active')
                       // ->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
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
                        ->where('department_staff.status','active')
                        //->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
                        //->select('funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                        ->select(DB::raw('DISTINCT(funded_projects.egov_id)'),'funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                        ->count();


        //Patents
        $patents=DB::table('patents')
                        ->join('staff','staff.id','=','patents.staff_id')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->join('departments','departments.id','=','department_staff.department_id')
                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                        ->where('employee_types.employee_type','=','Teaching')
                        ->where('department_staff.status','active')
                       // ->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
                        //->select('patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                        ->select(DB::raw('DISTINCT(patents.egov_id)'),'patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                        ->count();


        //Copyrights
        $copyrights=DB::table('copyrights')
                        ->join('staff','staff.id','=','copyrights.staff_id')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->join('departments','departments.id','=','department_staff.department_id')
                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                        ->where('employee_types.employee_type','=','Teaching')
                        ->where('department_staff.status','active')
                        //->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
                        //->select('copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                        ->select(DB::raw('DISTINCT(copyrights.egov_id)'),'copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                        ->count();

        //General Achivement
        $general_achievements=DB::table('general_achievements')
                        ->join('staff','staff.id','=','general_achievements.staff_id')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->join('departments','departments.id','=','department_staff.department_id')
                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                        ->where('employee_types.employee_type','=','Teaching')
                        ->where('department_staff.status','active')
                        //->where('staff.employee_type','=','Teaching')
                        ->where('department_id','=',$department_id)
                        //->select('general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                        ->select(DB::raw('DISTINCT(general_achievements.egov_id)'),'general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)

                        ->count();


        return view('egov.dashboard',compact(['teaching_activity_attendee','teaching_activity_conducteds','professional_activity_attendee','professional_activity_conducteds','conferences_attendees','conferences_conducted','publication','fundedproject','patents','copyrights','general_achievements']));
    }





    public function egov_professional_activity_attended_teaching(Request $request)
    {

        $department_id=Session ::get('deptid');
        // dd($department_id);
        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            ->where('department_staff.status','active')
                                            ->where('department_id','=',$department_id)
                                            //->select('professional_activity_attendees.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->get();
        // dd($professional_activity_attendee);

        //category count teaching
        $teaching_category_counts = DB::table('professional_activity_attendees')
                                ->join('professional_activity_attendee_staff', 'professional_activity_attendee_id', '=', 'professional_activity_attendees.id')
                                ->join('staff', 'staff.id', '=', 'professional_activity_attendee_staff.staff_id')
                                ->join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
                                ->join('departments', 'departments.id', '=', 'department_staff.department_id')
                                ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id')
                                ->where('employee_types.employee_type', '=', 'Teaching')
                                ->where('department_staff.status','active')
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
                                    DB::raw('COUNT( CASE WHEN category = "Site Visit" THEN 1 END) as site_visit_count'),
                                    )
                                ->first();



        return view('/egov/Teaching/activityattended',compact(['professional_activity_attendee','teaching_category_counts']));
    }




    public function egov_professional_activity_conducted_teaching(Request $request)
    {

        $department_id=Session ::get('deptid');
        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            ->where('department_staff.status','active')
                                            //->where('staff.employee_type','=','Teaching')
                                            ->where('department_id','=',$department_id)

                                            //->select('professional_activity_conducteds.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')

                                            ->get();
        // dd($professional_activity_conducteds);

        $conducted_category_counts = DB::table('professional_activity_conducteds')
                    ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                    ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                    ->join('departments','departments.id','=','department_staff.department_id')
                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                    ->where('employee_types.employee_type','=','Teaching')
                    ->where('department_staff.status','active')
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
                        DB::raw('COUNT( CASE WHEN category = "Site Visit" THEN 1 END) as site_visit_count'),
                    )
                    ->first();

        return view('/egov/Teaching/activityconducted',compact(['professional_activity_conducteds','conducted_category_counts']));
    }

    public function egov_professional_activity_attendee_nt(Request $request)
    {

        $department_id=Session ::get('deptid');
        $professional_activity_attendee=DB::table('professional_activity_attendees')
                                            ->join('professional_activity_attendee_staff','professional_activity_attendee_id','=','professional_activity_attendees.id')
                                            ->join('staff','staff.id','=','professional_activity_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            ->where('department_staff.status','active')
                                            //->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            //->select('professional_activity_attendees.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')
                                            ->select(DB::raw('DISTINCT(professional_activity_attendees.egov_id)'),'professional_activity_attendees.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','organizer','sponsored','sponsored_by')

                                            ->get();
         //dd($professional_activity_attendee);


        $category_counts = DB::table('professional_activity_attendees')
            ->join('professional_activity_attendee_staff', 'professional_activity_attendee_id', '=', 'professional_activity_attendees.id')
            ->join('staff', 'staff.id', '=', 'professional_activity_attendee_staff.staff_id')
            ->join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
            ->join('departments', 'departments.id', '=', 'department_staff.department_id')
            ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id')
            ->where('employee_types.employee_type', '=', 'Non-Teaching')
            ->where('department_staff.status','active')
            ->where('department_id', '=', $department_id)
            ->select(
                DB::raw('COUNT( CASE WHEN category = "Seminar" THEN 1 END) as seminar_count'),
                DB::raw('COUNT( CASE WHEN category = "Webinar" THEN 1 END) as webinar_count'),
                DB::raw('COUNT( CASE WHEN category = "Certification Program" THEN 1 END) as certification_count'),
                DB::raw('COUNT( CASE WHEN category = "Hackathon" THEN 1 END) as hackathon_count'),

            )
            ->first();


        return view('/egov/Non-Teaching/attended',compact(['professional_activity_attendee','category_counts']));
    }

    public function egov_professional_activity_conducted_nt(Request $request)
    {

        $department_id=Session ::get('deptid');
        $professional_activity_conducteds=DB::table('professional_activity_conducteds')
                                            ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                            ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('employee_types.employee_type','=','Non-Teaching')
                                            ->where('department_staff.status','active')
                                            // ->where('staff.employee_type','=','Non-teaching')
                                            ->where('department_id','=',$department_id)
                                            //->select('professional_activity_conducteds.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->select(DB::raw('DISTINCT(professional_activity_conducteds.egov_id)'),'professional_activity_conducteds.*','fname','staff.id as staff_id','mname','lname','employee_type','department_id','dept_shortname','sponsoring_agency_name_address')
                                            ->get();
        // dd($professional_activity_conducteds);

        //count category

        $conducted_category_counts = DB::table('professional_activity_conducteds')
                                ->join('professional_activity_conducted_staff','professional_activity_conducted_id','=','professional_activity_conducteds.id')
                                ->join('staff','staff.id','=','professional_activity_conducted_staff.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('employee_types.employee_type','=','Non-Teaching')
                                ->where('department_staff.status','active')

                                ->where('department_id','=',$department_id)
                                ->select(
                                    DB::raw('COUNT( CASE WHEN category = "Seminar" THEN 1 END) as seminar_count'),
                                    DB::raw('COUNT( CASE WHEN category = "Webinar" THEN 1 END) as webinar_count'),
                                    DB::raw('COUNT( CASE WHEN category = "Certification Program" THEN 1 END) as certification_count'),
                                    DB::raw('COUNT( CASE WHEN category = "Hackathon" THEN 1 END) as hackathon_count'),
                                )
                                ->first();

        return view('/egov/Non-Teaching/conducted',compact(['professional_activity_conducteds','conducted_category_counts']));
    }








}
