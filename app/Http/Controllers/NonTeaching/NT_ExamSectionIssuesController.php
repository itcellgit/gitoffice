<?php

namespace App\Http\Controllers\NonTeaching;

use App\Models\Non_Teaching\exam_section_issue;
use App\Http\Requests\StoreExamSectionIssuesRequest;
use App\Http\Requests\UpdateExamSectionIssuesRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;


class NT_ExamSectionIssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $examsectionissues=exam_section_issue::get();
         $staff = staff::whereIn('id', function ($query) {
            $query->select('staff_id')
                  ->from('department_staff')
                  ->where('department_id', function ($query) {
                      $query->select('id')
                            ->from('departments')
                            ->where('dept_shortname', 'ES');
                  });
        })->get();
        //dd($staff);

        return view('Staff.Non-Teaching.examsectionissues', compact('examsectionissues','staff'));
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
    public function store(StoreExamSectionIssuesRequest $request)
    {
        //dd($request);
        $user = Auth::user();
        $staff=staff::where('user_id','=',$user->id)->first();
        // dd($user->id);
        $examsectionissues=new exam_section_issue();
        
        $examsectionissues->issues=$request->issues;
        $examsectionissues->remarks=$request->remarks;
        $examsectionissues->category_name=$request->category_name;
        $examsectionissues->staff_id =$request->staff_id;

        
        $examsectionissues->save();
        $categoryinsertedId = $examsectionissues->id;
        if($categoryinsertedId > 0){
            $status = 1;
            return redirect('/Staff/Non-Teaching/examsectionissues')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/Staff/Non-Teaching/examsectionissues')->with('status', $status);
        }
    }

    

    /**
     * Display the specified resource.
     */
    public function show(exam_section_issue $examSectionIssues)
    {
        return view('Staff.Non-Teaching.issue_timeline',compact('examSectionIssues'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(exam_section_issue $examSectionIssues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamSectionIssuesRequest $request, exam_section_issue $examSectionIssues)
    {
        //  dd($request);
         $examSectionIssues->issues=$request->issues;
         $examSectionIssues->remarks=$request->remarks;
         $examSectionIssues->category_name=$request->category_name;
         $examSectionIssues->staff_id =$request->staff_id;
 
         
         //$issues_category->update();
         $result = $examSectionIssues->update();  
         //dd($result);
         if ($result) {
             $status = 1;
         } else {
             $status = 0;
         }
         
         return redirect('/Staff/Non-Teaching/examsectionissues')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(exam_section_issue $examSectionIssues)
    {
        $examSectionIssues->delete();
        return redirect('/Staff/Non-Teaching/examsectionissues');
    }
}
