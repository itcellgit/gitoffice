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
        // $tdsheads = DB::table("tdsheads")
        // ->join("investment_categories","tdsheads.id","=","investment_categories.tds_id")
        // ->get();
        // $tdshesds = tdsheads::with('InvestmentCategory')->get();
        // $investmentCategory = with('tdshead')->get();
        // return view('ESTB.TDS.TdsHeads.index', compact('tdshesds','investment_categories'));
        //  return view("ESTB.TDS.TdsHeads.index");  //compact('tdsheads')
         $tdshead = tdshead1::all();
        //  $invest_category = InvestmentCategory::all();
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
        $tdshead->save();
        return redirect()->route('ESTB.TDS.TdsHeads.index');

        
    }
    
    public function store2(StoreInvestmentCategoryRequest $request)
    {   
        $request->validate([
        "investment_type"=> "required"
        ]);
        $invest_category = new InvestmentCategory();
        $tdsheads = new tdshead1();
        $invest_category->investment_type = $request['investment_type'];
        $invest_category->tds_id= $request['tds_id'];
        $invest_category->save();
        return redirect()->route('ESTB.TDS.TdsHeads.show', ['tdsheads' => $tdsheads->id]);
    }

    /**
     * Display the specified resource.
     */
    
     public function show(tdshead1 $tdsheads)
{   
    $tdshead = tdshead1::find($tdsheads->id);
    // $invest_category = InvestmentCategory::find($tdsheads->id);
    $invest_category = InvestmentCategory::where('tds_id', $tdshead->id)->get();
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
        $tdshead= Tdshead1::find($tdsheads->id);
        // $tdshead = new tdsheads();
        $tdshead->category = $request['category'];
        $tdshead->description = $request['description'];
        $tdshead->status = $request['status'];
        $tdshead->save();
        return redirect()->route('ESTB.TDS.TdsHeads.index');
    }

    public function update2(UpdateInvestmentCategoryRequest $request, InvestmentCategory $investmentCategory)
    {
        $invest_category = InvestmentCategory::find($investmentCategory->id);
        $invest_category = new InvestmentCategory();
        $invest_category->investmenttype =  $request['investment_type'];
        $invest_category->tdssection = $request['tds_id'];
        $invest_category->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tdshead1 $tdsheads)
    {
        $tdshead = tdshead1::find( $tdsheads->id);
        $tdshead->delete();
    }
}
