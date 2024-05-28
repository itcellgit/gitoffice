<?php

namespace App\Http\Controllers\ESTB;

use App\Models\teaching_payscale;
use App\Http\Requests\Storeteaching_payscaleRequest;
use App\Http\Requests\Updateteaching_payscaleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\designation;
use App\Http\Controllers\Controller;

class TeachingPayscaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teaching_payscale=teaching_payscale::with('designations')->where('teaching_payscales.status','active')->orderBy('payscale_title')->paginate(10);
        $design=DB::table('designations')->where('emp_type','Teaching')->where('isadditional',0)->get();
        //dd($teaching_payscale);
        return view('ESTB.payscales.teaching.index',compact(['teaching_payscale','design']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeteaching_payscaleRequest $request)
    {
        //
        //dd($request);
        $teaching_payscale=new teaching_payscale();
        $teaching_payscale->payscale_title=$request->payscale_title;
        $teaching_payscale->basepay=$request->basepay;
        $teaching_payscale->maxpay=$request->maxpay;
        $teaching_payscale->designations_id=$request->designations_id;
        $teaching_payscale->wef=$request->wef;
        $teaching_payscale->agp=$request->agp;
        $teaching_payscale->cca=$request->cca;
        $teaching_payscale->da=$request->da;
        $teaching_payscale->hra=$request->hra;
        //$teaching_payscale->special_incentive=$request->special_incentive;
        $teaching_payscale->created_at=Carbon::Now();
        $teaching_payscale->status='active';
       

        $result = $teaching_payscale->save();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales/teaching')->with('status',$status);
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function show(teaching_payscale $teaching_payscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teaching_payscale $teaching_payscale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateteaching_payscaleRequest $request, teaching_payscale $teaching_payscale)
    {
        //
        //dd($request);
        $teaching_payscale->payscale_title=$request->edit_payscale_title;
        $teaching_payscale->basepay=$request->edit_basepay;
        $teaching_payscale->maxpay=$request->edit_maxpay;
        $teaching_payscale->designations_id=$request->designations_id;
        $teaching_payscale->wef=$request->edit_wef;
        $teaching_payscale->agp=$request->edit_agp;
        $teaching_payscale->cca=$request->edit_cca;
        $teaching_payscale->da=$request->edit_da;
        $teaching_payscale->hra=$request->edit_hra;
        //$teaching_payscale->special_incentive=$request->special_incentive;
        $teaching_payscale->closedon=$request->closedon;
        if($request->closedon!=null){
            $teaching_payscale->status="inactive";
        }
        $result = $teaching_payscale->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/payscales/teaching')->with('status',$status);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teaching_payscale $teaching_payscale)
    {
        $teaching_payscale->status='inactive';
        $teaching_payscale->closedon=Carbon::Now();
        $result=$teaching_payscale->update();
        if($result){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/payscales/teaching')->with('status',$status);

    }
}
