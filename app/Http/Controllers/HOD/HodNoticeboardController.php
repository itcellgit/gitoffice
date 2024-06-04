<?php

namespace App\Http\Controllers\HOD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\users;
use App\Models\notice;
use App\Models\User;
use App\Models\department;
use App\Http\Requests\StorenoticeRequest;
use App\Http\Requests\UpdatenoticeRequest;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class HodNoticeboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        $department_id = Session::get('deptid');
        
        // Fetch events only for the specific department
        $dept_notice= notice::with('department')
        
            ->whereHas('department', function ($query) use ($department_id) {
                $query->where('departments.id', $department_id);
            })
           
            ->get();
           //dd($dept_notice);
           
    
        $departments = DB::table('departments')->where('status', 'active')->get();

       
        return view('HOD.notice', compact('dept_notice', 'departments', 'user', 'department_id'));
    
    }
    public function store(StorenoticeRequest $request)
    {
        
        //dd($request);
        $department_id=Session ::get('deptid');
        $hodnotice=new notice();
        $hodnotice->user_id = Auth::id();
        $hodnotice->title=$request->title;
        $hodnotice->date=$request->date;
        $hodnotice->description=$request->description;
        
      
        if($request->staff_type=="Teaching")
        {
            
            $hodnotice->staff_type=$request->staff_type;       
        }
        elseif($request->staff_type=="Non-Teaching")
        {
            $hodnotice->staff_type=$request->staff_type;      
        }
        elseif($request->staff_type=="All")
        {
            $hodnotice->staff_type=$request->staff_type;      
        }
        $hodnotice->save();
        $depart = $request->departments; 
        //dd($depart);
        foreach ($depart as  $d ) {
            $hodnotice->department()->attach($d);
           //dd($event);
        }

       // $eventresult=$event->department()->attach($request->department_id);
        $HodnoticeinsertedId = $hodnotice->id;
        if($HodnoticeinsertedId > 0){
            $status = 1;
            return redirect('/HOD/notice')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/HOD/notice')->with('status', $status);
        }
       
        
    }
    public function update(UpdatenoticeRequest $request, notice $notice)
    {
        //dd($request);
        $notice->title=$request->e_title;
        $notice->date=$request->e_date;
        $notice->description=$request->e_description;
        $notice->staff_type=$request->e_staff_type;  
        $result = $notice->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/HOD/notice')->with('status', $status);
  
    }
    public function destroy(notice $notice)
    {
        // Detach and delete associated records
        $notice->department()->detach();
        
        // Delete the event
        $result = $notice->delete();
    
        // Check if the deletion was successful
        if ($result) {
            $status = 1;
        } else {
            $status = 0;
        }
    
        // Redirect with status message
        return redirect('/HOD/notice')->with('status', $status);
    }
}
