<?php

namespace App\Http\Controllers\ESTB;

use App\Models\salary_head;
use App\Models\salary_group;
use App\Models\payscale;
use App\Http\Requests\Storesalary_headRequest;
use App\Http\Requests\Updatesalary_headRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalaryHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $salary_groups=salary_group::get();
         $salary_heads_bg = salary_head::where('title','like','%basic%')->orWhere('title','like','%gross%')->orderby('title')->get(); 
      //  dd($salary_heads_bg);
         $salary_heads = Salary_head::with('salaryGroup')->with('salary_head_on')->get();     
         //dd($salary_heads);
         return view('ESTB.salaries.salaryheads.index',compact('salary_heads','salary_groups','salary_heads_bg'));
      }

  
    public function create()
    {
        return view('ESTB.salaries.salaryheads.index');
    }

   
    public function store(Storesalary_headRequest $request)
    {
       //dd($request);
        $salary_heads=new salary_head();
        $salary_heads->title=$request->title;
        $salary_heads->salary_group_id=$request->salary_group_id;
        $salary_heads->salary_type=$request->salary_type;
        if($request->salary_type=="percentage")
        {
            $salary_heads->ptype=$request->ptype;
        }
        $salary_heads->maximum=$request->maximum;
        $salary_heads->created_at = Carbon::now();
        $salary_heads->status='active';
        $salary_heads->save();
        $salary_headsinsertedId = $salary_heads->id;


       //dd($insertedId);
       if($salary_headsinsertedId > 0){
           $status = 1;
           return redirect('/ESTB/salaries/salaryheads')->with('status', $status);
       }else{
           $status = 0;
           return redirect('/ESTB/salaries/salaryheads')->with('status', $status);
       }
    }

    
    public function show(salary_head $salary_heads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(salary_head $salary_heads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatesalary_headRequest $request, salary_head $salary_heads)
    {
       // dd($request);
        $salary_heads->title=$request->edit_title;
        $salary_heads->salary_group_id=$request->salary_group_id;
        $salary_heads->salary_type=$request->edittype;
        if($request->edittype=="percentage")
        {
            $salary_heads->ptype=$request->edit_ptypee;
        }
        $salary_heads->maximum=$request->edit_maximum;
       
        if($request->status=='active'){
            $salary_heads->status='active';
        }  
        $result = $salary_heads->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/salaries/salaryheads')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(salary_head $salary_heads)
    {
        $salary_heads->status='inactive';
        $result = $salary_heads->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/salaries/salaryheads')->with('status', $status);
    }
}
