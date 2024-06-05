<?php

namespace App\Http\Controllers\NonTeaching;

use App\Models\Non_Teaching\ntissue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\student_issue;
use App\Models\Non_Teaching\exam_section_issue;

use Auth;

class StaffStudentIssueController extends Controller
{
    
    public function index()
{
    $user = Auth::user();
    $staff = Staff::where('user_id', $user->id)->first();

    $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
        ->whereHas('exam_section_issue.staff', function ($query) use ($staff) {
            $query->where('id', $staff->id);
        })
        ->latest()
        ->get();   
    
    $examSectionIssues = exam_section_issue::all();
    
    // Retrieve total counts of unusual and regular issues
    $totalUnusualIssues = student_issue::where(function ($query) {
        $query->whereHas('exam_section_issue', function ($query) {
            $query->where('category_name', 'unusual');
        })->orWhereNull('exam_section_issue_id');
    })->count();
    
    $totalRegularIssues = student_issue::whereHas('exam_section_issue', function ($query) {
        $query->where('category_name', 'regular');
    })->count();

    // Retrieve counts of resolved unusual and regular issues
    $resolvedUnusualIssues = student_issue::whereHas('issue_timeline', function ($query) {
        $query->where('status', 'resolved')->whereHas('student_issue.exam_section_issue', function ($q) {
            $q->where('category_name', 'unusual');
        });
    })->count();

    $resolvedRegularIssues = student_issue::whereHas('issue_timeline', function ($query) {
        $query->where('status', 'resolved')->whereHas('student_issue.exam_section_issue', function ($q) {
            $q->where('category_name', 'regular');
        });
    })->count();

    // Pass counts to the view
    $counts = [
        'total_unusual_issues' => $totalUnusualIssues,
        'total_regular_issues' => $totalRegularIssues,
        'resolved_unusual_issues' => $resolvedUnusualIssues,
        'resolved_regular_issues' => $resolvedRegularIssues,
    ];

    return view('Staff.Non-Teaching.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues', 'counts'));
}


    public function show(student_issue $student_issue)
    {
        $student_issue = student_issue::with('issue_timeline.user')->where('student_issues.id', $student_issue->id)->first();
        
        return view('Staff.Non-Teaching.issue_timeline', compact('student_issue'));
    }
}