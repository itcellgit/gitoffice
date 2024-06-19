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
        ]);

       // fetching staff and taxheads
        $staff = Staff::findOrFail($staffId);
        $taxHeads = TaxHeads::findOrFail($request->tax_heads_id);
        //deleting previous value
        // StaffTaxRegimes::where('staff_id', $staff->id)
        // ->where('tax_heads_id', $request->tax_heads_id)
        // ->delete();
        // StaffTaxRegimes::where('staff_id', $staff->id)
        // ->where('tax_heads_id', $request->tax_heads_id)
        // ->where('status', 'active')
        // ->update(['status' => 'inactive']);
        StaffTaxRegimes::where('staff_id', $staff->id)
        ->where('status', 'active')
        ->update(['status' => 'inactive']);

       //attaching pivot tables  
        $staff->taxHeads()->attach($taxHeads, [
            'year' => $request->year,
            'status' => 'active',
        ]);
        return redirect()->route('ESTB.staff.show', ['staff' => $staff->id])
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
