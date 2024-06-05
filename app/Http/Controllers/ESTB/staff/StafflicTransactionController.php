<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Models\stafflic_transaction;
use App\Http\Requests\Storestafflic_transactionRequest;
use App\Http\Requests\Updatestafflic_transactionRequest;
use App\Models\staff;
use App\Models\lic;
use App\Models\stafflic;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StafflicTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       $lic=lic::get();
       $stafflic=stafflic::with('lics')->get();
       $stafflic_transaction=stafflic_transaction::with('stafflics')->get();
       //dd($stafflic_transaction);
       return view('/ESTB/staff/stafflic_transactions',compact('stafflic_transaction','lic','stafflic','staff')); 
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
    public function store(Storestafflic_transactionRequest $request,stafflic $stafflic)
    {
        $stafflic_transaction=new stafflic_transaction();
        $stafflic_transaction->stafflic_id=$stafflic->id;
        $stafflic_transaction->lic_id=$lic->id;
        $stafflic->created_at = Carbon::now();
        $stafflic_transaction->save();
        $stafflic_transactioninsertedId = $stafflic_transaction->id;
         if($stafflic_transactioninsertedId){
            $status = 1;
            return redirect('/ESTB/staff/stafflic/'.$stafflic->id)->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/staff/stafflic/'.$stafflic->id)->with('status', $status);
        }
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
