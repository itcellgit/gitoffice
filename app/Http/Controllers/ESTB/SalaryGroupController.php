<?php

namespace App\Http\Controllers\ESTB;

use App\Models\salary_group;
use App\Http\Requests\Storesalary_groupRequest;
use App\Http\Requests\Updatesalary_groupRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalaryGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $salary_groups = salary_group::orderBy('group_name')->get();
         return view('ESTB.salaries.salarygroups.index',compact('salary_groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ESTB.salaries.salarygroups.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storesalary_groupRequest $request)
    {
       $salary_groups=new salary_group();
       $salary_groups->group_name=$request->group_name;
       $salary_groups->created_at = Carbon::now();
       $salary_groups->status='active';
       $salary_groups->save();
       $salary_groupsinsertedId = $salary_groups->id;

       //dd($insertedId);
       if($salary_groupsinsertedId > 0){
           $status = 1;
           return redirect('/ESTB/salaries/salarygroups')->with('status', $status);
       }else{
           $status = 0;
           return redirect('/ESTB/salaries/salarygroups')->with('status', $status);
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(salary_group $salary_groups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(salary_group $salary_groups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatesalary_groupRequest $request, salary_group $salary_groups)
    {
        //dd($payscales);
        $salary_groups->group_name=$request->edit_groupname;
       
       
        if($request->status=='active'){
            $salary_groups->status='active';
        }  
        $result = $salary_groups->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/salaries/salarygroups')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(salary_group $salary_groups)
    {
         //dd($payscales);
         $salary_groups->status='inactive';
         $result = $salary_groups->update();
         if($result){
             $status = 1;
         }else{
             $status = 0;
         }
         return redirect('/ESTB/salaries/salarygroups')->with('status', $status);
    }
}
