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

        // Calculate the required counts
        $totalUnusualIssues = student_issue::where(function ($query) {
            $query->whereHas('exam_section_issue', function ($query) {
                $query->where('category_name', 'unusual');
            })->orWhereNull('exam_section_issue_id');
        })->count();

        $totalRegularIssues = student_issue::whereHas('exam_section_issue', function($query) {
            $query->where('category_name', 'regular');
        })->count();

        // Assuming resolved status is stored in 'issue_timelines' table with a value 'resolved'
        $resolvedUnusualIssues = student_issue::whereHas('exam_section_issue', function($query) {
            $query->where('category_name', 'unusual');
        })->whereHas('issue_timeline', function($query) {
            $query->where('status', 'resolved');
        })->count();

        $resolvedRegularIssues = student_issue::whereHas('exam_section_issue', function($query) {
            $query->where('category_name', 'regular');
        })->whereHas('issue_timeline', function($query) {
            $query->where('status', 'resolved');
        })->count();

        // Pass counts to the view
        $counts = [
            'total_unusual_issues' => $totalUnusualIssues,
            'total_regular_issues' => $totalRegularIssues,
            'resolved_unusual_issues' => $resolvedUnusualIssues,
            'resolved_regular_issues' => $resolvedRegularIssues,
        ];

        return view('HOD.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues', 'counts'));
    }


    public function show(student_issue $student_issue)
    {
        $student_issue=student_issue::with('issue_timeline.user')->where('student_issues.id',$student_issue->id)->first();
        //dd($student_issue);
        return view('HOD.issue_timeline',compact('student_issue'));
    }


}