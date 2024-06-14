<?php

namespace App\Http\Controllers\ESTB;

use App\Models\qualification;
use App\Http\Requests\StorequalificationRequest;
use App\Http\Requests\UpdatequalificationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //  DB::statement('ALTER TABLE departments ADD mobile VARCHAR(13)' );
        $filter = '';
        $qualification=qualification::sortable()->orderBy('qual_name')->get();
        return view('ESTB.qualifications.index',compact('qualification','filter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ESTB.qualifications.dummy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorequalificationRequest $request)
    {
          //
       //  dd($request);
         $qualification=new qualification();
         $qualification->qual_name=$request->qual_name;
         $qualification->qual_shortname=$request->qual_shortname;
         
         $qualification->created_at = Carbon::now();
       // dd($qualification);
         $qualification->save();
 
         $qualinsertedId = $qualification->id;
 
         //dd($insertedId);
         if($qualinsertedId > 0){
             $status = 1;
             return redirect('/ESTB/qualifications')->with('status', $status);
         }else{
             $status = 0;
             return redirect('/ESTB/qualifications')->with('status', $status);
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatequalificationRequest $request, qualification $qualification)
    {
        $qualification->qual_name=$request->edit_qual_name;
        $qualification->qual_shortname=$request->edit_qual_shortname;
      
        $result = $qualification->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/qualifications')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(qualification $qualification)
    {
        //
        $qualification->status='inactive';
        $result = $qualification->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/qualifications')->with('status', $status);
    }
}
