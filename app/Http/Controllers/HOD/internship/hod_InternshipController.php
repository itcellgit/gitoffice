<?php

namespace App\Http\Controllers\HOD\internship;

use App\Models\HOD\internship\internship;
use App\Models\HOD\internship\student;
use App\Models\HOD\internship\industry;
use App\Models\HOD\internship\spoc;
use App\Models\HOD\internship\studentinternship;
use App\Http\Requests\StoreinternshipRequest;
use App\Http\Requests\UpdateinternshipRequest;
use App\Http\Controllers\Controller;

class hod_InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentCount = student::count();
        $industryCount = industry::count();
        $spocCount = spoc::count();
        $studentinternshipCount = studentinternship::count();


        // Pass the counts to the view
        return view('HOD.internship.dashboard', compact('studentCount', 'industryCount','spocCount','studentinternshipCount'));
    
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