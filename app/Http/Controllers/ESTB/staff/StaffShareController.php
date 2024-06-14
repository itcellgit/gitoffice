<?php

namespace App\Http\Controllers\ESTB\staff;
// namespace App\Http\Controllers\ESTB;


use App\Models\staffshare;
use App\Models\staff;
use App\Models\staffshare_transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Requests\StorestaffshareRequest;
use App\Http\Requests\UpdatestaffshareRequest;

class StaffShareController extends Controller
{
    public function index()
    {

        $staff=staff::get();
        $staffshare=staffshare::get();
        return view('/ESTB/staff',compact('staff','staffshare'));
    }

    public function create()
    {
        //
    }

    public function store(StorestaffshareRequest $request,staff $staff)
    {
        $staffshare=new staffshare();
        $staffshare->staff_id=$staff->id;
        $staffshare->shares_id=$request->shares_id;
        $staffshare->amount=$request->amount;
        $staffshare->start_date=$request->start_date;
       // $staffshare->end_date=$request->end_date;
        $staffshare->created_at = Carbon::now();
        $staffshare->status='active';
        $staffshare->save();
        $staffshareinsertedId = $staffshare->id;
         if($staffshareinsertedId){
            $status = 1;
            return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
        }
    }


    public function show(staff $staff, staffshare $staffshare)
    {
        $staffshare_transaction =stafflic::with('staffshare_transactions')->where('id',$staffshare->id)->first();
        return view('ESTB.staff.staffshare_transactions', compact('staffshare'));
    }

    public function edit(staffshare $staffshare)
    {
        //
    }

    public function update(UpdatestaffshareRequest $request,staff $staff,staffshare $staffshare)
    {
        $staffshare->staff_id=$staff->id;
        $staffshare->shares_id=$request->shares_id;
        $staffshare->amount=$request->amount;
        $staffshare->start_date=$request->start_date;
        $staffshare->end_date=$request->end_date;
        if($request->status=='active'){
            $staffshare->status='active';
        }  
        $result = $staffshare->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status', $status);
    }
    
    public function destroy(staff $staff,staffshare $staffshare)
    {
        $staffshare->status='inactive';
        $result = $staffshare->update();
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
