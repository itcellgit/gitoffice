<?php

namespace App\Http\Controllers\Dean_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\leave;
use App\Models\staff;
use Illuminate\Support\Carbon;
use App\Models\holidayrh;
use App\Http\Controllers\ScheduledJobs;
use App\Models\leave_staff_applications;

use App\Models\designation;
use App\Models\department;
use App\Models\employee_type;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\teaching_payscale;
use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Models\consolidated_teaching_pay;
use App\Models\users;
use App\Models\fixed_nt_pay;
use Session;
use Hash;
use Auth;

class StaffQualificationController extends Controller
{
    //
    public function index()
    {
        return view('/Teaching/qualifications');
    }

    public function store(Request $request, staff $staff)
    {
        //dd($request);
        $result=$staff->qualifications()->attach($request->qualification_id,['board_university'=>$request->board_university,'grade'=>$request->grade,'yop'=>$request->yop,'status'=>$request->status]);

        // dd($result);
        return redirect('/Dean_admin/staff/staffview/'.$staff->id)->with('status',1);
        
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
        return redirect('/Dean_admin/staff/staffview/'.$staff->id)->with('status',$status);
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
        return redirect('/Dean_admin/staff/staffview/'.$staff->id)->with('status',$status);
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
        return redirect('/Dean_admin/staff/staffview/'.$staff->id)->with('status',$status);
    }
}
