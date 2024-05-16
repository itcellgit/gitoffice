<?php

namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use App\Models\grade_mapping;
use App\Http\Requests\Storegrade_mappingRequest;
use App\Http\Requests\Updategrade_mappingRequest;

class GradeMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gradeMappings = grade_mapping::get();
        
        // Return the view with the grade mappings
        return view('ESTB.Grading.autonomous_a_grading.autonomous_a_grading', compact(['gradeMappings']));
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
    public function store(Storegrade_mappingRequest $request)
    {
        // dd($request);
        // print_r($request->all());
        $gradeMapping = new grade_mapping();
        $gradeMapping->grade=$request->grade;
        $gradeMapping->allowance_id=$request->allowance_id;
        $gradeMapping->save();

        $GradeId = $gradeMapping->id;

        if($GradeId > 0){
            $status = 1;
            return redirect('ESTB/Grading/autonomous_a_grading')->with('status', $status);
        }else{
            $status = 0;
            return redirect('ESTB/Grading/autonomous_a_grading')->with('status', $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(grade_mapping $grade_mapping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(grade_mapping $grade_mapping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updategrade_mappingRequest $request, grade_mapping $grade_mapping)
    {
        $grade_mapping->grade=$request->grade;
        $grade_mapping->allowance_id=$request->allowance_id;
        $result = $grade_mapping->save();
        $status = $result ? 1 : 0;
        return redirect('ESTB/Grading/autonomous_a_grading')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(grade_mapping $grade_mapping)
    {
        $result =$grade_mapping->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('ESTB/Grading/autonomous_a_grading')->with('status', $status);
    }
}
