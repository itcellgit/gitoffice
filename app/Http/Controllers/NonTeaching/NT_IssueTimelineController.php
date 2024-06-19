<?php

namespace App\Http\Controllers\NonTeaching;

use App\Models\Non_Teaching\ntissue_timeline;
// use App\Models\HOD\issue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\student_issue;
use App\Models\Non_Teaching\exam_section_issue;
use Auth;
use Illuminate\Support\Carbon;

class NT_IssueTimelineController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
        ->latest()
        ->get();
        $examSectionIssues = exam_section_issue::all();
        $staff = staff::all();
        // $staff = User::where('role', 'staff')->get();
        
        return view('Staff.Non-Teaching.issue_timeline', compact('student_issues', 'staff', 'examSectionIssues'));

    
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeissue_timelineRequest $request,student_issue $student_issue)
    {

        $user = Auth::user();
       // dd($user->id);

        $issue_timeline = new ntissue_timeline();
            $issue_timeline->date_of_interaction = $request->date_of_interaction;
            $issue_timeline->interaction = $request->interaction;
            $issue_timeline->followup_date = $request->followup_date;
            $issue_timeline->status = $request->status;
            $issue_timeline->status_updated_date = Carbon::now()->format('Y-m-d');
            $issue_timeline->status_updated_by=$user->id;
            $issue_timeline->student_issue_id = $student_issue->id;

            $issue_timeline->save();
        
        return redirect('/Staff/Non-Teaching/viewstudentissues/'.$student_issue->id.'/show');
    }

    /**
     * Display the specified resource.
     */
    
    public function show(ntissue_timeline $issue_timeline,$student_issue)
    {
        
        $student_issue = student_issue::with(['issue_timeline'=>function($q){
            $q->with('user');
        }])->findOrFail($student_issue);
        // dd($student_issue);
        return view('/Staff/Non-Teaching/viewstudentissues/'.$student_issue->id.'/show', compact('student_issue'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ntissue_timeline $issue_timeline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateissue_timelineRequest $request, ntissue_timeline $issue_timeline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ntissue_timeline $issue_timeline)
    {
        //
    }
}
