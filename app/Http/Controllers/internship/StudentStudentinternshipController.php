<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\student_studentinternship;
use App\Http\Requests\Storestudent_studentinternshipRequest;
use App\Http\Requests\Updatestudent_studentinternshipRequest;
use App\Models\internship\student;
use App\Models\internship\studentinternship;
use App\Http\Controllers\Controller;
use DB;

use App\Models\department;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentStudentinternshipController extends Controller
{
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
        $students=student::where('staff_id', $staff->id)->get();
        
        $studentinternship=studentinternship::where('staff_id', $staff->id)->get();
        //$student_internships=student_studentinternship::with('student','studentinternship')->get();
        $student_internships=student::where('staff_id', $staff->id)->with('studentinternship')->get();
        
        $studentsWithoutInternship = student::whereDoesntHave('student_studentinternship')->where('staff_id', $staff->id)->get();
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
        $studentsWithoutInternship = student::whereDoesntHave('student_studentinternship')->where('staff_id', $staff->id)->get();

    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Storestudent_studentinternshipRequest $request, studentinternship $studentinternship)
    {
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
                $student_studentinternship->department_id = $staff->department_id;
                $student_studentinternship->staff_id = $staff->id; 
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
        $students=student::where('staff_id', $staff->id)->get();
        $spocs=spoc::where('staff_id', $staff->id)->get();

        //dd($students);
        $interaction=$student_studentinternship->spoc()->where('staff_id', $staff->id)->get();
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
