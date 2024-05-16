<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ESTB\TaxSlab;
use App\Models\ESTB\TaxHeads;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaxSlabRequest;
use App\Http\Requests\UpdateTaxSlabRequest;

class TaxSlabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $taxSlab = TaxSlab::all();
       return view('ESTB.TDS.Taxheads.edittaxheads', compact('taxSlab'));
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
    public function store(StoreTaxSlabRequest $request)
    {
        $request->validate([
        "lower_limit"=>"required",
        "upper_limit"=>"required",
        "tax_rate"=>"required",
        ]);

      $taxSlab = new TaxSlab();
      $taxSlab->regime_id = $request->regime_id;
      $taxSlab->lower_limit = $request->lower_limit;
      $taxSlab->upper_limit = $request->upper_limit;
      $taxSlab->tax_rate = $request->tax_rate;
      $taxSlab->save();

      return redirect()->route('ESTB.TDS.Taxheads.show', ['taxHeads' => $taxSlab->regime_id]);


    }

    /**
     * Display the specified resource.
     */
    public function show(TaxSlab $taxSlab)
    {
        // $taxHeads = TaxHeads::find($taxSlab->regime_id); 
        // $taxSlab = TaxSlab::where('regime_id', $taxHeads->id)->get();
        // return view('ESTB.TDS.Taxheads.edittaxheads', compact('taxHeads','taxSlab'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaxSlab $taxSlab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaxSlabRequest $request, TaxSlab $taxSlab)
    {
        $taxSlab = lower_limit=$request->e_lower_limit;
        $taxSlab = regime_id = $request->e_regime_id;
        $taxSlab = upper_limit=$request->e_upper_limit;
        $taxSlab = tax_rate=$request->e_tax_rate;
        $taxSlab->update();
        

        return redirect()->route('ESTB.TDS.Taxheads.Taxslabs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaxSlab $taxSlab)
    {
        //
    }
}
