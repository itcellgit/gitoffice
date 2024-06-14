<?php

namespace App\Http\Controllers\HOD\internship;

use App\Models\HOD\internship\student;
use App\Models\HOD\internship\spoc;
use App\Models\department;
//use App\Models\department_staff;


use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Http\Controllers\Controller;
use DB;

class hod_StudentController extends Controller
{

    // public function index()
    // {
    //     // Get the authenticated staff member
    //     $staff = Auth::user();
        

    //     // Fetch the department_staff_id of the logged-in staff
    //     //$departmentstaff = department_staff::where('staff_id', $staff->id)->first();

    //     // Fetch students belonging to the same department_staff
    //     $students = Student::where('department_staff_id', $departmentstaff->id)->with('interaction')->get();

    //     // Fetch departments and spocs
    //     $departments = department::select('id', 'dept_name')->get();
    //     $spocs = spoc::get();

    //     // Student count
    //     $studentCount = $students->count();

    //     // Return the view with the students data
    //     return view('internship.index', compact('departments', 'studentCount', 'students', 'spocs'));
    // }
    /**
     * Display a listing of the resource.
     */
     public function index()
     {
        // dd('here');
        $staff = Auth::user();
       $departments = department::select('id','dept_name')->get();
    
        $studentCount = student::count();
        $students=student::with('interaction')->get();
        // dd($students);
        $spocs=spoc::get();
         return view('HOD.internship.index',compact('departments','studentCount','students','spocs'));
       
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
        $user=Auth::user();
        $staff_dept=DB::table('department_staff')
                    ->where('staff_id',function($q)use($user){
                        $q->select('id')
                        ->from('staff')
                        ->where('user_id',$user->id);
                    })
                    ->select('department_id')
                    ->first();
        $student= new student();
        $student-> usn=$request->usn;
        $student-> name=$request->name;
        $student-> batch=$request->batch;

        $student-> department_id=$staff_dept->department_id;
        // Set the department based on the logged-in staff
        $staff = Auth::user();
        //$departmentstaff = department_staff::where('staff_id', $staff->id)->first();
        //$student->department_staff_id = $departmentstaff->id;
       // $student->department_id = $staff->department_id;
        $student->save();
        return redirect('/HOD/internship/student');
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
        return view('HOD.internship.showstudent',compact('spocs','student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        $departments = department::select('id', 'dept_name')->get();
        return view('HOD.internship.edit', compact('student', 'departments'));
        //return view('internship.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        // dd('here');
        //$departments = department::all();
         
        $student-> usn=$request->usn;
        $student-> name=$request->name;
        $student-> batch=$request->batch;
        //$student-> department_id=$request->department_id;
        $student->save();
        return redirect('/HOD/internship/student');
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
        return redirect('/HOD/internship/student');
    }
}
