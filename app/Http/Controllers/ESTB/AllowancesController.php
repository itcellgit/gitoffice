<?php

namespace App\Http\Controllers\ESTB;

use App\Models\allowance;
use App\Http\Requests\StoreallowancesRequest;
use App\Http\Requests\UpdateallowancesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\designation;
use App\Http\Controllers\Controller;

class AllowancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allowances=allowance::with('designations')->where('status','active')->get();
        $designations=designation::where('status','active')->get();
        return view('ESTB.payscales.allowances.index',compact(['allowances','designations']));
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
    public function store(StoreallowancesRequest $request)
    {
        $allowances=new allowance();
        $allowances->title=$request->title;
        $allowances->value=$request->value;
        $allowances->value_type=$request->value_type;
        $allowances->designations_id=$request->designations_id;
        $allowances->wef=$request->wef;
        $result=$allowances->save();
        if($result){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('ESTB/payscales/allowances')->with('status',$status);
    }

    /**
     * Display the specified resource.
     */
    public function show(allowance $allowances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(allowance $allowances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateallowancesRequest $request, allowance $allowances)
    {
        $allowances->title=$request->title;
        $allowances->value=$request->value;
        $allowances->value_type=$request->value_type;
        $allowances->designations_id=$request->designations_id;
        $allowances->wef=$request->wef;
        $allowances->end_date=$request->end_date;
        if($request->end_date!=null){
            $staus="inactive";
        }
        $result=$allowances->update();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(allowance $allowances)
    {
        $allowances->status='inactive';
        $allowances->end_date=Carbon::Now();
        $result = $allowances->update();
        
        
        if($result){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/payscales/allowances')->with('status',$status);
    }
}
