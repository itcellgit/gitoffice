<?php

namespace App\Http\Controllers\ESTB;

use App\Models\payscale_salary_head;
use App\Models\salary_head;
use App\Models\payscale;
use App\Http\Controllers\PayscaleController;
use App\Http\Requests\Storepayscale_salary_headRequest;
use App\Http\Requests\Updatepayscale_salary_headRequest;
use App\Http\Controllers\Controller;

class PayscaleSalaryHeadController extends Controller
{
    // public function index()
    // {
    //     $salary_heads=salary_head::get();
    //     $payscales=payscale::get();
    //     $payscale_salary_head=payscale::with('salary_head')->get();
    //     //dd($payscale_salary_head);
    //     return view('ESTB.payscale.payscalesalaryheads.index',compact('salary_heads','payscales','payscale_salary_head','psh'));
    // }
    public function index()
    {

         $salary_groups=salary_group::get();
         $salary_heads_bg = salary_head::where('title','like','%basic%')->orWhere('title','like','%gross%')->orderby('title')->get(); 
      //  dd($salary_heads_bg);
         $salary_heads = Salary_head::with('salaryGroup')->with('salary_head_on')->get();     
         //dd($salary_heads);
         return view('ESTB.salaries.payscalesalaryheads.index',compact('salary_heads','salary_groups','salary_heads_bg'));
      }
    public function create()
    {
        //
    }
    // public function store(Storepayscale_salary_headRequest $request,payscale $payscale)
    // {
    
    //     $insertedIds = [];
    //     foreach ($request->salary_head_id as $sh) {     
    //         $insert= $payscale->salary_head()->attach($sh,['start_date'=> $request->start_date,'end_date'=> $request->end_date,'status'=>'active']);
    //     }
    //     if ($insert) {
    //         $status = 1;
    //     } else {
    //         $status = 0;
    //     }
    //     return redirect('/ESTB/payscale/'.$payscale->id.'/show')->with('status', $status);
    // }

    public function store(Storepayscale_salary_headRequest $request,payscale $payscale)
    {
       //dd($request);
        $salary_heads=new salary_head();
        $salary_heads->title=$request->title;
        $salary_heads->salary_group_id=$request->salary_group_id;
        $salary_heads->salary_type=$request->salary_type;
        if($request->salary_type=="percentage")
        {
            $salary_heads->pvalue=$request->percentage_value;
            $salary_heads->ptype=$request->ptype;
        }
        $salary_heads->maximum=$request->maximum;
        $salary_heads->created_at = Carbon::now();
        $salary_heads->status='active';
        $salary_heads->save();
        $salary_headsinsertedId = $salary_heads->id;


       //dd($insertedId);
       if($salary_headsinsertedId > 0){
           $status = 1;
           return redirect('/ESTB/salaries/payscalesalaryheads')->with('status', $status);
       }else{
           $status = 0;
           return redirect('/ESTB/salaries/payscalesalaryheads')->with('status', $status);
       }
    }


    public function show(payscale_salary_head $payscale_salary_head)
    {
        //
    }
    public function edit(payscale_salary_head $payscale_salary_head)
    {
        //
    }
    public function update(Updatepayscale_salary_headRequest $request, payscale $payscale)
    {
        $updateresult = true;
        $psh = $payscale->salary_head()->get();
       
        foreach ($psh as $present) {
            $flag = false;
            foreach ($request->salary_head_id as $sh_id) {
                if ($present->id == $sh_id) {
                    $flag = true;
                    break;
                }
            }
            if ($flag==false) {
                $present->pivot->end_date = $request->start_date;
                $present->pivot->status = 'inactive';
                $updateresult = $present->pivot->update();
            }
        }

        // Attaching new salary heads
        foreach ($request->salary_head_id as $sh_id) {
            $flag=false;
            foreach ($psh as $present) {
                if ($present->id == $sh_id && $present->pivot->status=='active') {
                    $flag = true;
                    break;
                }
                
                }  
                if($flag==false)
                {
                    $inserted_pivot = $payscale->salary_head()->attach($sh_id, [
                        'start_date' => $request->start_date,
                        'end_date' => null, 
                        'status' => 'active'
                    ]);
                    if (!$inserted_pivot) {
                        $updateresult = false;
                    }         
            }
        }
        $status = $updateresult ? 1 : 0;
        return redirect('/ESTB/payscale/' . $payscale->id . '/show')->with('status', $status);
    }

    

    public function destroy(payscale_salary_head $payscale_salary_head,payscale $payscale)
   {
        $payscale_salary_head->status = 'inactive';
        $payscale_salary_head->update();
        $result=$payscale->salary_head()->detach($payscale_salary_head->id);
        if($result){
                $status = 1;
             }else{
                 $status = 0;
            }
        return redirect('/ESTB/payscale/'.$payscale->id.'/show')->with('status', $status);
       
    }
}

