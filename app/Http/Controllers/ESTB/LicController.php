<?php

namespace App\Http\Controllers\ESTB;

use App\Models\lic;
use App\Models\staff;
use App\Models\stafflic;
use App\Http\Requests\StorelicRequest;
use App\Http\Requests\UpdatelicRequest;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request; 
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
    // public function store(StorelicRequest $request, stafflic $stafflic)
    // {   
    //    // dd($request);
    //     $month = $request->input('month');
    //     $year = $request->input('year');
    //     $gst = $request->input('manual');
    //     $stafflic = stafflic::whereYear('created_at', $year)
    //                     ->whereMonth('created_at', $month)
    //                     ->first();
    //     if($stafflic) {
    //         $lic = new lic();
    //         $lic->stafflic_id = $stafflic->id;
    //         $lic->policy_no = $stafflic->policy_no;
    //         $lic->premium = $stafflic->premium;
    //         $lic->status = $stafflic->status;
    //         $lic->created_at = Carbon::now();
    //         $lic->save();
    //         if($lic->id) {
    //             return redirect('/ESTB/salaries/lics')->with('status', 1);
    //         } else {
    //             return redirect('/ESTB/salaries/lics')->with('status', 0);
    //         }
    //     } else {
    //         return redirect('/ESTB/salaries/lics')->with('status', 0);
    //     }
    // }
    
    public function store(Request $request)
    {   
        $request->validate([
            'month' => 'required',
            'yearr' => 'required',
        ]);
        $month = $request->input('month');
        $yearr = $request->input('yearr');
        foreach ($request->input('manual', []) as $stafflic_id => $gst) {
            $lic = new lic();
            $lic->stafflic_id = $stafflic_id;
            $lic->month = $month;
            $lic->yearr = $yearr;
            $lic->gst = $gst['gst'];
            $lic->save();
        }
        return redirect('/ESTB/salaries/lics');
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
