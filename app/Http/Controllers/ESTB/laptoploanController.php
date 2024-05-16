<?php

namespace App\Http\Controllers\ESTB;

use App\Http\Requests\StorelaptoploanRequest;
use App\Http\Requests\UpdatelaptoploanRequest;
use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Support\Carbon;
use illuminate\Support\Facades\DB;
use App\Models\laptoploan;
use Illuminate\Support\Facades\Session;
//use Auth;

class laptoploanController extends Controller
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
    public function store(StoreLaptopLoanRequest $request, staff $staff)
    {
        //dd($staff);
        //dd($request);
       // $user=Auth::user();
        //$staff=staff::where('user_id','=',$user->id)->first();
        $laptopLoan=new laptoploan();
        $laptopLoan->staff_id=$staff->id;
        $laptopLoan->date_of_application=$request->date_of_application;
        $laptopLoan->configuration=$request->configuration;
        $laptopLoan->amount=$request->amount;
        $laptopLoan->emi=$request->emi;
        $laptopLoan->start_date=$request->start_date;
        $laptopLoan->end_date=$request->end_date;
        // if($request->end_date!=null){
        //     $staus="inactive";
        // }
        
        //$result=$festivalAdvance->update();
        //$festivalAdvance->created_at = Carbon::now();
        
        $laptopLoan->save();
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
    public function update(UpdatelaptoploanRequest $request,staff $staff, laptoploan $laptoploan)
    {
       // $festivalAdvance->staff_id=$request->staff_id;
       // dd($request);
       //$laptopLoan=laptoploan::where('id',$laptopLoan)->first();
       //dd($laptoploan);
        $laptoploan->date_of_application=$request->date_of_application;
        $laptoploan->configuration=$request->configuration;
        $laptoploan->amount=$request->amount;
        $laptoploan->emi=$request->emi;
        $laptoploan->start_date=$request->start_date;
        $laptoploan->end_date=$request->end_date;

        $result=$laptoploan->update();
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

public function destroy(staff $staff,  $laptoploan)
{
    
    $laptopLoan=laptoploan::where('id',$laptoploan)->first();
   // dd($festivaladvance);
    $result=$laptopLoan->delete();
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
