<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\student_studentinternship;
use App\Http\Requests\Storestudent_studentinternshipRequest;
use App\Http\Requests\Updatestudent_studentinternshipRequest;
use App\Models\internship\student;
use App\Models\internship\studentinternship;
use App\Http\Controllers\Controller;
use DB;

class StudentStudentinternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=student::get();
        
        $studentinternship=studentinternship::get();
        //$student_internships=student_studentinternship::with('student','studentinternship')->get();
        $student_internships=student::with('studentinternship')->get();
        
        $studentsWithoutInternship = student::whereDoesntHave('student_studentinternship')->get();
        dd($studentsWithoutInternship);
        
        return view('internship.showinternship',compact('students','studentinternship','student_internships','studentsWithoutInternship'));
        //dd($student_internships);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd($student_internships);
        $studentsWithoutInternship = student::whereDoesntHave('student_studentinternship')->get();

    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Storestudent_studentinternshipRequest $request, studentinternship $studentinternship)
    {
        $studentsWithoutInternship = student::whereDoesntHave('student_studentinternship')->get();

        // Iterate over each student_id in the request
        foreach ($request->student_id as $studentId) {
            $existingMapping = student_studentinternship::where('studentinternship_id', $studentinternship->id)
            ->where('student_id', $studentId)
            ->exists();
            // Check if the student is already associated with the internship
            if (!$existingMapping)  {
                // Create a new relationship record
                $student_studentinternship = new student_studentinternship();
                $student_studentinternship->studentinternship_id = $studentinternship->id;
                $student_studentinternship->student_id = $studentId;
                $student_studentinternship->save();
            }
        }

        // Redirect after all students have been processed
        return redirect('/Teaching/internship/studentinternship/'.$studentinternship->id.'/show');
    }

    
   
    /**
     * Display the specified resource.
     */
    public function show(student_studentinternship $student_studentinternship)
    {
        //dd($student_studentinternship);
        $students=student::get();
        $spocs=spoc::get();

        //dd($students);
        $interaction=$student_studentinternship->spoc()->get();
        //return view('internship.interaction',compact('interaction','students'));
    
        return view('internship.showinternship',compact(['studentinternship','students','student_studentinternship']));
    }

    // public function editInternship($internshipId)
    // {
        
    //     // Get the internship and its associated students
    //     $studentinternship = studentinternship::with('student')->findOrFail($internshipId);
    
    //     // Get all student IDs already assigned to any internship
    //     $assignedStudentIds = DB::table('student_studentinternship')->pluck('student_id')->toArray();
    
    //     // Fetch all students, excluding those already assigned to any internship
    //     $students = student::whereNotIn('id', $assignedStudentIds)->get();
    
    //     // Pass the data to the view
    //     return view('internship.showinternship', compact('studentinternship', 'students'));
    // }
    


    
    public function edit(student_studentinternship $student_studentinternship)
    {
        
        //return view('internship.edit',compact('student_studentinternship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatestudent_studentinternshipRequest $request, student_studentinternship $student_studentinternship)
    {
        //dd(here);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(studentinternship $studentinternship,student_studentinternship $student_studentinternship)
    {
       // $student_studentinternship=DB::table('student_studentinternship')->where('id',$student_studentinternship)->first();
       // dd($student_studentinternship);
        $result=$student_studentinternship->delete();
        
        return redirect('/Teaching/internship/studentinternship/'.$studentinternship->id.'/show');  
    }
}
