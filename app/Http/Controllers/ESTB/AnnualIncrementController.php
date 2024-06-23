<?php

namespace App\Http\Controllers\ESTB;

use App\Models\annual_increment;
use App\Http\Requests\Storeannual_incrementRequest;
use App\Http\Requests\Updateannual_incrementRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Support\Carbon;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AnnualIncrementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storeannual_incrementRequest $request ,staff $staff)
    {
        $annualIncrement=new annual_increment();
        $annualIncrement->staff_id=$staff->id;
        $annualIncrement->wef=$request->wef;
        $annualIncrement->additional_days=$request->additional_days;
        $annualIncrement->gc=$request->gc;
        $annualIncrement->reason=$request->reason;
        $annualIncrement->basic=$request->basic;
        $annualIncrement->additional_days_type=$request->additional_days_type;
        $annualIncrement->created_at=Carbon::now()->format('Y-m-d');
        //dd($staff->date_of_increment);
        if($annualIncrement->additional_days_type=="Permanent")
        {
             $date_of_next_increment=Carbon::parse($staff->date_of_increment)->addDays(365+inval($request->additional_days))->format('Y-m-d');
        }
        else
        {
            $date_of_next_increment=Carbon::parse($staff->date_of_increment)->addDays(intval($request->additional_days))->format('Y-m-d');
        }
        //dd($date_of_next_increment);
        $staff->date_of_increment = $date_of_next_increment;
       // $staff->update();
        $annualIncrement->created_at=carbon::now()->format('Y-m-d');
        dd($annualIncrement->created_at);
        $annualIncrement->save();
        return redirect('/ESTB/staff/show/'.$staff->id);

}

/**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    public function edit(annual_increment $annual_increment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Updateannual_incrementRequest $request,staff $staff,  annual_increment $annualIncrement)
    {
        $annualIncrement->staff_id=$staff->id;
        $annualIncrement->wef=$request->wef;
        $annualIncrement->additional_days=$request->additional_days;
        $annualIncrement->gc=$request->gc;
        $annualIncrement->reason=$request->reason;
        $annualIncrement->basic=$request->basic;
        $result=$annualIncrement->update();
       return redirect('/ESTB/staff/show/'.$staff->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff,$annualincrement)
    {
        $annualIncrement=annual_increment::where('id',$annualincrement)->first();
   // dd($festivaladvance);
    $result=$annualIncrement->delete();
    // $festivaladvance->staff()->detach($staff_id);
  //dd($result);

  if($result)
 {
     $status=1;
 }
 else
 {
     $status=0;
 }
     // Redirect to the staff show page
     return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
 }



 }
