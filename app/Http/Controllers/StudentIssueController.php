<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_issue;
use App\Models\HOD\exam_section_issue;
use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class StudentIssueController extends Controller
{
    public function index()
    {
        $studentissues = student_issue::all();
        $examSectionIssues = exam_section_issue::all();
        return view('student-issues.index', compact('studentissues','examSectionIssues'));
    }
    

    // public function index()
    // {
    //     $studentIssues = student_issue::with(['exam_section_issue', 'exam_section_issue.staff'])
            
    //         ->paginate(10); // Pagination for better user experience

    //     return view('student-issues.index', compact('studentIssues'));
    // }

    


    public function store(Request $request)
        {
            $status = false;
            $std_issue_id = 0;
            // $result="";

            $studentIssue = new student_issue();
            // if ($result === "success") {
                $studentIssue->usn = $request->usn;
                $studentIssue->exam_section_issue_id = $request->exam_section_issue_id;
                $studentIssue->other_issue = $request->other_issue;
                $studentIssue->description = $request->description;

                $std_issue_id = $studentIssue->save();
            // }
            if ($std_issue_id) {
                $status = 1;
            } else {
                $status = 0;
            }
            $examSectionIssues=exam_section_issue::with('staff')->where('exam_section_issues.id',$request->exam_section_issue_id)->first();


            
            $staffName = '';
            if ($request->exam_section_issue_id == '0') {
                // Replace 'Other Issue ID' with the actual ID for 'Other Issue'
                $staffName = 'Sudhindra T Kulkarni';
            } elseif ($examSectionIssues && $examSectionIssues->staff) {
                $staffName = trim("{$examSectionIssues->staff->fname} {$examSectionIssues->staff->mname} {$examSectionIssues->staff->lname}");
            } else {
                $staffName = 'No staff assigned';
            }

        
            $return_data = [
                'status' => $status,
                // 'result' => $result,
                'staff_id' => $staffName, // Add staff name to the return data
            ];

            //return redirect('student-issue.show')->with('return_data', $return_data);
            return redirect()->route('student-issues.show', ['student_issue' => $studentIssue->id])->with('return_data', $return_data);
        }
            
        

        public function show(student_issue $student_issue)
        {
            $examSectionIssues=exam_section_issue::with('student_issue')->get();
            return view('student-issues.show', compact('student_issue','examSectionIssues'));
            // return view('student-issues.show', compact('student_issue'));
            
        }

        // public function view(student_issue $student_issue)
        // {
        //      $student_issue = student_issue::get();

        //      return view('HOD.view', compact('student_issue'));
        // }
        
}

        //

        // public function view(student_issue $student_issue)
        // {
        //     return view('student-issues.view',compact('student_issue'));
        // }

        // public function show(student_issue $student_issue_id)
        // {
        //     $student_issue = student_issue::with(['exam_section_issue.staff'])->find($student_issue_id);

        //     if (!$student_issue) {
        //         return redirect()->route('student-issues.index')->with('error', 'Student issue not found.');
        //     }

        //     return view('student-issues.show', compact('student_issue'));
        // }
        // return view('student-issues.show', compact('student_issue'));


        // public function show($id)
        // {
        //     $student_issue = student_issue::findOrFail($id);
        //     $examSectionIssues = $student_issue->exam_section_issue; // Ensure this relationship is defined
        //     return view('student-issues.show', compact('student_issue', 'examSectionIssues'));
        // }




        // Show function
        // public function show(student_issue $student_issue)
        // {

        //     $student_issue=student_issue::where('student_issue',$student_issue->id)->get();

        //     return view('student-issues.show' ,compact('student_issue'));

        // }






            // $std_issue_id = 0;

            // $studentIssue->usn = $request->usn;
            // $studentIssue->exam_section_issue_id = $request->exam_section_issue_id;
            // $studentIssue->other_issue = $request->other_issue;
            // $studentIssue->description = $request->description;

            // if ($std_issue_id) {
            //     $status = 1;
            // } else {
            //     $status = 0;
            // }
            // $examSectionIssues=exam_section_issue::with('staff')->where('exam_section_issues.id',$request->exam_section_issue_id)->first();


            // //dd($examSectionIssues);
    
            // $staffName = ''; 
            // if ($std_issue_id) {
                
            //     $staffName = $examSectionIssues->staff->fname;
            // }
            // $return_data = [
            //     'status' => $status,
            //     // 'result' => $result,
            //     'staff_id' => $staffName, // Add staff name to the return data
            // ];

                

        

    // public function store(Request $request)
    // {
    //     $status = false;
    //     $std_issue_id = 0;
    //     $result = "";
    
    //     $studentIssue = new StudentIssue();
    //     if ($result === "success") {
    //         $studentIssue->usn = $request->usn;
    //         $studentIssue->exam_section_issue_id = $request->exam_section_issue_id;
    //         $studentIssue->other_issue = $request->other_issue;
    //         $studentIssue->description = $request->description;
    
    //         $std_issue_id = $studentIssue->save();
    //     }
    //     if ($std_issue_id && $result) {
    //         $status = 1;
    //     } else {
    //         $status = $result;
    //     }
    
    //     // Get the staff name
    //     $staffName = ''; // Initialize with empty string
    //     if ($std_issue_id) {
    //         // Assuming your StudentIssue model has a relationship named 'examSectionIssue'
    //         // Change 'examSectionIssue' to your actual relationship name
    //         $examSectionIssue = $studentIssue->examSectionIssue;
    
    //         // Assuming your ExamSectionIssue model has a relationship named 'staff'
    //         // Change 'staff' to your actual relationship name
    //         if ($examSectionIssue) {
    //             $staffName = $examSectionIssue->staff->name;
    //         }
    //     }
    
    //     $return_data = [
    //         'status' => $status,
    //         'result' => $result,
    //         'staff_name' => $staffName, // Add staff name to the return data
    //     ];
    
    //     return redirect()->back()->with('return_data', $return_data);
    // }
    



