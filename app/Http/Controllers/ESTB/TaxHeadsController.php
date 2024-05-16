<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ESTB\TaxHeads;
use App\Models\ESTB\TaxSlab;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaxHeadsRequest;
use App\Http\Requests\UpdateTaxHeadsRequest;

class TaxHeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $taxHeads = TaxHeads::all();
      return view('ESTB.TDS.Taxheads.index',compact('taxHeads'));     
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
    public function store(StoreTaxHeadsRequest $request)
    {
        $request->validate([
            "name"=>"required",
            "year"=>"required",
            "status"=>"required",
        ]);

        $taxHeads = new TaxHeads();
        $taxHeads->name = $request['name'];
        $taxHeads->year = $request['year'];
        $taxHeads->status = $request['status'];
        $taxHeads->save();
        if($taxHeads ->id){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect()->route('ESTB.TDS.Taxheads.index')->with('success', 'Tax Head Added Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(TaxHeads $taxHeads)
    {
        $taxHeads = TaxHeads::findOrFail($taxHeads->id);
    // Retrieve associated tax slabs
    $slabs = TaxSlab::where('regime_id', '=', $taxHeads->id)
                   ->orderBy('id')
                   ->get();
    // Pass data to the view and render it
    return view('ESTB.TDS.Taxheads.edittaxheads', compact('taxHeads', 'slabs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaxHeads $taxHeads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaxHeadsRequest $request, TaxHeads $taxHeads)
    {
        $taxHeads->name=$request->edit_taxheads_name;
        $taxHeads->year=$request->edit_year;
        if($request->status=='Active'){
            $taxHeads->status='Active';
        }
        $result = $taxHeads->update();
        if($result){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect()->route('ESTB.TDS.Taxheads.index')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaxHeads $taxHeads)
    {
        // $taxHeads->status='Inactive';
        // $result=$taxHeads->update();
        // if($result){
        //     $status = 1;

        // }else{
        //     $status = 0; 
        // }
        // return redirect('ESTB.TDS.Taxheads.index')->with('status',$status);
        $taxHead = TaxHeads::find($taxHeads->id);

        // Check if the tax head exists
        if (!$taxHead) {
            return redirect()->route('ESTB.TDS.Taxheads.index')->with('status', 0)->with('message', 'Tax head not found.');
        }
    
        // Step 2: Delete the tax head record from the database
        $result = $taxHead->delete();
    
        // Step 3: Redirect the user to the index page with a status message
        if ($result) {
            return redirect()->route('ESTB.TDS.Taxheads.index')->with('status', 1)->with('message', 'Tax head deleted successfully.');
        } 
        else {
            return redirect()->route('ESTB.TDS.Taxheads.index')->with('status', 0)->with('message', 'Failed to delete tax head.');
        }
}
}
