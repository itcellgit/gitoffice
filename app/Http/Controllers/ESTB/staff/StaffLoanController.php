<?php

namespace App\Http\Controllers\ESTB\staff;
// namespace App\Http\Controllers\ESTB;

use App\Models\staffloan;
use App\Models\staff;
use App\Models\staffloan_transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Requests\StorestaffloanRequest;
use App\Http\Requests\UpdatestaffloanRequest;

class StaffLoanController extends Controller
{
    public function index()
    {

        $staff=staff::get();
        $staffloan=staffloan::get();
        return view('/ESTB/staff',compact('staff','staffloan'));
    }

    public function create()
    {
        //
    }

    public function store(StorestaffloanRequest $request,staff $staff)
    { 
        $staffloan=new staffloan();
        $staffloan->staff_id=$staff->id;
        $staffloan->member_id=$request->member_id;
        $staffloan->loan_type=$request->loan_type;
        $staffloan->loan_id=$request->loan_id;
        $staffloan->loan_amount=$request->loan_amount;
        $staffloan->monthly_EMI=$request->monthly_EMI;
        $staffloan->start_date=$request->start_date;
       //$staffshare->end_date=$request->end_date;
        $staffloan->created_at = Carbon::now();
        $staffloan->status='active';
        $staffloan->save();
        $staffloaninsertedId = $staffloan->id;
         if($staffloaninsertedId){
            $status = 1;
            return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
        }
    }
    public function show(staff $staff, staffloan $staffloan)
    {
        $staffloan_transaction =stafflic::with('staffloan_transactions')->where('id',$staffloan->id)->first();
        return view('ESTB.staff.staffloan_transactions', compact('staffloan'));
    }

    public function edit(staffloan $staffloan)
    {
        //
    }

    public function update(UpdatestaffloanRequest $request,staff $staff,staffloan $staffloan)
    {
        $staffloan->staff_id=$staff->id;
        $staffloan->member_id=$request->member_id;
        $staffloan->loan_type=$request->loan_type;
        $staffloan->loan_id=$request->loan_id;
        $staffloan->loan_amount=$request->loan_amount;
        $staffloan->monthly_EMI=$request->monthly_EMI;
        $staffloan->start_date=$request->start_date;
        $staffloan->end_date=$request->end_date;
        if($request->status=='active'){
            $staffloan->status='active';
        }  
        $result = $staffloan->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
    }
    
    public function destroy(staff $staff,staffloan $staffloan)
    {
        $staffloan->status='inactive';
        $result = $staffloan->update();
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
