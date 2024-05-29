<?php

namespace App\Http\Controllers\PRINCIPAL;

use App\Models\PRINCIPAL\issue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\student_issue;
use App\Models\PRINCIPAL\exam_section_issue;

use Auth;

class PrincipalStudentIssueController extends Controller
{
    
    public function index()
    {
    //     $user = Auth::user();
    //     $staff = staff::all();

    //     // Fetch student issues with necessary relationships
    //     $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
    //     ->leftJoin('exam_section_issues','exam_section_issues.id','=','student_issues.exam_section_issue_id')
    //     ->orderBy('category_name','desc')
    //     ->orderBy('student_issues.created_at','desc')
    //     ->select('student_issues.*','exam_section_issues.category_name')
    //         ->get();
    //         // dd($student_issues);
    //     // Sort issues: "regular" first, "unusual" later
    //  //   $sorted_issues = $student_issues->orderBy('category_name');
        
        
    //     // sortBy(function ($issue) {
    //     //     return $issue->exam_section_issue && $issue->exam_section_issue->category_name === 'regular' ? 0 : 1;
    //     // });

    //     $examSectionIssues = exam_section_issue::all();

    //     return view('PRINCIPAL.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues'));


        $user = Auth::user();
        $staff = staff::all();

        // Fetch student issues with necessary relationships and conditional ordering
        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
            ->leftJoin('exam_section_issues', 'exam_section_issues.id', '=', 'student_issues.exam_section_issue_id')
            ->orderByRaw("CASE 
                WHEN exam_section_issues.category_name IS NULL THEN 0
                ELSE 1
            END, exam_section_issues.category_name DESC, student_issues.created_at DESC")
            ->select('student_issues.*', 'exam_section_issues.category_name')
            ->get();

        $examSectionIssues = exam_section_issue::all();

        return view('PRINCIPAL.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues'));


    }


    public function show(student_issue $student_issue)
    {
        $student_issue=student_issue::with('issue_timeline.user')->where('student_issues.id',$student_issue->id)->first();
        //dd($student_issue);
        return view('PRINCIPAL.issue_timeline',compact('student_issue'));
    }


}