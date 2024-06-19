<?php

namespace App\Http\Controllers\HOD\internship;

use App\Models\HOD\internship\industry;
use App\Http\Requests\StoreindustryRequest;
use App\Http\Requests\UpdateindustryRequest;
use App\Http\Controllers\Controller;

class hod_IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //dd('here');
       $industryCount = industry::count();
         $industries=industry::get();
         return view('HOD.internship.industry',compact('industryCount','industries'));
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
    public function store(StoreindustryRequest $request)
    {
        $industry= new industry();
        $industry-> name=$request->name;
        $industry-> location=$request->location;
        $industry-> domain=$request->domain;
 
        $industry->save();
        return redirect('/HOD/internship/industry');
    }

    /**
     * Display the specified resource.
     */
    public function show(industry $industry)
    {
        return view('HOD.internship.showindustry',compact('industry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(industry $industry)
    {
        return view('HOD.internship.edit',compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateindustryRequest $request, industry $industry)
    {
                
        $industry->name=$request->name;
        $industry->location=$request->location;
        $industry->domain=$request->domain;
 
        $industry->save();
        return redirect('/HOD/internship/industry');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(industry $industry)
    {
        $industry->delete();
        return redirect('/HOD/internship/industry');
    }
}