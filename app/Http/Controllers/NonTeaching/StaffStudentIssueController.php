<?php

namespace App\Http\Controllers\NonTeaching;

use App\Models\Non_Teaching\issue_timeline;
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
        $staff = staff::where('user_id', $user->id)->first();
        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
            ->whereHas('exam_section_issue.staff', function ($query) use ($staff) {
                $query->where('id', $staff->id);
            })
            ->latest()
            ->get();   
        $examSectionIssues = exam_section_issue::all();
        return view('Staff.Non-Teaching.viewstudentissues', compact('student_issues', 'staff', 'examSectionIssues',));

        

    }

    public function show(student_issue $student_issue)
    {
        $student_issue=student_issue::with('issue_timeline.user')->where('student_issues.id',$student_issue->id)->first();
        //dd($student_issue);
        return view('Staff.Non-Teaching.issue_timeline',compact('student_issue'));
    }


}