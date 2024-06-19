<?php

namespace App\Http\Controllers\ESTB;

use App\Models\ESTB\tdshead1;
use App\Models\ESTB\InvestmentCategory;
use App\Http\Requests\StoretdsheadsRequest;
use App\Http\Requests\UpdatetdsheadsRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvestmentCategoryRequest;
use App\Http\Requests\UpdateInvestmentCategoryRequest;
use Illuminate\Support\Facades\DB;


class TdsheadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
         $tdshead = tdshead1::all();
         return view('ESTB.TDS.TdsHeads.index', compact('tdshead'));
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
    public function store(StoretdsheadsRequest $request)
    {
        $request->validate([
           "category"=> "required",
           "status"=> "required",
           
        ]);
        // print_r($request->all());
        $tdshead = new tdshead1();
        $tdshead->category = $request['category'];
        $tdshead->description = $request['description'];
        $tdshead->status = $request['status'];
        $tdshead->update();
        return redirect()->route('ESTB.TDS.TdsHeads.index');  
    }
    /**
     * Display the specified resource.
     */
    
     public function show(tdshead1 $tdsheads)
{   
    $tdshead = tdshead1::find($tdsheads->id);
    $invest_category = InvestmentCategory::where('tds_id', '=', $tdshead->id)
    ->orderBy('id')
    ->get();
    return view('ESTB.TDS.TdsHeads.update', compact('tdshead','invest_category'));          
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tdshead1 $tdsheads)
    {
        $tdshead = Tdshead1::find($tdsheads->id);
        return view('ESTB.TDS.TdsHeads.update',compact('tdshead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetdsheadsRequest $request, tdshead1 $tdsheads)
    {
        // $tdshead= tdshead1::find($tdsheads->id);
        // $tdshead = new tdsheads();
        // $tdshead->category = $request['category'];
        // $tdshead->description = $request['description'];
        // $tdshead->status = $request['status'];
        // $tdshead->save();
        $tdsheads->update([
            'category' => $request->category,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('ESTB.TDS.TdsHeads.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tdshead1 $tdsheads)
    {
        // $tdshead = tdshead1::find( $tdsheads->id);
        // $tdshead->delete();
        // dd($tdsheads); // Debug incoming request
        $tdshead = tdshead1::find($tdsheads->id);
        if (!$tdshead) {
            return redirect()->route('ESTB.TDS.TdsHeads.index')->with('error', 'Record not found.');
        }
        $tdshead->delete();
        return redirect()->route('ESTB.TDS.TdsHeads.index')->with('success', 'Record deleted successfully.');
    }
}
