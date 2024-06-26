<?php

namespace App\Http\Controllers\PRINCIPAL;

use App\Models\PRINCIPAL\issue_timeline;
use App\Http\Requests\Storeissue_timelineRequest;
use App\Http\Requests\Updateissue_timelineRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\student_issue;
use App\Models\PRINCIPAL\exam_section_issue;
use Auth;
use Illuminate\Support\Carbon;

class Pl_IssueTimelineController extends Controller
{
    
    public function index()
    {
        
        // Fetch all student issues with related data including issue timeline and staff details
        $student_issues = student_issue::with(['issue_timeline.user', 'exam_section_issue.staff'])
        ->latest()
        ->get();
        $examSectionIssues = exam_section_issue::all();
        $staff = staff::all();
        
        return view('PRINCIPAL.issue_timeline', compact('student_issues', 'staff', 'examSectionIssues'));
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

        $issue_timeline = new issue_timeline();
            $issue_timeline->date_of_interaction = $request->date_of_interaction;
            $issue_timeline->interaction = $request->interaction;
            $issue_timeline->followup_date = $request->followup_date;
            $issue_timeline->status = $request->status;
            $issue_timeline->status_updated_date = Carbon::now()->format('Y-m-d');
            $issue_timeline->status_updated_by=$user->id;
            $issue_timeline->student_issue_id = $student_issue->id;

            $issue_timeline->save();
        
        return redirect('/PRINCIPAL/viewstudentissues/'.$student_issue->id.'/show');
    }

    /**
     * Display the specified resource.
     */
    
    public function show(issue_timeline $issue_timeline,$student_issue)
    {
        
        $student_issue = student_issue::with(['issue_timeline'=>function($q){
            $q->with('user');
        }])->findOrFail($student_issue);
        // dd($student_issue);
        return view('/PRINCIPAL/viewstudentissues/'.$student_issue->id.'/show', compact('student_issue'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(issue_timeline $issue_timeline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateissue_timelineRequest $request, issue_timeline $issue_timeline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(issue_timeline $issue_timeline)
    {
        //
    }
}
