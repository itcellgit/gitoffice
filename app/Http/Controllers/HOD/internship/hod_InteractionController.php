<?php

namespace App\Http\Controllers\HOD\internship;

use App\Models\HOD\internship\interaction;
use App\Models\HOD\internship\student;
use App\Models\HOD\internship\spoc;
use App\Http\Requests\StoreinteractionRequest;
use App\Http\Requests\UpdateinteractionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class hod_InteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$interaction=Spoc::get();
        $students=student::get();
        $spocs = spoc::get();
        $interactions = interaction::with(['student','spoc'])->get();
       // dd($studentinternships);
        return view('HOD.internship.interaction', compact('students','spocs','interactions'));


        
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
        $interactions= new interaction();
        $interactions->spoc_id=$request->spoc_id;
        $interactions->idate=$request->idate;
        $interactions->topic=$request->topic;
        $interactions->description=$request->description;
        $interactions->file=$request->file;
        $interactions->type=$request->type;
        $interactions->interaction_with=$request->interaction_with;
        $interactions->student_id=$student->id;

        $interactions->save();
        return redirect('/HOD/internship/student/show/'.$student->id.'');

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
        $spocs = spoc::get();
        return view('HOD.internship.showstudent', compact('interaction', 'student', 'spocs'));
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
        return redirect('/HOD/internship/student/show/'.$student->id.'');
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
