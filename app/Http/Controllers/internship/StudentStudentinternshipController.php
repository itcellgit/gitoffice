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
        
        return view('internship.showinternship',compact('students','studentinternship','student_internships'));
        //dd($student_internships);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd($student_internships);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Storestudent_studentinternshipRequest $request,studentinternship $studentinternship)
    {
       // dd($studentinternship);
    
        foreach($request->student_id as $student)
        {
            $student=student::find($student);
            $student_studentinternship=new student_studentinternship(); 
            $student_studentinternship->studentinternship_id=$studentinternship->id;
            $student_studentinternship->student_id=$student->id;
            $student_studentinternship->save();
             //dd($student);
        //dd($studentinternship);
           // $result=$studentinternship->student()->attach($student->id);
            //dd($student_studentinternship);
        }

        //$students=Student::get();
   
        // $studentinternship->student()->attach($student_id);
         //$student_internship= new Student_studentinternship();
        // $student_internships->student_id=$request->student_id;
         //$student_internship->studentinternship_id=$studentinternship_id;
        // $student_studentinternship->save();
    
 
        // $student_internships->save();
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
        return view('internship.interaction',compact('interaction','students'));



        
    
        return view('internship.showinternship',compact(['studentinternship','students','student_studentinternship']));
    }

    /**
     * Show the form for editing the specified resource.
     */
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
