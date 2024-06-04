<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\student;
use App\Models\internship\spoc;

use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // dd('here');
       $studentCount = student::count();
        $students=student::with('interaction')->get();
       // dd($students);
       $spocs=spoc::get();
        return view('internship.index',compact('studentCount','students','spocs'));
       
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
    public function store(StorestudentRequest $request)
    {
        $student= new student();
        $student-> usn=$request->usn;
        $student-> name=$request->name;
        $student-> batch=$request->batch;
 
            $student->save();
            return redirect('/Teaching/internship/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        $spocs=spoc::get();
        $student=student::with(['studentinternship'=>function($q){
            $q->with('spoc')->with('industry');
        }])->with('interaction')->where('students.id',$student->id)->first();
        //dd($student);
        return view('internship.showstudent',compact('spocs','student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('internship.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        // dd('here');
         
        $student-> usn=$request->usn;
        $student-> name=$request->name;
        $student-> batch=$request->batch;
        $student->save();
            return redirect('/Teaching/internship/student');
       // $ticket->update($request->except('attachment'));
        //if($request->has('status')){
           // $ticket->user->notify(new TicketUpdateNotification($ticket));

        //}
        //$ticket->update($request->validated());
        //return redirect(route('ticket.dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect('/Teaching/internship/student');
    }
}
