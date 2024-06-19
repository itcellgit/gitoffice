<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\internship;
use App\Models\internship\student;
use App\Models\internship\industry;
use App\Models\internship\spoc;
use App\Models\internship\studentinternship;
use App\Http\Requests\StoreinternshipRequest;
use App\Http\Requests\UpdateinternshipRequest;
use App\Http\Controllers\Controller;

use App\Models\department;
use App\Models\staff;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InternshipController extends Controller
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
            
        $studentCount = student::where('staff_id', $staff->id)->count();
        $industryCount = industry::where('staff_id', $staff->id)->count();
        $spocCount = spoc::where('staff_id', $staff->id)->count();
        $studentinternshipCount = studentinternship::where('staff_id', $staff->id)->count();


        // Pass the counts to the view
        return view('internship.dashboard', compact('studentCount', 'industryCount','spocCount','studentinternshipCount'));
    
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
    public function store(StoreinternshipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(internship $internship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(internship $internship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinternshipRequest $request, internship $internship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(internship $internship)
    {
        //
    }
}