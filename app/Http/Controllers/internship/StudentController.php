<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\student;
use App\Models\internship\spoc;
use App\Models\department;
use App\Models\staff;
//use App\Models\department_staff;


use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    

    public function filter(Request $request)
    {
        $user = Auth::user();
        $staff = staff::where('user_id',$user->id)->first();
        //dd($request);
        $batch = $request->input('batch');
        $students = student::where('batch', $batch)
            ->where('staff_id', $staff->id)
            ->with('department')
            ->get();
       // dd($batch);

        
            return response()->json(['students' => $students]);

            return redirect('/Teaching/internship/student');
    
       // return view('internship.index', compact('students', 'batch','staff_id'));
    }



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
        $user = Auth::user();
        $staff_id = Auth::user()->id;
            $staff = DB::table('staff')->where('user_id', $user->id)->first();
            if ($staff==null) {
                // Handle the case where the staff is not found
                abort(404, 'Staff not found.');
            }
            
            $students = student::where('staff_id', $staff->id)->with('interaction')->with('department')->get();
            $studentCount = $students->count();
            $spocs = spoc::get();
            return view('internship.index', compact('studentCount', 'students', 'spocs', 'staff_id'));
       
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
       // dd($request);
        $user=Auth::user();
        //dd($user);
        $staff = DB::table('staff')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->where('department_staff.status','active')
                        ->whereNotIn('department_staff.department_id',function($q){
                            $q->select('department_id')
                                ->from('department_staff as ds')
                                ->where('ds.staff_id','staff.id')
                                ->where('ds.status','active')
                                ->whereNotExists(function($query) {
                                $query->select(DB::raw(1))
                                    ->from('designation_staff as dsg')
                                    ->whereColumn('dsg.dept_id', 'ds.department_id')
                                    ->where('dsg.staff_id', 'staff.id')
                                    ->whereNotNull('dsg.dept_id')
                                    ->where('dsg.status', 'active');
                            }) ->pluck('ds.department_id');;
                        })
                        ->where('user_id', $user->id)
                        ->select('staff.id as id','department_id')
                        ->first();

       // dd($staff);
    
        if ($staff==null || !isset($staff->department_id)) {
            //dd(99);
        // Handle the case where the staff or department_id is not found
        abort(404, 'Staff or department not found.');
        }
        $student= new student();
        $student-> usn=$request->usn;
        $student-> name=$request->name;
        $student-> batch=$request->batch;
        $student->department_id = $staff->department_id;
        $student->staff_id = $staff->id; 

        //$student-> department_id=$staff_dept->department_id;
       // $staff = Auth::user();
        $student->save();
       // dd($student);
        return redirect('/Teaching/internship/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        // $spocs=spoc::get();
        // $student=student::with(['studentinternship'=>function($q){
        //     $q->with('spoc')->with('industry');
        // }])->with('interaction')->where('students.id',$student->id)->first();
        // //dd($student);
        // return view('internship.showstudent',compact('spocs','student'));

        $user= Auth::user();
        $staff= DB::table('staff')->where('user_id', $user->id)->first();
    
        // if ($student->staff_id !== $staffData->id) {
        //     abort(403, 'Unauthorized action.');
        // }
        if (!$staff || $student->staff_id !== $staff->id) {
            abort(403, 'Unauthorized action.');
        }
    
        $spocs = spoc::get();
        $student = student::with(['studentinternship' => function ($q) {
            $q->with('spoc')->with('industry');
        }])->with('interaction')->where('students.id', $student->id)->first();
    
        return view('internship.showstudent', compact('spocs', 'student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        $departments = department::select('id', 'dept_name')->get();
        return view('internship.edit', compact('student', 'departments'));
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
