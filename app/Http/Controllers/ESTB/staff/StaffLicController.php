<?php

namespace App\Http\Controllers\ESTB\staff;
// namespace App\Http\Controllers\ESTB;


use App\Models\stafflic;
use App\Models\staff;
use App\Models\stafflic_transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Requests\StorestafflicRequest;
use App\Http\Requests\UpdatestafflicRequest;
use App\Http\Controllers\ESTB\LicController;

class StaffLicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $staff=staff::get();
        $stafflic=stafflic::get();
        return view('/ESTB/staff',compact('staff','stafflic'));
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
    public function store(StorestafflicRequest $request,staff $staff)
    {
        $stafflic=new stafflic();
        $stafflic->staff_id=$staff->id;
        $stafflic->policy_no=$request->policy_no;
        $stafflic->premium=$request->premium;
        $stafflic->start_date=$request->start_date;
        $stafflic->end_date=$request->end_date;
        $stafflic->created_at = Carbon::now();
        $stafflic->status='active';
        $stafflic->save();
        $stafflicinsertedId = $stafflic->id;
         if($stafflicinsertedId){
            $status = 1;
            return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(stafflic $stafflic)
    {
        //return view('ESTB.staff.showstafflic',compact('stafflic'));
        $stafflic_transaction=stafflic_transaction::get();
        //$stafflic=stafflic::get();
        $stafflic=stafflic::with('stafflic_transactions')->where('id',$stafflic->id)->first();
        return view('ESTB.staff.stafflic_transactions',compact('stafflic_transaction','stafflic'));

        // $staff=staff::get();
        // $stafflic = stafflic::get(); 
        // if ($stafflic) {
        //     $stafflic_transaction = stafflic_transaction::with('stafflics')->where('stafflic_id', $stafflic->id)->first();
    
        //     return view('ESTB.staff.stafflic_transactions', compact('stafflic', 'stafflic_transaction','staff'));
        // } else {
        // }
        
    }
  


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stafflic $stafflic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestafflicRequest $request,staff $staff,stafflic $stafflic)
    {

        $stafflic->policy_no=$request->policy_no;
        $stafflic->premium=$request->premium;
        $stafflic->end_date=$request->end_date;
        $stafflic->status=$request->edittype;
        if($request->status=='active'){
            $stafflic->status='active';
        }  
        $result = $stafflic->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
    }
    
    public function destroy(staff $staff,stafflic $stafflic)
    {
        dd($stafflic);
        $stafflic->status='inactive';
        $result = $stafflic->update();
        // $stafflic=stafflic::where('id',$stafflic)->first();
        // $result=$stafflic->delete();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
    }
}
