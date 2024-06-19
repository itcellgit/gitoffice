<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\interaction;
use App\Models\internship\student;
use App\Models\internship\spoc;
use App\Http\Requests\StoreinteractionRequest;
use App\Http\Requests\UpdateinteractionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Models\department;
use App\Models\staff;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteractionController extends Controller
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

        //$interaction=Spoc::get();
        $students=student::where('staff_id', $staff->id)->get();
        $spocs = spoc::where('staff_id', $staff->id)->get();
        $interactions = interaction::where('staff_id', $staff->id)->with(['student','spoc'])->get();
       // dd($studentinternships);
        return view('internship.interaction', compact('students','spocs','interactions'));


        
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
    public function store(StoreinteractionRequest $request,student $student)
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

        $interactions= new interaction();
        $interactions->spoc_id=$request->spoc_id;
        $interactions->idate=$request->idate;
        $interactions->topic=$request->topic;
        $interactions->description=$request->description;
        $interactions->file=$request->file;
        $interactions->type=$request->type;
        $interactions->interaction_with=$request->interaction_with;
        $interactions->student_id=$student->id;
        $interactions->department_id = $staff->department_id;
        $interactions->staff_id = $staff->id; 

        $interactions->save();
        return redirect('/Teaching/internship/student/show/'.$student->id.'');

    }

    /**
     * Display the specified resource.
     */
    public function show(interaction $interaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(interaction $interaction,student $student)
    {
        $spocs = spoc::where('staff_id', $staff->id)->get();
        return view('internship.showstudent', compact('interaction', 'student', 'spocs'));
    }
    // public function edit(interaction $interaction)
    // {
    //     $students=student::get();
       
    //     return view('internship.showstudent',compact('interaction','students'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinteractionRequest $request,student $student,interaction $interaction)
    {
        //dd($interaction);
        
        $interaction->spoc_id=$request->spoc_id;
        $interaction->idate=$request->idate;
        $interaction->topic=$request->topic;
        $interaction->description=$request->description;
        //dd($interaction->file);


        // if ($request->hasFile('file')) {
        //     // Delete the old file if exists
        //     if ($interaction->file) {
        //         Storage::disk('public')->delete($interaction->file);
        //     }
        //     // Store the new file
        //     $interaction->file = $request->file('file')->store('files', 'public');
        // }


        // if ($request->hasFile('file')) {
        //     $interaction->file = $request->file->store('files', 'public');
        // }

        // $interaction->file=$request->file;
        if ($request->hasFile('file')) {
            // Store the file and get the full path
            $path = $request->file('file')->store('files');

            // Update the file path in the timeline record
            $interaction->file = $path;
        }

        $interaction->type=$request->type;
        $interaction->interaction_with=$request->interaction_with;

        $interaction->save();
        return redirect('/Teaching/internship/student/show/'.$student->id.'');
    }

    public function downloadFile($file)
    {
        return Storage::disk('public')->download($file);
    }


   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(interaction $interaction)
    {
        //
    }
}
