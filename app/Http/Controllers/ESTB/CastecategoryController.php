<?php

namespace App\Http\Controllers\ESTB;

use App\Models\castecategory;
use App\Http\Controllers\ReligionController;
use App\Http\Requests\StorecastecategoryRequest;
use App\Http\Requests\UpdatecastecategoryRequest;
use Illuminate\Support\Carbon;
use App\Models\religion;
use App\Http\Controllers\Controller;

class CastecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorecastecategoryRequest $request)
    {
       // $castecategory=new castecategory();

        //echo ($castecategory);
        
        try{
            $castecategory=new Castecategory();
        $castecategory->caste_name=$request->caste_name;
        $castecategory->religion_id=$request->religion_id;
        $castecategory->subcastes_name=$request->subcastes_name;
        $castecategory->category=$request->category;
        $castecategory->category_no=$request->category_no;
        $castecategory->status="active";
        $castecategory->created_at=Carbon::now();
        $result  = $castecategory->save();
            
            if($result > 0){
                $status = 1;
                return redirect('ESTB/religion/'.$castecategory->religion_id.'/castecategory')->with('status', $status);
            }else{
                $status = 0;
                return redirect('ESTB/religion/'.$castecategory->religion_id.'/castecategory')->with('status', $status);
            }
        }
        catch(Exception $e){
            dd($e);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(castecategory $castecategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(castecategory $castecategory)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecastecategoryRequest $request, $religion_id, castecategory  $castecategory)
    {
         //dd($request);
        //dd($request->caste_name);
        $castecategory->caste_name=$request->e_caste_name;
        $castecategory->religion_id=$request->e_religion_id;
        $castecategory->subcastes_name=$request->e_subcastes_name;
        $castecategory->category=$request->e_category;
        $castecategory->category_no=$request->e_category_no;
        if($request->status==='active'){
            $castecategory->status='active';
        }
        $result  = $castecategory->update();
              
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('ESTB/religion/'.$religion_id.'/castecategory')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(religion $religion ,castecategory $castecategory)
    {
        
       $castecategory->status='inactive';
        $result = $castecategory->update();
       
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
       return redirect('ESTB/religion/'.$religion->id.'/castecategory')->with('status', $status);
    }
}
