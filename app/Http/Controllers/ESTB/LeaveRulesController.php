<?php

namespace App\Http\Controllers\ESTB;

use App\Models\leaves;
use Illuminate\Http\Request;
use App\Http\Requests\Updateleave_rulesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\combining_Leave;
use App\Models\leave;
use App\Models\leave_rules;

class LeaveRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

       dd('index');
        //dd($Leaves);


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
    public function store(Request $request,leave $leave)
    {
        //


        $leave_rules=$leave->leave_rules()->createMany(
            [
                [
                    'carry_forwardable'=>$request->carry_forwardable,
                    'cf_wef'=>$request->cf_wef,
                    'cf_gcr'=>$request->cf_gcr,
                    'max_cf'=>$request->max_carry_forwardable,
                    'encashable'=>$request->encashable,
                    'enc_wef'=>$request->enc_wef,
                    'enc_gcr'=>$request->enc_gcr,
                    'max_enc'=>$request->max_encashable,
                    'gap'=>$request->gap,
                    'gap_wef'=>$request->gap_wef,
                    'gap_gcr'=>$request->gap_gcr,
                    'min_gap'=>$request->min_gap,
                    'max_time_allowed'=>$request->max_time_allowed,
                    'period'=>$request->period,
                    'prior_intimation_days'=>$request->no_days_prior_intimation,
                    'created_at'=>Carbon::Now()
                ]
            ]
        );
        $leavecombinations=false;

        if(count($request->leavetype)>0)
        {
             foreach($request->leavetype as $leavetype)
            {
                $leavecombinations=$leave->combine_leave()->attach($leavetype,['sandwitchable'=>$request->allowed[$leavetype],'wef'=>$request->com_wef,'status'=>'active','created_at'=>Carbon::Now()]);
            }
        }


       if($leave_rules && $leavecombinations)
       {
        $status=1;
       }
       else
       {
        $status=0;
       }
       return redirect('/ESTB/leave/'.$leave->id.'/leave_rules')->with('status',$status);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $Leaves)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $Leaves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateleave_rulesRequest $request,  $Leaves,$lr)
    {
       
      // fetch the leave and leave_rule object to perform the update
       $Leaves=leave::find($Leaves);
       $leave_rules=leave_rules::find($lr);

       //check if any rules has changed.  If any rule has changed. update that rule closing date and closing gcr
       //If any rule is closed then, insert a new row including the unchanged rules.
       //Example: if carry_forward was no and is now made yes, then make the current rule inactive and add a new row
       //in leave_rule with the updated values for carry_forwardable and old values of other rules.

       if($leave_rules->carry_forwardable==$request->carry_forwardable && $leave_rules->max_cf==$request->max_cf
        && $leave_rules->encashable==$request->encashable && $leave_rules->max_enc==$request->max_enc
        && $leave_rules->gap==$request->gap && $leave_rules->min_gap==$request->min_gap
        && $leave_rules->max_time_allowed==$request->max_time_allowed
        && $leave_rules->prior_intimation_days==$request->prior_intimation_days)
        {
            $leave_rules->carry_forwardable=$request->carry_forwardable;
            $leave_rules->cf_wef=$request->cf_wef;
            $leave_rules->cf_gcr=$request->cf_gcr;
            $leave_rules->max_cf=$request->max_cf;

            $leave_rules->encashable=$request->encashable;
            $leave_rules->enc_wef=$request->enc_wef;
            $leave_rules->enc_gcr=$request->enc_gcr;
            $leave_rules->max_enc=$request->max_enc;

            $leave_rules->gap=$request->gap;
            $leave_rules->gap_gcr=$request->gap_gcr;
            $leave_rules->gap_wef =$request->gap_wef ;

            $leave_rules->min_gap=$request->min_gap;
            $leave_rules->max_time_allowed=$request->max_time_allowed;
            $leave_rules->period=$request->period;
            $leave_rules->prior_intimation_days=$request->prior_intimation_days;
            $leave_rules->created_at=Carbon::Now();

            $result = $leave_rules->update();
            $status=1;

        }
        else
        {
          //  dd(153);
            $leave_rules->cf_closing_date=$request->cf_closing_date;
            $leave_rules->cf_closing_gcr=$request->cf_closing_gcr;
            $leave_rules->enc_closing_date =$request->enc_closing_date ;
            $leave_rules->enc_closing_gcr =$request->enc_closing_gcr ;
            $leave_rules->gap_closing_date=$request->gap_closing_date;
            $leave_rules->gap_closing_gcr=$request->gap_closing_gcr;

            $leave_rules->created_at=Carbon::Now();
            $leave_rules->status='inactive';
            $leave_rules->update();
            $leave_rules=$Leaves->leave_rules()->createMany(
                [
                    [
                        'carry_forwardable'=>$request->carry_forwardable,
                        'cf_wef'=>$request->cf_wef,
                        'cf_gcr'=>$request->cf_gcr,
                        'max_cf'=>$request->max_cf,
                        'encashable'=>$request->encashable,
                        'enc_wef'=>$request->enc_wef,
                        'enc_gcr'=>$request->enc_gcr,
                        'max_enc'=>$request->max_enc,
                        'gap'=>$request->gap,
                        'gap_wef'=>$request->gap_wef,
                        'gap_gcr'=>$request->gap_gcr,
                        'min_gap'=>$request->min_gap,
                        'max_time_allowed'=>$request->max_time_allowed,
                        'period'=>$request->period,
                        'prior_intimation_days'=>$request->no_days_prior_intimation,
                        'created_at'=>Carbon::Now()
                    ]
                ]
            );
            $status=1;
        }

        if(count($request->leavetype)>0)
        {
            //fetch all the leave combinations currently available.  Check if there is any changes.
            //Changes can be as follows:
            // 1. the combination already exists and no change
            // 2. the combination exists and is no more applicable so needs to be made inactive with setting the close date
            // 3. the combination does not exist as it is newly introduced hence attach.
            $leavecombinations=$Leaves->combine_leave()->get(); //fetching the combining_Leaves for this leave type
            //dd($leavecombinations);
            //check if the leave type is checked and not active in combining_Leaves table => attach it

            foreach($request->leavetype as $leavetype)
            {
                $flag=0;

                foreach($leavecombinations as $lc)
                {
                    //check if the leave combination is present and it is active.  If not present or not active then add it to the combination
                    if($lc->pivot->combined_with==$leavetype && $lc->pivot->status=='active')
                    {
                        $flag=1;
                    }
                }
                if($flag==0) //flag ==0 => that the combination is not present so attach it
                {
                    $created_at=Carbon::Now();
                    $Leaves->combine_leave()->attach($Leaves->id,['combined_id'=>$leavetype,'sandwitchable'=>$request->allowed[$leavetype],'status'=>'active','wef'=>$request->com_wef,'created_at'=>$created_at]);
                    $status=1;
                }
            }

            //check if there is any leave combination present in the combining_Leaves table but is unchecked in the request then make that combination inactive.



            foreach($leavecombinations as $lc)
            {
                $pos="";

               $pos=array_search($lc->pivot->combined_with,$request->leavetype);

                 if($pos=="") //this should work only when the $lpcw is not present in the request->leavetype;
                {
                  // $combining_Leave =$Leaves->combineleaves()->where('Leaves_id',$Leaves->id)->where('combined_with',$lc->pivot->combined_with)->where('status','active')->get();

                     $lc->pivot->status="inactive";
                     $lc->pivot->closing_wef=$request->com_wef;
                     $lc->pivot->update();
                     $status=1;
                }
            }


        }


        // if($result){
        //     $status = 1;
        // }else{
        //     $status = 0;
        // }

        return redirect('/ESTB/leave/'.$Leaves->id.'/leave_rules')->with('status',$status);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leaves $Leaves)
    {
        //
        //dd($Leaves);
        $Leaves->status='inactive';
        //dd( $Leaves->status);
        $result = $Leaves->update();
        // dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/leaves/Leaves')->with('status', $status);
    }
}