<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStaffTaxRegimeRequest;
use App\Http\Requests\UpdateStaffTaxRegimeRequest;
use App\Models\ESTB\StaffTaxRegimes;
use App\Models\ESTB\TaxHeads;
use App\Models\staff;
use App\Models\department;
use Illuminate\Support\Facades\DB;



class StaffTaxRegimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $staff=staff::with('TaxHeads')
    //     ->with('departments')
    //     ->orderBy('fname')->get();
    //    $staff_tax_regimes = StaffTaxRegimes::all();
    //    $taxregime = TaxHeads::all();
      
    //    $departments = DB::table('departments')->where('status','active')->get();
    // //    $tax_heads = DB::table('tax_heads')->where('status','active')->get();
    // //    $staff = DB::table('staff')->where('status','active')->get();
    //    return view('ESTB.TDS.Taxheads.stafftaxindex',compact('staff_tax_regimes','departments','staff','taxregime'));
    $staff=staff::get();
    $stafftaxregime=StaffTaxRegimes::get();

    return view('/ESTB/staff/stafftaxregime',compact('staff','stafftaxregime'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStaffTaxRegimeRequest $request,$staffId)
    {
        
        $request->validate([
            'tax_heads_id' => 'required',
            'year' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
       
        $staff = Staff::findOrFail($staffId);
        $taxHeads = TaxHeads::findOrFail($request->tax_heads_id);
            
        $staff->taxHeads()->attach($taxHeads, [
            'year' => $request->year,
            'status' => $request->status,
        ]);
        $stafftaxregime = new StaffTaxRegimes();
        $stafftaxregime->tax_heads_id = $request->tax_heads_id;
        $stafftaxregime->year = $request->year;
        $stafftaxregime->status = $request->status;
        $stafftaxregime->staff_id = $staff->id;
        $stafftaxregime->save(); 
        if($stafftaxregime ->id){
            $status = 1;
        }else{
            $status = 0;
        } 
    
        return redirect()->route('ESTB.staff.stafftaxregime', ['staff' => $staff->id])
                         ->with('success', 'Tax regime added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
    public function update(UpdateStaffTaxRegimeRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
