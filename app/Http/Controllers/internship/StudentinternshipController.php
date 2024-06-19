<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\studentinternship;
use App\Http\Requests\StorestudentinternshipRequest;
use App\Http\Requests\UpdatestudentinternshipRequest;
use App\Models\internship\spoc;
use App\Models\internship\industry;
use App\Models\internship\student;
use App\Http\Controllers\Controller;

use App\Models\department;
use App\Models\staff;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $user = Auth::user();
        $staff_id = Auth::user()->id;
        $staff = DB::table('staff')->where('user_id', $user->id)->first();
            if ($staff==null) {
                // Handle the case where the staff is not found
                abort(404, 'Staff not found.');
            }
        $studentinternshipCount = studentinternship::where('staff_id', $staff->id)->count();
        $industries = industry::where('staff_id', $staff->id)->get();
        $spocs = spoc::where('staff_id', $staff->id)->get();
        $studentinternships = studentinternship::where('staff_id', $staff->id)->with('industry')->with('spoc')->get();
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
    
        $studentinternships= new studentinternship();
        $studentinternships->title=$request->title;
        $studentinternships->years=$request->years;
        $studentinternships->sdate=$request->sdate;
        $studentinternships->edate=$request->edate;
        $studentinternships-> industry_id=$request->industry_id;
        $studentinternships-> spoc_id=$request->spoc_id;
        $studentinternships->stipend=$request->stipend;
        $studentinternships->department_id = $staff->department_id;
        $studentinternships->staff_id = $staff->id;

 
        $studentinternships->save();
        return redirect('/Teaching/internship/studentinternship');
    }

    /**
     * Display the specified resource.
     */
    public function show(studentinternship $studentinternship)
    {
        $user = Auth::user();
        $staff_id = Auth::user()->id;
        $staff = DB::table('staff')->where('user_id', $user->id)->first();
            if ($staff==null) {
                // Handle the case where the staff is not found
                abort(404, 'Staff not found.');
            }
        $students=student::where('staff_id', $staff->id)->get();
        //dd($students);
        //$studentinternship=studentinternship::with('student')->where('id',$studentinternship->id)->get();



        //$student_studentinternship=$studentinternship->student()->where('staff_id', $staff->id)->get();
        $student_studentinternship = $studentinternship->student()
                                                        ->where('students.staff_id', $staff->id)
                                                        ->get();
        $studentsWithoutInternship = student::whereDoesntHave('student_studentinternship')->where('staff_id', $staff->id)->get();
       
        return view('internship.showinternship',compact(['studentinternship','students','student_studentinternship','studentsWithoutInternship']));
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
        $studentinternship->stipend=$request->stipend;

 
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
