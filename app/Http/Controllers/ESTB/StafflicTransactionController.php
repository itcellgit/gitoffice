<?php

namespace App\Http\Controllers\ESTB;

use App\Models\stafflic_transaction;
use App\Http\Requests\Storestafflic_transactionRequest;
use App\Http\Requests\Updatestafflic_transactionRequest;
use App\Models\staff;
use App\Models\stafflic;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StafflicTransactionController extends Controller
{
    // public function index()
    // {
    //    $lic=lic::get();
    //    $stafflic=stafflic::get();
    //    //dd($stafflic);
    //    $stafflic_transaction=stafflic_transaction::with('stafflics')->get();
    //    //dd($stafflic_transaction);
    //    return view('/ESTB/staff/stafflic_transactions',compact('stafflic_transaction','lic','stafflic','staff')); 
    // }
    public function index()
    {
        $month=request('month');
        $year=request('year');
        $staff=staff::get();
        $stafflic=stafflic::with('staff')->get();
        //dd($stafflic);
        return view('ESTB.salaries.stafflic_transactions.index',compact('staff','stafflic','month','year'));
        
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Storestafflic_transactionRequest $request,stafflic $stafflic)
    // {
    //     $stafflic_transaction=new stafflic_transaction();
    //     $stafflic_transaction->stafflic_id=$stafflic->id;
    //     $stafflic_transaction->lic_id=$lic->id;
    //     $stafflic_transaction->created_at = Carbon::now();
    //     $stafflic_transaction->save();
    //     $stafflic_transactioninsertedId = $stafflic_transaction->id;
    //      if($stafflic_transactioninsertedId){
    //         $status = 1;
    //         return redirect('/ESTB/staff/stafflic/'.$stafflic->id)->with('status', $status);
    //     }else{
    //         $status = 0;
    //         return redirect('/ESTB/staff/stafflic/'.$stafflic->id)->with('status', $status);
    //     }
    // }
    public function store(Storestafflic_transactionRequest $request,stafflic $stafflic)
    {   
        $request->validate([
            'month' => 'required',
            'years' => 'required',
            'dop' => 'required',
        ]);
        $month = $request->input('month');
        $years = $request->input('years');
        $dop=$request->input('dop');
        foreach ($request->input('manual', []) as $stafflic_id => $gst) {
            $lic = new stafflic_transaction();
            $lic->stafflic_id = $stafflic_id;
            $lic->month = $month;
            $lic->years = $years;
            $lic->dop = $dop;
            $lic->gst = $gst['gst'];
            $lic->save();
        }
        return redirect('/ESTB/salaries/stafflic_transactions');
    } 

    /**
     * Display the specified resource.
     */
    public function show(stafflic_transaction $stafflic_transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stafflic_transaction $stafflic_transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatestafflic_transactionRequest $request, stafflic_transaction $stafflic_transaction,stafflic $stafflic)
    {
        $stafflic_transaction->stafflic_id=$stafflic->id;
        $stafflic_transaction->lic_id=$lic->id;
        $stafflic_transaction->month=$request->month;
        $stafflic_transaction->dop=$request->dop;
        if($request->status=='active'){
            $stafflic_transaction->status='active';
        }  
        $result = $stafflic_transaction->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/staff/show/'.$stafflic->id)->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stafflic_transaction $stafflic_transaction)
    {
        //
    }
}
