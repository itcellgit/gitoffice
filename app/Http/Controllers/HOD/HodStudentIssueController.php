<?php

namespace App\Http\Controllers\HOD;

use App\Models\HOD\issue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\student_issue;
use App\Models\HOD\exam_section_issue;
use DB;

use Auth;

class HodStudentIssueController extends Controller
{
    
    public function index()
    {
        
        // $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
        // ->latest()
        // ->get();
        // $examSectionIssues = exam_section_issue::all();
        // $staff = staff::all();
        
        // return view('HOD.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues'));



        // $user = Auth::user();
        // $staff = staff::all();
        // $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
        //     // ->whereHas('exam_section_issue.staff', function ($query) use ($staff) {
        //     //     $query->where('id', $staff->id);
        //     // })
        //     ->get()
        //     ->sortBy(function ($issue) {
        //         return $issue->exam_section_issue ? 0 : 1;
        //     }); // Sorting logic to prioritize regular issues over unusual issues

        // $examSectionIssues = exam_section_issue::all();
        // return view('HOD.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues'));
        // return view('Staff.Non-Teaching.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues'));




        $user = Auth::user();
        $staff = staff::all();

        // Fetch student issues with necessary relationships
        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
        ->leftJoin('exam_section_issues','exam_section_issues.id','=','student_issues.exam_section_issue_id')
        ->orderBy('category_name','desc')
        ->orderBy('student_issues.created_at','desc')
        ->select('student_issues.*','exam_section_issues.category_name')
            ->get();
       // dd($student_issues->issue_timeline.user);
        // Sort issues: "regular" first, "unusual" later
     //   $sorted_issues = $student_issues->orderBy('category_name');
        
            //dd($student_issue_count);
        
        // sortBy(function ($issue) {
        //     return $issue->exam_section_issue && $issue->exam_section_issue->category_name === 'regular' ? 0 : 1;
        // });

        $examSectionIssues = exam_section_issue::all();

        return view('HOD.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues'));
    }


    public function show(student_issue $student_issue)
    {
        $student_issue=student_issue::with('issue_timeline.user')->where('student_issues.id',$student_issue->id)->first();
        //dd($student_issue);
        return view('HOD.issue_timeline',compact('student_issue'));
    }


}