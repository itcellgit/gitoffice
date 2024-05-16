<?php

namespace App\Http\Controllers\Deanrnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRoles;
use App\Models\staff;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\conferences_attendee;
use App\Models\conferences_conducted;
use App\Models\publication;
use App\Models\funded_project;
use App\Models\patent;
use App\Models\copyright;
use App\Models\general_achievements;
use App\Models\book_publication;
use App\Models\consultancy;

use Session;
use Hash;
use Auth;

class DeanrndResearchController extends Controller
{
    //
    public function conferences_attendee(Request $request)
    {


        $conferences_attendees=DB::table('conferences_attendees')
                                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('department_staff.status','active')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(conferences_attendees.egov_id)'),'conferences_attendees.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->get();
         //dd($conferences_attendees);

                                            //conference attended as count to display
                                            $teaching_conferences_attendees=DB::table('conferences_attendees')
                                            ->join('conferences_attendee_staff','conferences_attendee_id','=','conferences_attendees.id')
                                            ->join('staff','staff.id','=','conferences_attendee_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('department_staff.status','active')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->where('department_id','=',$department_id)
                                            ->select(
                                                DB::raw('COUNT( CASE WHEN attended_as = "Resource Person" THEN 1 END) as resource_person_count'),
                                                DB::raw('COUNT( CASE WHEN attended_as = "Participant" THEN 1 END) as participant_count'),
                                                DB::raw('COUNT( CASE WHEN attended_as = "Paper Presenter" THEN 1 END) as paper_presenter_count'),
                                                DB::raw('COUNT( CASE WHEN type_of_level = "National" THEN 1 END) as national_count'),
                                                DB::raw('COUNT( CASE WHEN type_of_level = "International" THEN 1 END) as international_count'),
                                                DB::raw('COUNT( CASE WHEN type_of_level = "Session Chair" THEN 1 END) as session_chair_count'),
                                                )
                                            ->first();

        return view('/Deanrnd/Teaching/research/conferenceattended',compact(['conferences_attendees','teaching_conferences_attendees']));
    }

    public function conferences_conducted(Request $request)
    {


        $conferences_conducted=DB::table('conferences_conducteds')
                                            ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                                            ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                                            ->join('departments','departments.id','=','department_staff.department_id')
                                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                                            ->where('department_staff.status','active')
                                            ->where('employee_types.employee_type','=','Teaching')
                                            //->where('staff.employee_type','=','Teaching')
                                            //->select('conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->select(DB::raw('DISTINCT(conferences_conducteds.egov_id)'),'conferences_conducteds.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                            ->get();
         //dd($conferences_attendees);

                                        //count display
                                        $teaching_conferences_conducted=DB::table('conferences_conducteds')
                                        ->join('conferences_conducted_staff','conferences_conducted_id','=','conferences_conducteds.id')
                                        ->join('staff','staff.id','=','conferences_conducted_staff.staff_id')
                                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                                        ->join('departments','departments.id','=','department_staff.department_id')
                                        ->join('employee_types','employee_types.staff_id','=','staff.id')
                                        ->where('employee_types.employee_type','=','Teaching')
                                        ->where('department_staff.status','active')
                                        //->where('department_id','=',$department_id)
                                        ->select(
                                            DB::raw('COUNT( CASE WHEN type_of_level = "National " THEN 1 END) as national_count'),
                                            DB::raw('COUNT( CASE WHEN type_of_level = "International" THEN 1 END) as international_count'),
                                            DB::raw('COUNT( CASE WHEN role = "Convener" THEN 1 END) as convener_count'),
                                            DB::raw('COUNT( CASE WHEN role = "Co-convener" THEN 1 END) as co_convener_count'),
                                            DB::raw('COUNT( CASE WHEN role = "Team Member" THEN 1 END) as team_member_count'),
                                            DB::raw('COUNT( CASE WHEN role = "Coordinator" THEN 1 END) as coordinator_count'),

                                            )
                                        ->first();

        return view('/Deanrnd/Teaching/research/conferenceconducted',compact(['conferences_conducted','teaching_conferences_conducted']));
    }

    public function publication(Request $request)
    {


        $publication=DB::table('publications')
                                    ->join('staff','staff.id','=','publications.staff_id')
                                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                                    ->join('departments','departments.id','=','department_staff.department_id')
                                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                                    ->where('department_staff.status','active')
                                    ->where('employee_types.employee_type','=','Teaching')
                                    //->where('staff.employee_type','=','Teaching')
                                    //->select('publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                    ->select(DB::raw('DISTINCT(publications.egov_id)'),'publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                    ->get();

                                    // dd($publication);

                                    //count display
                                    $teaching_publication=DB::table('publications')
                                    ->join('staff','staff.id','=','publications.staff_id')
                                    ->join('department_staff','department_staff.staff_id','=','staff.id')
                                    ->join('departments','departments.id','=','department_staff.department_id')
                                    ->join('employee_types','employee_types.staff_id','=','staff.id')
                                    ->where('employee_types.employee_type','=','Teaching')
                                    ->where('department_staff.status','active')
                                    //->where('department_id','=',$department_id)

                                    ->select(
                                        DB::raw('COUNT( CASE WHEN level = "Q1 " THEN 1 END) as Q1_count'),
                                        DB::raw('COUNT( CASE WHEN level = "Q2" THEN 1 END) as Q2_count'),
                                        DB::raw('COUNT( CASE WHEN level = "Q3" THEN 1 END) as Q3_count'),
                                        DB::raw('COUNT( CASE WHEN level = "Q4" THEN 1 END) as Q4_count'),
                                        DB::raw('COUNT( CASE WHEN level = "Web of Science" THEN 1 END) as web_of_science_count'),
                                        DB::raw('COUNT( CASE WHEN level = "Scopus Indexed" THEN 1 END) as scopus_indexed_count'),
                                        DB::raw('COUNT( CASE WHEN level = "UGC General" THEN 1 END) as UGC_count'),
                                        DB::raw('COUNT( CASE WHEN level = "SCI" THEN 1 END) as SCI_count'),

                                        DB::raw('COUNT( CASE WHEN role = "Author" THEN 1 END) as author_count'),
                                        DB::raw('COUNT( CASE WHEN role = "Co-Author" THEN 1 END) as co_author_count'),
                                        DB::raw('COUNT( CASE WHEN role = "Corresponding-author" THEN 1 END) as corresponding_author_count'),

                                        )
                                        ->first();


        return view('/Deanrnd/Teaching/research/publication',compact(['publication','teaching_publication']));
    }

    public function funded_project(Request $request)
    {


        $fundedproject=DB::table('funded_projects')

                                ->join('staff','staff.id','=','funded_projects.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('department_staff.status','active')
                                ->where('employee_types.employee_type','=','Teaching')
                                //->where('staff.employee_type','=','Teaching')
                                //->select('funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->select(DB::raw('DISTINCT(funded_projects.egov_id)'),'funded_projects.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->get();
                            // dd($fundedproject);

                             //count display
                                $fundedproject_count=DB::table('funded_projects')
                                ->join('staff','staff.id','=','funded_projects.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('employee_types.employee_type','=','Teaching')
                                ->where('department_staff.status','active')
                                //->where('department_id','=',$department_id)
                                ->select(
                                    DB::raw('COUNT( CASE WHEN role = "Principle Investigator" THEN 1 END) as principle_investigator_count'),
                                    DB::raw('COUNT( CASE WHEN role = "Co-Investigator" THEN 1 END) as co_investigator_count'),
                                    DB::raw('COUNT( CASE WHEN role = "Architect" THEN 1 END) as architect_count'),
                                    DB::raw('COUNT( CASE WHEN type = "Govt-funded" THEN 1 END) as govt_count'),
                                    DB::raw('COUNT( CASE WHEN type = "Private funded" THEN 1 END) as private_count'),
                                )
                                ->first();

        return view('/Deanrnd/Teaching/research/fundedproject',compact(['fundedproject','fundedproject_count']));
    }

    public function patents(Request $request)
    {


        $patents=DB::table('patents')

                            ->join('staff','staff.id','=','patents.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('department_staff.status','active')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            //->select('patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->select(DB::raw('DISTINCT(patents.egov_id)'),'patents.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
                            // dd($patents);

                             //count display
                                $teaching_patents_count = DB::table('patents')
                                ->join('staff', 'staff.id', '=', 'patents.staff_id')
                                ->join('department_staff', 'department_staff.staff_id', '=', 'staff.id')
                                ->join('departments', 'departments.id', '=', 'department_staff.department_id')
                                ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id')
                                ->where('employee_types.employee_type', '=', 'Teaching')
                                ->where('department_staff.status','active')
                                //->where('department_id', '=', $department_id)
                                ->select(
                                    DB::raw('COUNT( CASE WHEN patents.status = "Granted" THEN patents.id END) as granted_count'),
                                    DB::raw('COUNT( CASE WHEN patents.status = "Pending" THEN patents.id END) as pending_count'),
                                    DB::raw('COUNT( CASE WHEN patents.status = "Rejected" THEN patents.id END) as rejected_count'),
                                    DB::raw('COUNT( CASE WHEN patents.status = "Awarded" THEN patents.id END) as awarded_count'),
                                    DB::raw('COUNT( CASE WHEN patents.status = "Published" THEN patents.id END) as published_count')
                                )
                                ->first();

        return view('/Deanrnd/Teaching/research/patents',compact(['patents','teaching_patents_count']));
    }
    public function copyrights(Request $request)
    {


        $copyrights=DB::table('copyrights')

                            ->join('staff','staff.id','=','copyrights.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('department_staff.status','active')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            //->select('copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->select(DB::raw('DISTINCT(copyrights.egov_id)'),'copyrights.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();
                            // dd($copyrights);

                            $copyrights_count=DB::table('copyrights')
                            ->join('staff','staff.id','=','copyrights.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                            ->where('department_staff.status','active')
                            //->where('department_id','=',$department_id)
                            ->select(
                                DB::raw('COUNT( CASE WHEN copyrights.status = "Applied" THEN 1 END) as applied_count'),
                                DB::raw('COUNT( CASE WHEN copyrights.status = "Awarded" THEN 1 END) as awarded_count'),
                                )
                            ->first();

        return view('/Deanrnd/Teaching/research/copyrights',compact(['copyrights','copyrights_count']));
    }

    public function general_achievement(Request $request)
    {


        $general_achievements=DB::table('general_achievements')

                            ->join('staff','staff.id','=','general_achievements.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('department_staff.status','active')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            ->select('general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            //->select(DB::raw('DISTINCT(general_achievements.egov_id)'),'general_achievements.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();


        return view('/Deanrnd/Teaching/research/achivements',compact(['general_achievements']));
    }

    public function book_chapter(Request $request)
    {


        $book_chapter=DB::table('book_publications')

                                ->join('staff','staff.id','=','book_publications.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('department_staff.status','active')
                                ->where('employee_types.employee_type','=','Teaching')
                                //->where('staff.employee_type','=','Teaching')
                                //->select('book_publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->select(DB::raw('DISTINCT(book_publications.egov_id)'),'book_publications.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->get();
                                // dd($fundedproject);

                                 //count display
                                $books_chapters_count=DB::table('book_publications')
                                ->join('staff','staff.id','=','book_publications.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('employee_types.employee_type','=','Teaching')
                                ->where('department_staff.status','active')
                                //->where('department_id','=',$department_id)
                                ->select(
                                    DB::raw('COUNT( CASE WHEN book_level = "National" THEN 1 END) as national_count'),
                                    DB::raw('COUNT( CASE WHEN book_level = "International" THEN 1 END) as international_count'),
                                    DB::raw('COUNT( CASE WHEN type = "Book" THEN 1 END) as book_count'),
                                    DB::raw('COUNT( CASE WHEN type = "Chapter" THEN 1 END) as chapter_count'),
                                )
                                ->first();

        return view('/Deanrnd/Teaching/research/book_chapter',compact(['book_chapter','books_chapters_count']));
    }

    public function consultancy(Request $request)
    {


        $consultancy=DB::table('consultancies')

                                ->join('staff','staff.id','=','consultancies.staff_id')
                                ->join('department_staff','department_staff.staff_id','=','staff.id')
                                ->join('departments','departments.id','=','department_staff.department_id')
                                ->join('employee_types','employee_types.staff_id','=','staff.id')
                                ->where('department_staff.status','active')
                                ->where('employee_types.employee_type','=','Teaching')
                                //->where('staff.employee_type','=','Teaching')
                                //->select('consultancies.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->select(DB::raw('DISTINCT(consultancies.egov_id)'),'consultancies.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                                ->get();
        // dd($fundedproject);

        return view('/Deanrnd/Teaching/research/dean_consultancy',compact(['consultancy']));
    }

    public function reviewer_editor(Request $request)
    {


        $reviewer_editor=DB::table('reviewer_editors')

                            ->join('staff','staff.id','=','reviewer_editors.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('department_staff.status','active')
                            ->where('employee_types.employee_type','=','Teaching')
                            //->where('staff.employee_type','=','Teaching')
                            //->select('reviewer_editors.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->select(DB::raw('DISTINCT(reviewer_editors.egov_id)'),'reviewer_editors.*','fname','staff.id','mname','lname','employee_type','department_id','dept_shortname',)
                            ->get();

                            $review_editor_count=DB::table('reviewer_editors')
                            ->join('staff','staff.id','=','reviewer_editors.staff_id')
                            ->join('department_staff','department_staff.staff_id','=','staff.id')
                            ->join('departments','departments.id','=','department_staff.department_id')
                            ->join('employee_types','employee_types.staff_id','=','staff.id')
                            ->where('employee_types.employee_type','=','Teaching')
                            ->where('department_staff.status','active')
                            //->where('department_id','=',$department_id)
                            ->select(
                                DB::raw('COUNT( CASE WHEN level = "Q1 " THEN 1 END) as Q1_count'),
                                DB::raw('COUNT( CASE WHEN level = "Q2" THEN 1 END) as Q2_count'),
                                DB::raw('COUNT( CASE WHEN level = "Q3" THEN 1 END) as Q3_count'),
                                DB::raw('COUNT( CASE WHEN level = "Q4" THEN 1 END) as Q4_count'),
                                DB::raw('COUNT( CASE WHEN level = "Web of Science" THEN 1 END) as web_of_science_count'),
                                DB::raw('COUNT( CASE WHEN level = "Scopus Indexed" THEN 1 END) as scopus_indexed_count'),

                                )
                            ->first();



        return view('/Deanrnd/Teaching/research/reviewer_editor',compact(['reviewer_editor','review_editor_count']));
    }





}






