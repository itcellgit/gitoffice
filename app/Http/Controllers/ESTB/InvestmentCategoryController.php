<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Models\ESTB\InvestmentCategory;
use App\Models\ESTB\tdshead1;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvestmentCategoryRequest;
use App\Http\Requests\UpdateInvestmentCategoryRequest;

class InvestmentCategoryController extends Controller
{
    public function index()
    {
       
    }

    
    public function create()
    {
        //
    }


    public function store(StoreInvestmentCategoryRequest $request)
    {
        $request->validate([
            "investment_type"=> "required"
            ]);
            $invest_category = new InvestmentCategory();
            $tdsheads = new tdshead1();
            $invest_category->investment_type = $request['investment_type'];
            $invest_category->tds_id= $request['tds_id'];
            $invest_category->save();
            return redirect()->route('ESTB.TDS.TdsHeads.show', ['tdsheads' => $invest_category->tds_id]);
         
    }

    public function show(InvestmentCategory $investmentCategory)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvestmentCategory $investmentCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvestmentCategoryRequest $request,InvestmentCategory $investmentCategory)
    {
        // dd($investmentCategory);
    // $invest_category = InvestmentCategory::find($investmentCategory->id);
    $investmentCategory->investment_type =  $request['edit_category_name'];
    $investmentCategory->tds_id = $request['edit_section_name'];
    $investmentCategory->save();
    return redirect()->route('ESTB.TDS.TdsHeads.show', ['tdsheads' => $investmentCategory->tds_id])->with('success', 'Tax slab updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tdshead1 $tdsheads,InvestmentCategory $investmentCategory)
    {
        $investmentCategory->delete();
        dd($investmentCategory->tds_id);
        return redirect()->route('ESTB.TDS.TdsHeads.show', ['tdsheads' => $investmentCategory->tds_id]);
    }
}
