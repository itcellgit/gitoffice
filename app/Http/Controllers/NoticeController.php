<?php

namespace App\Http\Controllers;

use App\Models\notice;
use App\Models\department;
use App\Models\User;
use App\Http\Requests\StorenoticeRequest;
use App\Http\Requests\UpdatenoticeRequest;
use Illuminate\Support\Facades\DB;
use Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dept_notice = notice::with('department')->get();
        //dd($dept_notice);
        $departments = DB::table('departments')->where('status','active')->get();
        $selectedDepartments = range(1, 30);
        return view('Principaloffice.ponotice',compact('dept_notice','departments','selectedDepartments'));
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
    public function store(StorenoticeRequest $request)
    {
       // dd($request);
        $notice=new notice();
        $notice->user_id = Auth::id();
        $notice->title=$request->title;
        $notice->date=$request->date;
        $notice->description=$request->description;
       if($request->staff_type=="Teaching")
        {
            
            $notice->staff_type=$request->staff_type;       
        }
        elseif($request->staff_type=="Non-Teaching")
        {
            $notice->staff_type=$request->staff_type;      
        }
        elseif($request->staff_type=="All")
        {
            $notice->staff_type=$request->staff_type;      
        }
        $notice->save();
        $depart = $request->departments; 
        //dd($depart);
        foreach ($depart as  $d ) {
            $notice->department()->attach($d);
      
        }

       
        $noticeinsertedId= $notice->id;
        if($noticeinsertedId > 0){
            $status = 1;
            return redirect('/Principaloffice/ponotice')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/Principaloffice/ponotice')->with('status', $status);
        }
    }

    

    /**
     * Display the specified resource.
     */
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenoticeRequest $request, notice $notice)
    {
        
           // dd($notice);
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
            return redirect('/Principaloffice/ponotice')->with('status', $status);
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notice $notice)
    {
        
            // Detach and delete associated records
            $notice->department()->detach();
            
            // Delete the notice
            $result = $notice->delete();
        
            // Check if the deletion was successful
            if ($result) {
                $status = 1;
            } else {
                $status = 0;
            }
        
            // Redirect with status message
            return redirect('/Principaloffice/ponotice')->with('status', $status);
    }
    
}
