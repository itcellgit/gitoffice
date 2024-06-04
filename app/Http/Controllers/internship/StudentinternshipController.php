<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\studentinternship;
use App\Http\Requests\StorestudentinternshipRequest;
use App\Http\Requests\UpdatestudentinternshipRequest;
use App\Models\internship\spoc;
use App\Models\internship\industry;
use App\Models\internship\student;
use App\Http\Controllers\Controller;


class StudentinternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getSpocs($industry_id)
    {
        $spocs = spoc::where('industry_id', $industry_id)->get();
        return response()->json($spocs);
    }

    
    public function index()
    {
        $studentinternshipCount = studentinternship::count();
        $industries = industry::get();
        $spocs = spoc::get();
        $studentinternships = studentinternship::with('industry')->with('spoc')->get();
       // dd($studentinternships);
        //$industries = Industry::with('spoc')->get();
        return view('internship.studentinternship', compact('studentinternshipCount','industries','spocs','studentinternships'));
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
    public function store(StorestudentinternshipRequest $request)
    {
        $studentinternships= new studentinternship();
        $studentinternships->title=$request->title;
        $studentinternships->years=$request->years;
        $studentinternships->sdate=$request->sdate;
        $studentinternships->edate=$request->edate;
        $studentinternships-> industry_id=$request->industry_id;
        $studentinternships-> spoc_id=$request->spoc_id;
 
        $studentinternships->save();
        return redirect('/Teaching/internship/studentinternship');
    }

    /**
     * Display the specified resource.
     */
    public function show(studentinternship $studentinternship)
    {
        $students=student::get();
        //dd($students);
        //$studentinternship=studentinternship::with('student')->where('id',$studentinternship->id)->get();
        $student_studentinternship=$studentinternship->student()->get();
       // dd($studentinternship);
        return view('internship.showinternship',compact(['studentinternship','students','student_studentinternship']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(studentinternship $studentinternship)
    {
        //dd($studentinternship);
        $students=student::get();
        return view('internship.showinternship',compact('studentinternship','students'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentinternshipRequest $request, studentinternship $studentinternship)
    {
       
        $studentinternship->title=$request->title;
        $studentinternship->years=$request->years;
        $studentinternship->sdate=$request->sdate;
        $studentinternship->edate=$request->edate;
        $studentinternship->industry_id=$request->industry_id;
        $studentinternship->spoc_id=$request->spoc_id;
 
        $studentinternship->save();
        return redirect('/Teaching/internship/studentinternship');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(studentinternship $studentinternship)
    {
        $studentinternship->delete();
        return redirect('/Teaching/internship/studentinternship');
    }
}
