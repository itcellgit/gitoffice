<?php

namespace App\Http\Controllers\NonTeaching;


use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\user;
use App\Models\event;
use Appp\Models\notice;
use App\Enums\UserRoles;
use Illuminate\Http\Request;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\department;
use App\Models\designation;
use App\Models\ntpayscales;
use App\Models\ntcpayscales;
use App\Models\users;
use App\Models\qualification;
use App\Models\notifications;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_conducted;
use Hash;
use Session;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class NonTeachingController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        //$notifications = notifications::where('user_id', $user->id)->get();
        //dd($notifications);
      

        return view('Staff.Non-Teaching.construction');
    }

    public function dashboard(Request $request,staff $staff)
    {
        $user = Auth::user();
        //count of professional activity attended &conducted
        $staff=staff::with('professional_activity_attendee')->with('professional_activity_conducted')->with('activedepartments')->where('user_id','=',$user->id)->first();
        $dept_id=array();

        //$notifications = notifications::where('user_id', $user->id)->get();
        $notifications = notifications::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->get();

        Session::put('notifications', $notifications);

      

        //dd($notifications);
      
        foreach($staff->activedepartments as $depts)
        {
            array_push( $dept_id,$depts->id);
        }
        $ntactivityattendedCount = $staff->professional_activity_attendee->count();
        $ntactivityconductedCount = $staff->professional_activity_conducted->count();

        //count of  department
        $deptcount=staff::with('departments')->where('user_id','=',$user->id)->first();
        $dept = $deptcount->departments->count();


        //Event information for if staff type is All
        $departmentevent = DB::table('events')
        ->join('department_event', 'department_event.event_id', '=', 'events.id')
        ->join('department_staff', 'department_staff.department_id', '=', 'department_event.department_id')
        ->whereIn('department_event.department_id', $dept_id)
        ->where(function ($query) use ($user) {
            $query->where('staff_type', '=', $user->role)
                ->orWhere('staff_type', '=', 'all');
        })
        ->select('events.*')->distinct()
        ->get();

        //notice
        $departmentnotice = DB::table('notices')
        ->join('department_notice', 'department_notice.notice_id', '=', 'notices.id')
        ->join('department_staff', 'department_staff.department_id', '=', 'department_notice.department_id')
        ->whereIn('department_notice.department_id', $dept_id)
        ->where(function ($query) use ($user) {
            $query->where('staff_type', '=', $user->role)
                ->orWhere('staff_type', '=', 'all');
        })
        ->select('notices.*')->distinct()
        ->get();

        return view('Staff.Non-Teaching.dashboard',compact(['staff','ntactivityattendedCount','ntactivityconductedCount','dept','departmentevent','departmentnotice','notifications']));
    }

    public function departments(Request $request)
    {
        $user = Auth::user();

        $staff=staff::with('departments')->where('user_id','=',$user->id)->get();
        $notifications = notifications::where('user_id', $user->id)->get();

        return view('Staff.Non-Teaching.departments',compact('staff','notifications'));

    }
    public function designations()
    {

         $user = Auth::user();

        $staff=staff::with('designations')->with('teaching_payscale')->with('consolidated_teaching_pay')->with('fixed_nt_pay')->with('ntpayscale') ->with('ntcpayscale')->where('user_id','=',$user->id)->first();
        $notifications = notifications::where('user_id', $user->id)->get();
        return view('Staff.Non-Teaching.designations',compact('staff','notifications'));

     }
     public function associations(Request $request)
     {
        $user = Auth::user();
        $staff=staff::with('associations')->where('user_id','=',$user->id)->get();
        $notifications = notifications::where('user_id', $user->id)->get();

        return view('Staff.Non-Teaching.associations',compact('staff','notifications'));

    }
    public function professional_activity_attendee(Request $request)
    {
        $user = Auth::user();
        $staff=staff::with('professional_activity_attendee')->with('professional_activity_conducted')->where('user_id','=',$user->id)->first();

        $notifications = notifications::where('user_id', $user->id)->get();
        return view('Staff.Non-Teaching.professional_activity',compact(['staff','notifications']));
    }





    public function update_staff_information(  $staff)
    {

        //dd($staff);
        $user = Auth::user();
        $staff=staff::where('staff.id',$staff)->first();
        $religions =religion::where('status','active')->get();
        $notifications = notifications::where('user_id', $user->id)->get();
        $castecategories=DB::table('castecategories')->where('status','active')->get();

        $confirmation=$staff->confirmationAssociation()->first();
        $confirmationdate=null;
        if($confirmation!=null)
        {
                $confirmationdate=$confirmation->pivot->start_date;
        }

        //dd($staff);
        return view('Staff.Non-Teaching.ntupdateprofile',compact(['staff','user','religions','castecategories','confirmationdate','notifications']));


    }


    //code for update the staff personal information
    public function update(Request $request, staff $staff)
    {

        //dd($request);
        $user = Auth::user();
        $staff= staff::where('user_id',$user->id)->first();
        $staff->fname=$request->fname;
        $staff->mname=$request->mname;
        $staff->lname=$request->lname;
        //$staff->email = $request->email;
        $staff->local_address=$request->local_address;
        $staff->permanent_address=$request->permanent_address;
        $staff->religion_id=$request->religion_id;
        $staff->castecategory_id=$request->castecategory_id;
        $staff->gender=$request->gender;
        $staff->dob=$request->dob;
        $staff->doj=$request->doj;
        $staff->date_of_increment=$request->date_of_increment;
        //$staff->date_of_superanuation=$request->date_of_superanuation;
        $staff->bloodgroup=$request->bloodgroup;
        $staff->pan_card=$request->pan_card;
        $staff->adhar_card=$request->adhar_card;
        $staff->contactno=$request->contactno;
        $staff->emergency_no=$request->emergency_no;
        $staff->emergency_name=$request->emergency_name;
        $staff->vtu_id=$request->vtu_id;
        $staff->aicte_id=$request->aicte_id;
        
        $staff->esi_no=$request->esi_no;
        $staff->un_no=$request->un_no;
        $staff->date_of_confirmation=$request->date_of_confirmation;

        $sresult=$staff->update();
        $staff->latest_employee_type()->first();


        if($sresult){
            $status = 1;
        }else{
            $status = 0;
        }


        //check if designation has changed
        // return redirect('/Staff/Non-Teaching/ntupdateprofile/'.$staff->id)->with('status',$status);

        return redirect('/Staff/Non-Teaching/ntupdateprofile')->with('status',$status);

    }





    //file upload in non-teaching profile

    // public function update(Request $request, $id)
    // {

    //     //dd($request);
    //     $user = Auth::user();
    //     //$staff= staff::where('user_id',$user->id)->first();
    //     $staff = staff::find($id);
    //     if ($staff) {
    //         $staff->fname=$request->fname;
    //         $staff->mname=$request->mname;
    //         $staff->lname=$request->lname;
    //         //$staff->email = $request->email;
    //         $staff->local_address=$request->local_address;
    //         $staff->permanent_address=$request->permanent_address;
    //         $staff->religion_id=$request->religion_id;
    //         $staff->castecategory_id=$request->castecategory_id;
    //         $staff->gender=$request->gender;
    //         $staff->dob=$request->dob;
    //         $staff->doj=$request->doj;
    //         $staff->date_of_increment=$request->date_of_increment;
    //         //$staff->date_of_superanuation=$request->date_of_superanuation;
    //         $staff->bloodgroup=$request->bloodgroup;
    //         $staff->pan_card=$request->pan_card;
    //         $staff->adhar_card=$request->adhar_card;
    //         $staff->contactno=$request->contactno;
    //         $staff->emergency_no=$request->emergency_no;
    //         $staff->emergency_name=$request->emergency_name;
    //         $staff->vtu_id=$request->vtu_id;
    //         $staff->aicte_id=$request->aicte_id;
            
    //         $staff->esi_no=$request->esi_no;
    //         $staff->un_no=$request->un_no;
    //         $staff->date_of_confirmation=$request->date_of_confirmation;

    //         $file = $request->file("document");
    //         $file_size_status = 0; // define $file_size_status here
    //         $file_upload_status = 0;
        

    //         if ($file) {
    //             $file_size = $file->getSize();

    //             if ($file_size <= 500000) {
    //                 $file_size_status = 1;
    //                 $filename = time() . '.' . $file->getClientOriginalExtension();
    //                 $file->storeAs('public/uploads/', $filename);
    //                 $staff->document = $filename;
    //                 $file_upload_status = 1;
    //             } else {
    //                 //dd( "Failed to upload file due to size limit");
    //                 $file_upload_status = 0;
    //             }
    //         } else {
    //             //dd( "No file selected");
    //             $file_upload_status = 0;
    //         }

    //         if ($file_upload_status && $file_size_status) {
    //             $status = 1;
    //         } else {
    //             $status = 0;
    //         }

    //         $return_data = [
    //             'status' => $status,
    //             'file_size_status' => $file_size_status
    //         ];

    //         $sresult = $staff->update();
    //         $staff->latest_employee_type()->first();

    //         if ($sresult) {
    //             $status = 1;
    //         } else {
    //             $status = 0;
    //         }

    //         //check if designation has changed
    //         return redirect('/Staff/Non-Teaching/ntupdateprofile/' . $staff->id)->with('status', $status);
    //     } else {
    //         return redirect()->back()->with('error', 'Staff not found');
    //     }
    // }

    



    //staff qualification 
    public function qualifications(){

        $user = Auth::user();
        $qualifications =qualification::where('status','active')->get();
        
        $staff=staff::with('qualifications')->where('user_id','=',$user->id)->get();
        $notifications = notifications::where('user_id', $user->id)->get();
        return view('Staff.Non-Teaching.ntqualification',compact('staff','qualifications','notifications'));

    }

  
    

    public function store(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();
    
        // Attach qualifications to the authenticated user's staff
        $result = $user->staff->qualifications()->attach($request->qualification_id, [
            //'qualification_name' => $request->qualification_name,
            'board_university' => $request->board_university,
            'grade' => $request->grade,
            'yop' => $request->yop,
            'status' =>$request->status,
           
        ]);
    
        // Redirect back with success message
        return redirect('/Non-Teaching/ntqualification')->with('status', 'Qualifications added successfully.');
    }
    
   

    /**
     * Update the specified resource in storage.
     */
    
    public function update_qualification(Request $request, staff $staff,$squal)
    {
        //dd($request);
        $user = Auth::user();
        $staff= staff::where('user_id',$user->id)->first();
        //$updateresult=true;
        //dd($squal);
        $staff_qual=staff::with(['qualifications'=>function($q)use($squal){
            $q->where('qualifications.id',$squal);
        }])->where('staff.id',$staff->id)->first();
        $qualification=$staff_qual->qualifications->first();
        $qualification->pivot->qualification_id=$request->qualification_name;
        $qualification->pivot->status=$request->status;
        $qualification->pivot->yop=$request->yop;
        $qualification->pivot->board_university=$request->board_university;
        $qualification->pivot->grade=$request->grade;
        $updateresult=$qualification->pivot->update();

        if($updateresult)
        {
            //dd('success');
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/Non-Teaching/ntqualification/')->with('status',$status);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff,$qual)
    {
        $user = Auth::user();
        $staff= staff::where('user_id',$user->id)->first();
        $delete=$staff->qualifications()->detach($qual);
        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/Non-Teaching/ntqualification/')->with('status',$status);
    }

    // public function fetch_Notifications($userId)
    // {
    //     $user = Auth::user();
    //     $notifications = notifications::where('user_id', $user->id)->get();
    //     dd($notifications);
    //     return view('/layouts.components.staff.nt_teaching_staff_header', compact('notifications'));
    // }
   

}
