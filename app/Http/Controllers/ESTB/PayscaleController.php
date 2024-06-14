<?php

namespace App\Http\Controllers\ESTB;

use App\Models\payscale;
use App\Models\payscale_salary_head;
use App\Models\salary_head;
use App\Http\Requests\StorepayscalesRequest;
use App\Http\Requests\UpdatepayscalesRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

//use App\Http\Controllers\ESTB\payscales;
use App\Http\Controllers\Controller;

class PayscaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payscales = payscale::orderBy('Payscale')->get();
       // dd($payscales);
        return view('ESTB.payscales.index',compact('payscales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ESTB.payscales.index');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepayscalesRequest $request)
    {
       // dd($request);
       $payscales=new Payscale();
       $payscales->payscale=$request->payscale;
       $payscales->description=$request->description;
       $payscales->created_at = Carbon::now();
       $payscales->status='active';
       $payscales->save();
       $payscaleinsertedId = $payscales->id;

       //dd($insertedId);
       if($payscaleinsertedId > 0){
           $status = 1;
           return redirect('/ESTB/payscales')->with('status', $status);
       }else{
           $status = 0;
           return redirect('/ESTB/payscales')->with('status', $status);
       }
    }

    

    /**
     * Display the specified resource.
     */
    public function show(payscale $payscale)
    {
      //  dd($payscale);
        $salary_heads=salary_head::get();
         $payscale=payscale::with('salary_head')->where('id',$payscale->id)->first();
         
        // dd($payscale);
        return view('ESTB.salaries.payscalesalaryheads.index',compact(['payscale','salary_heads']));
    }
   
    public function edit(payscales $payscales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepayscalesRequest $request, payscale $payscales)
    {
        //dd($payscales);
        $payscales->payscale=$request->edit_payscale;
        $payscales->description=$request->edit_description;
       
        if($request->status=='active'){
            $payscales->status='active';
        }  
        $result = $payscales->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payscale $payscales)
    {
        //dd($payscales);
        $payscales->status='inactive';
        $result = $payscales->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }

        return redirect('/ESTB/payscales')->with('status', $status);
    }
}
