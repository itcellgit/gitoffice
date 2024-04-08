<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use App\Models\department;
class StaffDepartmentController extends Controller
{


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, staff $staff)
    {
        $updateresult=true;
        //fetch all the departments the staff is currently working in
        $rdepartments=$request->departments;
        $staff_departments=$staff->activedepartments;
        if($staff->activedepartments()->first()==null){
            foreach($rdepartments as $rdepts)
            {
                 $insertnew=$staff->departments()->attach($rdepts,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
            }
        }
        else
        {
            // dd($staff_departments);
            //fetch all the departments the staff is assigned in the UI.

            //check if there are changes in currently working and the assigned in the UI
            foreach($staff_departments as $sdept)
            {
                $flag=0;
                foreach($rdepartments as $rdepts)
                {
                    if($sdept->id==$rdepts)
                    {
                        $flag=1;
                    }
                }
                //if flag reamians 0, it means that the staff is no more associated with that department
                //update exisiting entry for that department of the staff
                if($flag==0){
                  //  $updateresult= $staff->departments()->updateExistingPivot($sdept->id,['end_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'closed']);
                    $staff_latest_depts=$staff->activedepartments()->get();
                    foreach($staff_latest_depts as $staff_dept)
                    {
                        if($staff_dept->pivot->department_id==$sdept->id){
                            $staff_dept->pivot->end_date=$request->start_date;
                            $staff_dept->pivot->reason=$request->reason;
                            $staff_dept->pivot->gcr=$request->gcr;
                            $staff_dept->pivot->status='closed';
                            $updateresult=$staff_dept->pivot->update();
                        }
                    }
                }
            }

        }

        //check if any new department is assigned to the staff
        foreach($rdepartments as $rdepts)
        {
            $flag=0;
            foreach($staff->departments as $sdept)
            {
                if($sdept->id==$rdepts)
                {
                    $flag=1;
                }
            }
            //if flag reamians 0, implies that the new department is assigned to the staff
            if($flag==0){
                $insertnew=$staff->departments()->attach($rdepts,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
            }
        }
        if($updateresult || $insertnew)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }

    public function updatecurrent(request $request, staff $staff, $sdept)
    {
        //dd($request);
        if($request->status=="active"){
          //  $updateresult= $staff->departments()->updateExistingPivot($sdept,['end_date'=>null,'status'=>'active']);
            $staff_latest_depts=$staff->activedepartments()->get();
            foreach($staff_latest_depts as $staff_dept)
            {
                if($staff_dept->pivot->department_id==$sdept->id)
                {
                    $staff_dept->pivot->end_date=null;
                    $staff_dept->pivot->status='active';
                    $updateresult=$staff_dept->pivot->update();
                }
            }
        }
        else
        {
            // $updateresult= $staff->departments()->updateExistingPivot($sdept,['department_id'=>$request->departments_id,'start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
             $staff_latest_depts=$staff->activedepartments()->get();

                    foreach($staff_latest_depts as $staff_dept)
                    {

                        if($staff_dept->pivot->department_id==$sdept)
                        {
                            $staff_dept->pivot->department_id=$request->departments_id;
                            $staff_dept->pivot->start_date=$request->start_date;
                            $staff_dept->pivot->reason=$request->reason;
                            $staff_dept->pivot->gcr=$request->gcr;
                            $updateresult=$staff_dept->pivot->update();
                        }
                    }

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
    public function destroy(staff $staff,$dept)
    {

        $delete=DB::table('department_staff')->where('id',$dept)->where('status','active')->delete();

        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }
}