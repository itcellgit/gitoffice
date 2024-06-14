<?php

namespace App\Http\Controllers\HOD\internship;

use App\Models\HOD\internship\spoc;
use App\Models\HOD\internship\industry;
use App\Http\Requests\StorespocRequest;
use App\Http\Requests\UpdatespocRequest;
use App\Http\Controllers\Controller;


class hod_SpocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //dd('here');
       $spocCount = spoc::count();
       $spocs = spoc::with('industry')->get();
       //dd($spocs);
       $industries = industry::select('id','name')->get();
       return view('HOD.internship.spoc', compact('spocCount','spocs','industries'));
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
    public function store(StorespocRequest $request)
    {
    
       $spocs= new spoc();
       $spocs-> industry_id=$request->industry_id;
        $spocs-> name=$request->name;
        $spocs-> phone=$request->phone;
        $spocs-> email=$request->email;
        $spocs-> designation=$request->designation;
        $spocs-> department=$request->department;
 
        $spocs->save();
        return redirect('/HOD/internship/spoc');
    }

    /**
     * Display the specified resource.
     */
    public function show(spoc $spoc)
    {
        return view('HOD.internship.showspoc',compact('spoc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(spoc $spoc)
    {
        return view('HOD.internship.edit',compact('spoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatespocRequest $request, spoc $spoc)
    {
       // dd($spoc);
        $spoc->industry_id=$request->industry_id;
        $spoc->name=$request->name;
        $spoc->phone=$request->phone;
        $spoc->email=$request->email;
        $spoc->designation=$request->designation;
        $spoc->department=$request->department;
 
        $spoc->save();
        return redirect('/HOD/internship/spoc');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spoc $spoc)
    {
        $spoc->delete();
        return redirect('/HOD/internship/spoc');
    }
}
