<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\qualification;


class QualificationStaffController extends Controller
{
    public function index()
    {
        return view('/Teaching/qualifications');
    }

    /**
     * Store the staff qualifications
     */
    public function store(Request $request, staff $staff)
    {
        //dd($request);
        $result=$staff->qualifications()->attach($request->qualification_id,['board_university'=>$request->board_university,'grade'=>$request->grade,'yop'=>$request->yop,'status'=>$request->status]);

        // dd($result);
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',1);
        
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, staff $staff,$squal)
    {
        $updateresult=true;
            //   dd($squal);
         //check if there are changes in currently working and the assigned in the UI
         //update exisiting entry of the staff qualification
         $updateresult= $staff->qualifications()->updateExistingPivot($squal,['yop'=>$request->yop,'board_university'=>$request->board_university,'grade'=>$request->grade,'status'=>$request->status]);
         if($updateresult)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }

    public function updatecurrent(request $request, staff $staff, $squal)
    {
        // dd($request);
        if($request->status){
            $updateresult= $staff->qualifications()->updateExistingPivot($squal,['status'=>$request->status]);
        }
        else
        {
             $updateresult= $staff->qualifications()->updateExistingPivot($squal,['qualification_id'=>$request->qualifications_id,'board_university'=>$request->board_university]);
        }
       
        if($updateresult)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }
    
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff,$qual)
    {
        $delete=$staff->qualifications()->detach($qual);
        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }
}
