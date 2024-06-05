<?php

namespace App\Http\Controllers\ESTB;

use App\Models\lic;
use App\Models\staff;
use App\Models\stafflic;
use App\Http\Requests\StorelicRequest;
use App\Http\Requests\UpdatelicRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class LicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $month=request('month');
        $year=request('year');
        $staff=staff::get();
        $stafflic=stafflic::with('staff')->get();
        return view('ESTB.lics.index',compact('staff','stafflic','month','year'));
        
    }
    public function create()
    {
        //
    }
    // public function store(StorelicRequest $request,staff $staff,stafflic $Sstafflic)
    // {   
      
       
    //     $month=$request->month;
    //     $year=$request->year;
    //     $stafflic=stafflic::where();
    //     $lic=new lic();
    //     $lic->stafflic_id=$stafflic->id;
    //     $lic->created_at = Carbon::now();
    //     $lic->save();
    //     $licinsertedId = $lic->id;
    //     if($licinsertedId > 0){
    //           $status = 1;
    //     return redirect('/ESTB/salaries/lics')->with('status', $status);
    //     }else{
    //           $status = 0;
    //     return redirect('/ESTB/salaries/lics')->with('status', $status);
    //     }
    
    // }
    public function store(StorelicRequest $request)
{   
    // Retrieve month and year from the request
    $month = $request->input('month');
    $year = $request->input('year');
    
    // Find the corresponding stafflic record based on month and year
    $stafflic = stafflic::whereYear('created_at', $year)
                        ->whereMonth('created_at', $month)
                        ->first();
    
    // Check if stafflic record exists
    if($stafflic) {
        // Create new lic record
        $lic = new lic();
        $lic->stafflic_id = $stafflic->id;
        // You can set other attributes of the lic record here
        
        // Save the lic record
        $lic->save();
        
        // Check if lic record was successfully saved
        if($lic->id) {
            // Redirect with success status
            return redirect('/ESTB/salaries/lics')->with('status', 1);
        } else {
            // Redirect with error status
            return redirect('/ESTB/salaries/lics')->with('status', 0);
        }
    } else {
        // Redirect with error status if stafflic record does not exist
        return redirect('/ESTB/salaries/lics')->with('status', 0);
    }
}

    public function show(lic $lic)
    {
        //
    }

    public function edit(lic $lic)
    {
        //
    }

    
    public function update(UpdatelicRequest $request,staff $staff,stafflic $stafflic)
     {
        //dd($lic);
        $lic->staff_id=$request->staff_id;
        $lic->stafflic_id=$stafflic_id;
        $lic->policy_no=$request->policy_no;
        $lic->premium=$request->premium;
        $lic->gst=$request->gst;
        if($request->status=='active'){
            $lic->status='active';
        }  
        $result = $lic->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/salaries/lics')->with('status', $status);
    }
    public function destroy(lic $lic)
    {
        $lic->status='inactive';
        $result = $lic->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/salaries/lics')->with('status', $status);
    }
}
