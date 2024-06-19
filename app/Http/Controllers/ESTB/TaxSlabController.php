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
       $taxHeads = TaxHeads::all();
       return view('ESTB.TDS.Taxheads.edittaxheads', compact('taxSlab','taxHeads'));
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
    public function update(UpdateTaxSlabRequest $request,$regime_id,TaxSlab $taxSlab)
{
    $taxSlab->lower_limit = $request->e_lower_limit;
    $taxSlab->regime_id = $request->e_regime_id; // Assuming regime_id comes from the request
    $taxSlab->upper_limit = $request->e_upper_limit;
    $taxSlab->tax_rate = $request->e_tax_rate;
    $taxSlab->save(); // Use save() instead of update()

    return redirect()->route('ESTB.TDS.Taxheads.show', ['taxHeads' => $taxSlab->regime_id])->with('success', 'Tax slab updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaxHeads $taxHeads,TaxSlab $taxSlab)
    {
        // dd($taxSlab);
        $taxSlab->delete();
    
        return redirect()->route('ESTB.TDS.Taxheads.show', ['taxHeads' => $taxSlab->regime_id])->with('success', 'Tax slab deleted successfully');  
    }
}
