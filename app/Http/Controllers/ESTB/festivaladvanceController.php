<?php

namespace App\Http\Controllers\ESTB;

use App\Http\Requests\StoreFestivalAdvanceRequest;
use App\Http\Requests\UpdateFestivalAdvanceRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Support\Carbon;
use illuminate\Support\Facades\DB;
use App\Models\festival_advance;
use Illuminate\Support\Facades\Session;
//use Auth;

class festivaladvanceController extends Controller
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
    public function store(StoreFestivalAdvanceRequest $request, staff $staff)
    {
        //dd($staff);
        //dd($request);
       // $user=Auth::user();
        //$staff=staff::where('user_id','=',$user->id)->first();
        $festivalAdvance=new festival_advance();
        $festivalAdvance->staff_id=$staff->id;
        $festivalAdvance->date_of_application=$request->date_of_application;
        $festivalAdvance->date_of_disbursement=$request->date_of_disbursement;
        $festivalAdvance->amount=$request->amount;
        $festivalAdvance->emi=$request->emi;
        $festivalAdvance->start_date=$request->start_date;
        $festivalAdvance->end_date=$request->end_date;
        // if($request->end_date!=null){
        //     $staus="inactive";
        // }
        
        //$result=$festivalAdvance->update();
        //$festivalAdvance->created_at = Carbon::now();
        
        $festivalAdvance->save();
        //return redirect('/ESTB/FestivalAdvance');
        
        return redirect('/ESTB/staff/show/'.$staff->id);
         


     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFestivalAdvanceRequest $request,staff $staff,  festival_advance $festivalAdvance)
    {
       // $festivalAdvance->staff_id=$request->staff_id;
        //dd($festivalAdvance);
        $festivalAdvance->date_of_application=$request->date_of_application;
        $festivalAdvance->date_of_disbursement=$request->date_of_disbursement;
        $festivalAdvance->amount=$request->amount;
        $festivalAdvance->emi=$request->emi;
        $festivalAdvance->start_date=$request->start_date;
        $festivalAdvance->end_date=$request->end_date;

        $result=$festivalAdvance->update();
       // dd($result);
       // return redirect('/ESTB/FestivalAdvance');
       
       return redirect('/ESTB/staff/show/'.$staff->id);
         

    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(FestivalAdvance $festivaladvance,$staff_id)
    // {
    //     //$festivaladvance->delete();
        
        
    //     $delete=$festivaladvance->FestivalAdvance()->detach($staff_id);
    //     //$festivaladvance=$staff->delete();
    //    // return redi public function destroy(FestivalAdvance $festivaladvance,$staff_id)
    // {
    //     //$festivaladvance->delete();
        
        
    //     $drect('/ESTB/festivaladvance');
       
    //    return redirect('/ESTB/staff/show/');
         
    // }

//     public function destroy(FestivalAdvance $festivaladvance,$staff_id)
// {
//     // Detach the staff from the festival advance
//    // $festivaladvance->staff()->delete($staff_id);

    
//     //$delete=$festivaladvance->detach($staff_id);
    
//     $delete=$festivaladvance->FestivalAdvance()->detach($staff_id);

//     // Redirect to the staff show page
//     return redirect('/ESTB/staff/show/'.$staff->id);
// }

public function destroy(staff $staff,  $festivaladvance)
{
    
    $festivalAdvance=festival_advance::where('id',$festivaladvance)->first();
   // dd($festivaladvance);
    $result=$festivalAdvance->delete();
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
