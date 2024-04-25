<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use App\Models\consolidated_teaching_pay;
use App\Models\fixed_nt_pay;
use Illuminate\Support\Carbon;
use App\Models\ESTB\leave_staff_entitlement;

use App\Models\leave; //needed to add and remove non-vacational leaves based on additional designation updation


class StaffDesignationsController extends Controller
{
     /**
     * The following function is used to edit the current designations of the staff.
     * ie. if there is any error in the designation like worng designation choosen or start date is wrong or
     * GCR is wrong.  This method will help is correcting these errors.
     */
    public function editdesignation(request $request,staff $staff,$design_id)
    {
        if($request->status=="active")
        {
            //$updateresult= $staff->designations()->updateExistingPivot($design_id,['end_date'=>null,'status'=>'active']);
            $staff_latest_design=$staff->latestDesignation()->first();
            $staff_latest_design->pivot->end_date=null;
            $staff_latest_design->pivot->status='active';
          $updateresult=  $staff_latest_design->pivot->update();
        }
        else
        {
           //  $updateresult= $staff->designations()->updateExistingPivot($design_id,['designation_id'=>$request->designations_id,'start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
            $staff_latest_design=$staff->latestDesignation()->first();
            $staff_latest_design->pivot->designation_id=$request->designations_id;
            //if start_date is getting updated then update the previous designation end_date
            if($staff_latest_design->pivot->start_date!=$request->start_date)
            {
                $staff_alldesign=$staff->designations()->latest()->get();
                if($staff_alldesign!=null)
                {
                    foreach($staff_alldesign as $sdesign)
                    {
                        if($sdesign->pivot->end_date==$staff_latest_design->pivot->start_date)
                        {
                            $sdesign->pivot->end_date=$request->start_date;
                            $sdesign->pivot->update();
                            break;
                        }
                    }
                }
                 $staff_latest_design->pivot->start_date=$request->start_date;
            }

            $staff_latest_design->pivot->reason=$request->reason;
            $staff_latest_design->pivot->gcr=$request->gcr;
           $updateresult= $staff_latest_design->pivot->update();
        }
        if($updateresult)
        {
            $status=1;
        }
        else
        {
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);

    }

    /*
    * Similarlly the following function will help in editing the current payscales of the staff.
    */
    public function editpayscale(request $request,staff $staff,$payscale_id)
    {
        //dd($request);
        $emp_type=$staff->latest_employee_type()->first();

        if($emp_type->employee_type=="Teaching")
        {
            if($request->old_pay_type=="Payscale")
            {
                if($request->edit_teaching_pay_type=="Payscale")
                {
                    //$updateresult= $staff->teaching_payscale()->updateExistingPivot($payscale_id,['teaching_payscale_id'=>$request->payscales_id,'start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                    $staff_latest_payscale=$staff->latestteaching_payscale()->first();
                    $staff_latest_payscale->pivot->teaching_payscale_id=$request->payscales_id;
                    //if payscale start_date is getting updated then update the previous payscale end date also
                   if($staff_latest_payscale->pivot->start_date!=$request->start_date)
                   {
                        $staff_allpayscales=$staff->teaching_payscale()->get();
                        if($staff_allpayscales!=null)
                        {
                            foreach($staff_allpayscales as $spayscale)
                            {
                                if($spayscale->pivot->end_date==$staff_latest_payscale->pivot->start_date)
                                {
                                    $spayscale->pivot->end_date=$request->start_date;
                                    $spayscale->pivot->update();
                                    break;
                                }
                            }

                        }
                        else
                        {
                            //check if staff is having consolidate teaching pay previous to this payscale
                           $staff_allconsolidatedpay=$staff->consolidated_teaching_pay()->latest()->get();
                            if($staff_allconsolidatedpay!=null)
                            {
                                foreach($staff_allconsolidatedpay as $sconsolidate)
                                {
                                    if($sconsolidate->end_date==$staff_latest_payscale->pivot->start_date)
                                    {
                                        $sconsolidate->end_date=$request->start_date;
                                        $sconsolidate->pivot->update();
                                        break;
                                    }
                                }
                            }
                        }
                        $staff_latest_payscale->pivot->start_date=$request->start_date;
                   }


                    $staff_latest_payscale->pivot->reason=$request->reason;
                    $staff_latest_payscale->pivot->gcr=$request->gcr;
                    $updateresult=$staff_latest_payscale->pivot->update();
                    if($updateresult)
                    {
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else // edit payscale to fixed pay => delete the payscale entry and add new consolidated_teaching_pay
                    {
                        // $updateresult = $staff->teaching_payscale()->detach($payscale_id);
                        $staff_latest_teaching_pay=$staff->latestteaching_payscale()->first();
                        //update the previous teaching pay or consolidate pay end_date if start_date is changing
                        if($staff_latest_teaching_pay->pivot->start_date!=$request->start_date)
                        {
                            $staff_allpayscales=$staff->teaching_payscale()->latest()->get();
                            if($staff_allpayscales!=null)
                            {
                                foreach($staff_allpayscales as $spayscale)
                                {
                                    if($spayscale->pivot->end_date==$staff_latest_teaching_pay->pivot->start_date)
                                    {
                                        $spayscale->pivot->end_date=$request->start_date;
                                        $spayscale->pivot->update();
                                        break;
                                    }
                                }

                            }
                            else
                            {
                                //check if staff is having consolidate teaching pay previous to this payscale
                                $staff_allconsolidatedpay=$staff->consolidated_teaching_pay()->latest()->get();
                                if($staff_allconsolidatedpay!=null)
                                {
                                    foreach($staff_allconsolidatedpay as $sconsolidate)
                                    {
                                        if($sconsolidate->end_date==$staff_latest_teaching_pay->pivot->start_date)
                                        {
                                            $sconsolidate->end_date=$request->start_date;
                                            $sconsolidate->pivot->update();
                                            break;
                                        }
                                    }
                                }
                            }
                        }
                        $updateresult=$staff_latest_teaching_pay->pivot->delete();

                        $ctp=new consolidated_teaching_pay
                        ([
                            'pay'=> $request->pay,
                            'start_date' => $request->start_date,
                            'gcr' => $request->gcr,
                            'status' => 'Active',
                            'reason'=>$request->reason,
                            'created_at' =>Carbon::Now()
                        ]);
                        $insert=$staff->consolidated_teaching_pay()->save($ctp);
                        if($updateresult && $insert )
                        {
                            $status=1;
                        }
                        else
                        {
                            $status=0;
                        }
                    }
            }
            else //old payscale is consolidated for teaching staff
            {

                if($request->edit_cons_pay_type=="Payscale")
                {

                    //request is to remove fixed pay and insert new payscale
                    $insert=$staff->teaching_payscale()->attach($request->payscale_id,
                                                                ['start_date'=>$request->start_date,
                                                                'gcr'=>$request->gcr,
                                                                'reason'=>$request->reason,
                                                                'status'=>'active',
                                                                'created_at'=>Carbon::Now()]);
                    $staff_latest_consolidatedpay=$staff->latest_consolidated_teaching_pay()->first();
                    if($staff_latest_consolidatedpay->start_date!=$request->start_date)
                    {
                        $staff_allpayscales=$staff->teaching_payscale()->latest()->get();
                        if($staff_allpayscales!=null)
                        {
                            foreach($staff_allpayscales as $spayscale)
                            {
                                if($spayscale->pivot->end_date==$staff_latest_consolidatedpay->start_date)
                                {
                                    $spayscale->pivot->end_date=$request->start_date;
                                    $spayscale->pivot->update();
                                    break;
                                }
                            }

                        }
                        else{
                            //check if staff is having consolidate teaching pay previous to this payscale
                            $staff_allconsolidatedpay=$staff->consolidated_teaching_pay()->latest()->get();
                            if($staff_allconsolidatedpay!=null)
                            {
                                foreach($staff_allconsolidatedpay as $sconsolidate)
                                {
                                    if($sconsolidate->end_date==$staff_latest_consolidatedpay->start_date)
                                    {
                                        $sconsolidate->end_date=$request->start_date;
                                        $sconsolidate->pivot->update();
                                        break;
                                    }
                                }
                            }
                        }
                    }

                    $deletectp=$staff->latest_consolidated_teaching_pay()->delete();
                    if($insert && $deletectp)
                    {
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else
                {
                    // dd($request);
                    //request is to change the values of the existing consolidated_teaching_pay
                    $consolidated_teaching_pay=$staff->latest_consolidated_teaching_pay()->first();
                    //dd($consolidated_teaching_pay);
                    $consolidated_teaching_pay->pay=$request->consolidated_pay;
                    if($consolidated_teaching_pay->start_date!=$request->start_date)
                    {
                        $staff_allpayscales=$staff->teaching_payscale()->latest()->get();
                        if($staff_allpayscales!=null)
                        {
                            foreach($staff_allpayscales as $spayscale)
                            {
                                if($spayscale->pivot->end_date==$consolidated_teaching_pay->start_date)
                                {
                                    $spayscale->pivot->end_date=$request->start_date;
                                    $spayscale->pivot->update();
                                    break;
                                }
                            }

                        }
                        else
                        {
                            //check if staff is having consolidate teaching pay previous to this payscale
                            $staff_allconsolidatedpay=$staff->consolidated_teaching_pay()->latest()->get();
                            if($staff_allconsolidatedpay!=null)
                            {
                                foreach($staff_allconsolidatedpay as $sconsolidate)
                                {
                                    if($sconsolidate->end_date==$consolidated_teaching_pay->start_date)
                                    {
                                        $sconsolidate->end_date=$request->start_date;
                                        $sconsolidate->pivot->update();
                                        break;
                                    }
                                }
                            }
                        }
                        $consolidated_teaching_pay->start_date=$request->start_date;
                    }

                    $consolidated_teaching_pay->gcr=$request->gcr;
                    $consolidated_teaching_pay->reason=$request->reason;
                    $consolidated_teaching_pay->status='active';
                    $update=$consolidated_teaching_pay->update();
                    if($update)
                    {
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }

            }


        }
        else
        {
            //this section is to update non-teaching payscales
            //a hidden textbox is used to send the type of payscale to be updated.
            //    dd($request);
            if($request->old_pay_type=='Fixed')
            {
                if($request->edit_pay_type=='Payscale')
                {
                   // dd('Fixed to payscale');
                  //
                   $staff_fixedntpay=$staff->latestfixedntpay()->first();

                  if($staff_fixedntpay->start_date!=$request->start_date)
                  {
                    $staff_allfixedpay=$staff->fixed_nt_pay()->latest()->get();
                    if($staff_allfixedpay!=null)
                    {
                        foreach($staff_allfixedpay as $sfixedpay)
                        {

                            if($sfixedpay->end_date==$staff_fixedntpay->start_date)
                            {

                                $sfixedpay->end_date=$request->start_date;
                                $sfixedpay->update();
                                break;
                            }
                        }
                    }
                    else
                    {
                        $staff_consld_pay=$staff->ntcpayscale()->latest()->get();
                        if($staff_consld_pay!=null)
                        {
                            foreach($staff_consld_pay as $sconsolidated_pay)
                            {
                                if($sconsolidated_pay->end_date==$staff_fixedntpay->start_date)
                                {
                                    $sconsolidated_pay->end_date=$request->start_date;
                                    $sconsolidated_pay->update();
                                    break;
                                }
                            }
                        }
                        else
                        {
                            $staff_ntpayscale=$staff->ntpayscale()->latest()->get();
                            foreach($staff_ntpayscale as $sntpays)
                            {
                                if($sntpays->end_date==$staff_fixedntpay->start_date)
                                {
                                    $sntpays->end_date=$request->start_date;
                                }
                            }
                        }
                    }
                  }
                  $insertnewpayscale=$staff->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);

                   $deletectp=$staff->latestfixedntpay()->delete();
                   if($insertnewpayscale && $deletectp)
                   {
                       $status=1;
                   }
                   else
                   {
                       $status=0;
                   }
                }
                else if($request->edit_pay_type=='Consolidated')
                {
                   // dd('Fixed to consolidated');
                   $insertnewpayscale=$staff->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'gcr'=>$request->gcr,'reason'=>$request->reason,'status'=>'active','created_at'=>Carbon::Now()]);
                   $staff_fixedntpay=$staff->latestfixedntpay()->first();
                   if($staff_fixedntpay->start_date!=$request->start_date)
                   {
                     $staff_allfixedpay=$staff->fixed_nt_pay()->latest()->get();
                     if($staff_allfixedpay!=null)
                     {
                         foreach($staff_allfixedpay as $sfixedpay)
                         {

                             if($sfixedpay->end_date==$staff_fixedntpay->start_date)
                             {

                                 $sfixedpay->end_date=$request->start_date;
                                 $sfixedpay->update();
                                 break;
                             }
                         }
                     }
                     else
                     {
                         $staff_consld_pay=$staff->ntcpayscale()->latest()->get();
                         if($staff_consld_pay!=null)
                         {
                             foreach($staff_consld_pay as $sconsolidated_pay)
                             {
                                 if($sconsolidated_pay->end_date==$staff_fixedntpay->start_date)
                                 {
                                     $sconsolidated_pay->end_date=$request->start_date;
                                     $sconsolidated_pay->update();
                                     break;
                                 }
                             }
                         }
                         else
                         {
                             $staff_ntpayscale=$staff->ntpayscale()->latest()->get();
                             foreach($staff_ntpayscale as $sntpays)
                             {
                                 if($sntpays->end_date==$staff_fixedntpay->start_date)
                                 {
                                     $sntpays->end_date=$request->start_date;
                                 }
                             }
                         }
                    }
                }
                    $deletectp=$staff->latestfixedntpay()->delete();
                    if($insertnewpayscale && $deletectp)
                    {
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else
                {

                    $updatefixed=$staff->latestfixedntpay()->first();
                  //dd($updatefixed);
                    $updatefixed->pay=$request->fixed_pay;
                    if($updatefixed->start_date!=$request->start_date)
                    {
                        $staff_allfixedpay=$staff->fixed_nt_pay()->latest()->get();
                        if($staff_allfixedpay!=null)
                        {
                            foreach($staff_allfixedpay as $sfixedpay)
                            {

                                if($sfixedpay->end_date==$updatefixed->start_date)
                                {

                                    $sfixedpay->end_date=$request->start_date;
                                    $sfixedpay->update();
                                    break;
                                }
                            }
                        }

                        $staff_consld_pay=$staff->ntcpayscale()->latest()->get();
                        if($staff_consld_pay!=null)
                        {
                            foreach($staff_consld_pay as $sconsolidated_pay)
                            {
                                if($sconsolidated_pay->pivot->end_date==$updatefixed->start_date)
                                {
                                    $sconsolidated_pay->pivot->end_date=$request->start_date;
                                    $sconsolidated_pay->pivot->update();
                                    break;
                                }
                            }
                        }

                        $staff_ntpayscale=$staff->ntpayscale()->latest()->get();
                        foreach($staff_ntpayscale as $sntpays)
                        {
                            if($sntpays->pivot->end_date==$updatefixed->start_date)
                            {
                                $sntpays->pivot->end_date=$request->start_date;
                                $sntpays->pivot->update();
                            }
                        }

                        $updatefixed->start_date=$request->start_date;
                    }

                    $updatefixed->reason=$request->reason;
                    $updatefixed->gcr=$request->gcr;
                    $update=$updatefixed->update();
                    if( $update){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
            }
            elseif($request->old_pay_type=='Consolidated')
            {
                //line 506 to 551 will only check if the start_date is changing and update the end date of the respective previous payscale
                //check if the start_date is changed. if changed then change the end_date of the
                //previous ntpayscale/ntcpayscale/fixedntpay as was applicable for this staff.
                $ntcp=$staff->latestntcpayscale()->first();

                if($ntcp->pivot->start_date!=$request->start_date)
                {

                    $staff_allfixedpay=$staff->fixed_nt_pay()->latest()->get();

                    if($staff_allfixedpay!=null)
                    {
                        foreach($staff_allfixedpay as $sfixedpay)
                        {

                            if($sfixedpay->end_date==$ntcp->pivot->start_date)
                            {

                                $sfixedpay->end_date=$request->start_date;
                                $sfixedpay->update();
                                break;
                            }
                        }
                    }
                    $staff_consld_pay=$staff->ntcpayscale()->latest()->get();

                    if($staff_consld_pay!=null)
                    {
                        foreach($staff_consld_pay as $sconsolidated_pay)
                        {
                            if($sconsolidated_pay->pivot->end_date==$ntcp->pivot->start_date)
                            {
                                $sconsolidated_pay->pivot->end_date=$request->start_date;
                                $sconsolidated_pay->pivot->update();
                                break;
                            }
                        }
                    }

                    $staff_ntpayscale=$staff->ntpayscale()->latest()->get();
                    foreach($staff_ntpayscale as $sntpays)
                    {
                        if($sntpays->pivot->end_date==$ntcp->pivot->start_date)
                        {
                            $sntpays->pivot->end_date=$request->start_date;
                            $sntpays->pivot->update();
                        }
                    }
                }
                if($request->edit_pay_type=='Payscale')
                {
                   // dd('consolidated to payscale');
                   //detach consolidated and attach payscale

                    $insertnewpayscale=$staff->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                    $ntcp=$staff->latestntcpayscale()->first();
                    $deletentcp=$ntcp->pivot->delete();
                    if($insertnewpayscale && $deletentcp){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else if($request->edit_pay_type=='Consolidated'){
                   // dd('consolidated to consolidated');
                  // $updateresult= $staff->ntcpayscale()->updateExistingPivot($payscale_id,['ntcpayscale_id'=>$request->ntpayscale_id,'start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                    $staff_latest_ntcpay=$staff->latestntcpayscale()->first();
                    $staff_latest_ntcpay->pivot->ntcpayscale_id=$request->payscales_id;
                    $staff_latest_ntcpay->pivot->start_date=$request->start_date;
                    $staff_latest_ntcpay->pivot->reason=$request->reason;
                    $staff_latest_ntcpay->pivot->gcr=$request->gcr;
                    $updateresult= $staff_latest_ntcpay->pivot->update();
                    if($updateresult){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else{
                  //  dd('consolidated to fixed');
                 // dd($request);
                  $ntcp=$staff->latestntcpayscale()->first();
                  $deletentcp=$ntcp->pivot->delete();
                  $new_fixed_nt_pay=$staff->fixed_nt_pay()->createMany(
                    [  //create many function takes an array of rows to be inserted in the sub table.
                        [ //this inner array is for the columns of the row.
                            'pay'=>$request->fixed_pay,
                            'start_date'=>$request->start_date,
                            'gcr'=>$request->gcr,
                            'reason'=>$request->reason,
                            'status'=>'active',
                            'created_at'=>Carbon::Now()

                        ]
                    ]);
                    if($new_fixed_nt_pay && $deletentcp){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
            }
            else //editing payscale
            {
                //line 616 to 657 checks and updates the end_date of previous payscale
                //if the ntpayscale start_date is changing then update the previous
                //ntpayscale/ntcpayscale/fixedntp end_date
                $ntp=$staff->latestntpayscale()->first();

                if($ntp->pivot->start_date!=$request->start_date)
                {
                    $staff_allfixedpay=$staff->fixed_nt_pay()->latest()->get();
                    if($staff_allfixedpay!=null)
                    {
                        foreach($staff_allfixedpay as $sfixedpay)
                        {

                            if($sfixedpay->end_date==$ntp->pivot->start_date)
                            {

                                $sfixedpay->end_date=$request->start_date;
                                $sfixedpay->update();
                                break;
                            }
                        }
                    }
                    $staff_consld_pay=$staff->ntcpayscale()->latest()->get();
                    if($staff_consld_pay!=null)
                    {
                        foreach($staff_consld_pay as $sconsolidated_pay)
                        {
                            if($sconsolidated_pay->pivot->end_date==$ntp->pivot->start_date)
                            {
                                $sconsolidated_pay->pivot->end_date=$request->start_date;
                                $sconsolidated_pay->pivot->update();
                                break;
                            }
                        }
                    }
                    $staff_ntpayscale=$staff->ntpayscale()->latest()->get();
                    foreach($staff_ntpayscale as $sntpays)
                    {
                        if($sntpays->pivot->end_date==$ntp->pivot->start_date)
                        {
                            $sntpays->pivot->end_date=$request->start_date;
                            $sntpays->pivot->update();
                        }
                    }
                }
                if($request->edit_pay_type=='Payscale')
                {
                    //dd('payscale to payscale');
                    //$updateresult= $staff->ntpayscale()->updateExistingPivot($request->payscale_id,['ntpayscale_id'=>$request->ntpayscale_id,'start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                    $staff_latest_ntpay=$staff->latestntpayscale()->first();

                    $staff_latest_ntpay->pivot->ntpayscale_id=$request->payscales_id;
                    //if start date is changing then edit the end date of the previous payscale.

                    if($staff_latest_ntpay->pivot->start_date!=$request->start_date)
                    {
                        $staff_allntpayscales=$staff->ntpayscale()->latest()->get();
                        foreach($staff_allntpayscales as $sntpays)
                        {
                            if($sntpays->pivot->end_date==$staff_latest_ntpay->pivot->start_date)
                            {
                                $sntpays->pivot->end_date=$request->start_date;

                                $sntpays->pivot->update();
                                break;
                            }
                        }
                        $staff_latest_ntpay->pivot->start_date=$request->start_date;
                    }
                    $staff_latest_ntpay->pivot->level=$request->payscale_level;
                    $staff_latest_ntpay->pivot->reason=$request->reason;
                    $staff_latest_ntpay->pivot->gcr=$request->gcr;
                   $updateresult= $staff_latest_ntpay->pivot->update();
                    if($updateresult){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else if($request->edit_pay_type=='Consolidated'){
                 //   dd('payscale to consolidated');
                  //  dd($request);
                    $latestpayscale=$staff->latestntpayscale()->first();
                    $deletepayscale=$latestpayscale->pivot->delete();
                    $insertnewpayscale=$staff->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                    if($insertnewpayscale && $deletepayscale){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
                else{
                    //   dd('payscale to fixed');
                   // dd($request->reason);
                    $latestpayscale=$staff->latestntpayscale()->first();

                    $deletepayscale=$latestpayscale->pivot->delete();
                    $new_fixed_nt_pay=$staff->fixed_nt_pay()->createMany(
                        [  //create many function takes an array of rows to be inserted in the sub table.
                            [ //this inner array is for the columns of the row.
                                'pay'=>$request->fixed_pay,
                                'start_date'=>$request->start_date,
                                'gcr'=>$request->gcr,
                                'reason'=>$request->reason,
                                'status'=>'active',
                                'created_at'=>Carbon::Now()

                            ]
                        ]);
                    if($deletepayscale && $new_fixed_nt_pay){
                        $status=1;
                    }
                    else
                    {
                        $status=0;
                    }
                }
            }


        }

            return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }

    /**
     * The following function is written to add new designation or payscale for the staff.
     * When designation changes payscale also changes.  But sometimes the payscale may change in the
     * same designation.  For Example,the  teaching staff will  have the designation as assistant professor and may have
     * 3 payscales with different AGP's
     */
    public function update(Request $request, staff $staff)
    {

        $flag=0;
        //dd($request);
        $staff_latest_design=$staff->latestDesignation()->first();
       // dd($staff->latestDesignation[0]);
       if($staff_latest_design!=null)
       {
            if($staff_latest_design->id!=$request->designations_id  )
            {
                //$updateresult= $staff->designations()->updateExistingPivot($staff->latestDesignation[0]->id,['end_date'=>$request->start_date,'status'=>'inactive']);
                $staff_latest_design->pivot->end_date = $request->start_date;
                $staff_latest_design->pivot->status='inactive';
                $staff_latest_design->pivot->update();
                $sddesigresult=$staff->designations()->attach($request->designations_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                $flag=1;
            }
       }
        else
        {
            $sddesigresult=$staff->designations()->attach($request->designations_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
            $flag=1;
        }





        // if the employee type is teaching
       $emp_type= $staff->latest_employee_type()->first();
        if($emp_type->employee_type=="Teaching")
        {
           if($staff->latest_consolidated_teaching_pay()->first()==null && $staff->latestteaching_payscale()->first()==null)
           {
                if($request->pay_type=='Fixed')
                {
                    $insert=$staff->consolidated_teaching_pay()->createMany([
                        [
                            'pay'=> $request->fixed_pay,
                            'start_date' => $request->start_date,
                            'reason'=> $request->reason,
                            'gcr' => $request->gcr,
                            'status' => 'Active',
                            'created_at' => Carbon::Now()
                        ]

                        ]);

                    if($insert){
                        $status=1;
                    }
                    else{
                        $status=0;
                    }
                }
                else
                {
                    $insertnewpayscale=$staff->teaching_payscale()->attach($request->payscale_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                        if($insertnewpayscale){
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                }
           }
           else
           {
                //check the current pay type.
                if($request->old_pay_type=='Fixed')
                {
                    //if current pay type is fixed and the new pay type is also fixed then closed the current consolidated_teaching_pay and create new one.
                // $staff_ctp=$staff->latest_consolidated_teaching_pay()->first();

                    $consolidated_teaching_pay=$staff->latest_consolidated_teaching_pay()->first();
                    //
                    if($request->pay_type=='Fixed')
                    {
                        //close current consolidated_teaching_pay and insert new consolidated teaching pay
                    //dd($request->reason);
                    $update=true;
                    if($consolidated_teaching_pay!=null)
                    {
                        $consolidated_teaching_pay->end_date=$request->start_date;
                        $consolidated_teaching_pay->closing_gcr=$request->gcr;
                        $consolidated_teaching_pay->status='Inactive';
                        $update=$consolidated_teaching_pay->update();
                    }

                        //code to insert new consolidated teaching pay
                        $insert=$staff->consolidated_teaching_pay()->createMany([
                            [
                                'pay'=> $request->pay,
                                'start_date' => $request->start_date,
                                'reason'=> $request->reason,
                                'gcr' => $request->gcr,
                                'status' => 'Active',
                                'created_at' => Carbon::Now()
                            ]

                            ]);

                        if($update && $insert){
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    }
                    else
                    {
                        //if old teaching pay is fixed and new teaching pay is payscale then closed consolidated teaching pay and and
                        //insert new row

                        $update=true;
                        if($consolidated_teaching_pay!=null)
                        {
                            $consolidated_teaching_pay->end_date=$request->start_date;
                            $consolidated_teaching_pay->closing_gcr=$request->gcr;
                            $consolidated_teaching_pay->status='Inactive';
                            $update=$consolidated_teaching_pay->update();
                        }

                        $insertnewpayscale=$staff->teaching_payscale()->attach($request->payscale_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                        if( $update &&  $insertnewpayscale){
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    }

                }
                //if the current pay type is payscale then check if the new paytype is payscale or consolidated
                //if paytype is payscale then close current payscale and insert new payscale in teaching_payscale pivot table
                //if new paytype is fixed then close current payscale and insert new pay details in consolidated_teaching_pay table.
                else{
                    if($request->pay_type=="Payscale")
                    {
                        $updatepayscale=true;
                        if($staff->latestteaching_payscale()->first()!=null)
                        {
                            // $updatepayscale=$staff->teaching_payscale()->updateExistingPivot($staff->latestteaching_payscale[0]->id,['end_date'=>$request->start_date,'status'=>'inactive']);
                            $staff_latest_payscale=$staff->latestteaching_payscale()->first();
                            $staff_latest_payscale->pivot->end_date=$request->start_date;
                            $staff_latest_payscale->pivot->status='inactive';
                            $updatepayscale=$staff_latest_payscale->pivot->update();
                        }

                        $insertnewpayscale=$staff->teaching_payscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                        if($updatepayscale && $insertnewpayscale)
                            {
                                $status=1;
                            }
                            else{
                                $status=0;
                            }
                    }
                    else
                    {
                        $updatepayscale=true;
                        $staff_latest_teaching=$staff->latestteaching_payscale()->first();
                        if($staff_latest_teaching!=null){
                        //  $updatepayscale=$staff->teaching_payscale()->updateExistingPivot($staff->latestteaching_payscale[0]->id,['end_date'=>$request->start_date,'status'=>'inactive']);
                        $staff_latest_payscale=$staff->latestteaching_payscale()->first();
                        $staff_latest_payscale->pivot->end_date=$request->start_date;
                        $staff_latest_payscale->pivot->status='inactive';
                        $updatepayscale=$staff_latest_payscale->pivot->update();
                        }
                                        // dd($request);
                        $new_ctp=$staff->consolidated_teaching_pay()->createMany(
                            [
                                [
                                    'pay' => $request->fixed_pay,
                                    'start_date'=>$request->start_date,
                                    'gcr'=>$request->gcr,
                                    'status'=>'Active',
                                    'reason'=>$request->reason,
                                    'created_at'=>Carbon::Now()
                                ]

                            ]
                            );

                            if( $new_ctp)
                            {
                                $status=1;
                            }
                            else{
                                $status=0;
                            }
                    }
                }
           }


        }
        else{ // Employee type is non-teaching
            $staff=$staff->load('latestntpayscale','latestntcpayscale');
            //currently the non-teaching employee does not have any payscale. As he is rejoining the college


            if($staff->latestntpayscale()->first()==null && $staff->latestntcpayscale()->first()==null && $staff->latestfixedntpay()->first()==null)
            {

                //Check the type of payscale given to him and insert accordingly
                if($request->pay_type=="Fixed") //if new pay type is fixed
                {
                        $new_fixed_nt_pay=$staff->fixed_nt_pay()->createMany(
                        [  //create many function takes an array of rows to be inserted in the sub table.
                            [ //this inner array is for the columns of the row.
                                'pay'=>$request->fixed_pay,
                                'start_date'=>$request->start_date,
                                'gcr'=>$request->gcr,
                                'reason'=>$request->reason,
                                'status'=>'active',
                                'created_at'=>Carbon::Now()

                            ]
                        ]);

                        if( $new_fixed_nt_pay)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                } //end of pay_type=fixed
                else if($request->pay_type=="Consolidated")
                {
                    $insertnewpayscale=$staff->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                    if( $insertnewpayscale)
                    {
                        $status=1;
                    }
                    else{
                        $status=0;
                    }
                } //end of pay_type = consolidated

                else
                {
                    $insertnewpayscale=$staff->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                    if( $insertnewpayscale)
                    {
                        $status=1;
                    }
                    else{
                        $status=0;
                    }
                }
            }
            else{
                if($request->old_pay_type=='Payscale') //if current pay is of payscale (ntpayscale) type
                {
                    $staff_latest_ntpayscale=$staff->latestntpayscale()->first();

                    $staff_latest_ntpayscale->pivot->end_date=$request->start_date;
                    $staff_latest_ntpayscale->pivot->status='inactive';
                    $updatepayscale=$staff_latest_ntpayscale->pivot->update();

                    if($request->pay_type=="Fixed") //if new pay type is fixed
                    {
                            $new_fixed_nt_pay=$staff->fixed_nt_pay()->createMany(
                            [  //create many function takes an array of rows to be inserted in the sub table.
                                [ //this inner array is for the columns of the row.
                                    'pay'=>$request->fixed_pay,
                                    'start_date'=>$request->start_date,
                                    'gcr'=>$request->gcr,
                                    'reason'=>$request->reason,
                                    'status'=>'active',
                                    'created_at'=>Carbon::Now()

                                ]
                            ]);

                            if($updatepayscale && $new_fixed_nt_pay)
                            {
                                $status=1;
                            }
                            else{
                                $status=0;
                            }
                    } //end of pay_type=fixed
                    else if($request->pay_type=="Consolidated") //if new pay type is consolidated_non_teaching pay(ntcpayscales)
                    {
                        $insertnewpayscale=$staff->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                        if($updatepayscale && $insertnewpayscale)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    } //end of pay_type = consolidated

                    else  //chaning from one level of ntpayscale to another level of ntpayscale
                    {
                        $insertnewpayscale=$staff->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                        if($updatepayscale && $insertnewpayscale)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    }//end of pay_type = payscale
                }//end of old_pay_type = ntpayscale
                else if($request->old_pay_type=='Consolidated')
                {

                    $staff_latest_ntcpay=$staff->latestntcpayscale()->first();
                    $staff_latest_ntcpay->pivot->end_date=$request->start_date;
                    $staff_latest_ntcpay->pivot->status='inactive';
                    $updatepayscale=$staff_latest_ntcpay->pivot->update();


                    if($request->pay_type=="Fixed") //if new pay type is fixed
                    {

                        $new_fixed_nt_pay=$staff->fixed_nt_pay()->createMany(
                            [  //create many function takes an array of rows to be inserted in the sub table.
                                [ //this inner array is for the columns of the row.
                                    'pay'=>$request->fixed_pay,
                                    'start_date'=>$request->start_date,
                                    'gcr'=>$request->gcr,
                                    'reason'=>$request->reason,
                                    'status'=>'active',
                                    'created_at'=>Carbon::Now()
                                ]
                            ]);
                            if($updatepayscale && $new_fixed_nt_pay)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }

                    } //end of pay_type=fixed
                    else if($request->pay_type=="Consolidated") //if new pay type is consolidated_non_teaching pay(ntcpayscales)
                    {
                        $insertnewpayscale=$staff->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                        if($updatepayscale && $insertnewpayscale)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    } //end of pay_type=consolidated
                    else  //chaning from one level of ntpayscale to another level of ntpayscale
                    {
                        $insertnewpayscale=$staff->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                        if($updatepayscale && $insertnewpayscale)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    }//end of pay_type = ntpayscale

                } //end of old_pay_type=consolidated
                else //closed fixed and add new fixed or new ntpayscale or new ntcpayscale.
                {
                    $update_fixed_nt_pay=true;
                    if($staff->latestfixedntpay()->first()!=null){
                        $update_fixed_nt_pay=$staff->latestfixedntpay()->update([
                            'end_date'=>$request->start_date,
                            'status'=>'inactive',
                            'closed_gcr'=>$request->gcr
                        ]);
                    }

                    if($request->pay_type=="Fixed")
                    {
                        $new_fixed_nt_pay=$staff->fixed_nt_pay()->createMany(
                            [  //create many function takes an array of rows to be inserted in the sub table.
                                [ //this inner array is for the columns of the row.
                                    'pay'=>$request->fixed_pay,
                                    'start_date'=>$request->start_date,
                                    'gcr'=>$request->gcr,
                                    'reason'=>$request->reason,
                                    'status'=>'active',
                                    'created_at'=>Carbon::Now()
                                ]
                            ]);
                        if($update_fixed_nt_pay && $new_fixed_nt_pay)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    }
                    else if($request->pay_type=="Consolidated") //if new pay type is consolidated_non_teaching pay(ntcpayscales)
                    {
                        $insertnewpayscale=$staff->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                        if($update_fixed_nt_pay && $insertnewpayscale)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    } //end of pay_type=consolidated
                    else  //chaning from one level of ntpayscale to another level of ntpayscale
                    {
                        $insertnewpayscale=$staff->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->start_date,'level'=>$request->payscale_level,'reason'=>$request->reason,'gcr'=>$request->gcr,'status'=>'active','created_at'=>Carbon::Now()]);
                        if($update_fixed_nt_pay && $insertnewpayscale)
                        {
                            $status=1;
                        }
                        else{
                            $status=0;
                        }
                    }//end of pay_type = ntpayscale
                }
            }

        }


        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function destorydesignation(staff $staff,  $design_id)
    {

        $delete=$staff->designations()->detach($design_id);
        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);

    }


    public function destrorypayscale(request $request,staff $staff,$payscale_id)
    {
        $emp_type=$staff->latest_employee_type()->first();
        if($emp_type->employee_type=='Teaching'){
            $delete=$staff->teaching_payscale()->detach($payscale_id);
            $staff=$staff->load('latestteaching_payscale');
            //$updatepayscale=$staff->teaching_payscale()->updateExistingPivot($staff->latestteaching_payscale[0]->id,['end_date'=>null,'status'=>'active']);
            $staff_latest_payscale=$staff->latestteaching_payscale()->first();
            $staff_latest_payscale->pivot->end_date=$request->start_date;
            $staff_latest_payscale->pivot->status='inactive';
            $updatepayscale=$staff_latest_payscale->pivot->update();
        }
        else{
            if($request->type=='ntp')
            {
                $delete=$staff->ntpayscale()->detach($payscale_id);
                $staff=$staff->load('latestntpayscale');
               // $updatepayscale=$staff->ntpayscale()->updateExistingPivot($staff->latestntpayscale[0]->id,['end_date'=>null,'status'=>'active']);
                $staff_latest_ntpay=$staff->latestntpayscale()->first();
                $staff_latest_ntpay->pivot->end_date=$request->start_date;
                $staff_latest_ntpay->status='inactive';
                $updatepayscale=$staff->latest_ntpay->pivot->update();
            }
            else
            {
                $delete=$staff->ntcpayscale()->detach($payscale_id);
                $staff=$staff->load('latestntcpayscale');
                //$updatepayscale=$staff->ntcpayscale()->updateExistingPivot($staff->latestntcpayscale[0]->id,['end_date'=>null,'status'=>'active']);
                $staff_latest_ntcpay=$staff->latestntcpayscale()->first();
                $staff_latest_ntcpay->pivot->end_date=$request->start_date;
                $staff_latest_ntcpay->status='inactive';
                $updatepayscale=$staff->latest_ntcpay->pivot->update();
            }
        }



        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }

    //adding additional designation for the staff
    public function createadditionaldesign(request $request, staff $staff)
    {
        //dd($request);

         //check if the staff is already having additional designation or no and if this is first additional designation
        //create non-vacation leave and make the current vacational leaves inactive.
        //calling a dedicated function for this task.
        $leaveresult=$this->create_non_vacational_leaves($request,$staff);

        if($request->dept_id==0)
        {
            $sddesigresult=$staff->designations()->attach($request->designation_id,['start_date'=>$request->start_date,'gcr'=>$request->gcr]);
        }
        else
        {
           $sddesigresult=$staff->designations()->attach($request->designation_id,['start_date'=>$request->start_date,'gcr'=>$request->gcr,'dept_id'=>$request->dept_id]);
            $sdept=$staff->departments()->attach($request->dept_id,['start_date'=>$request->start_date,'gcr'=>$request->gcr]);
        }

        if($sddesigresult){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }

//function to create non-vacational leaves on staff assigning additional designation
public function create_non_vacational_leaves(request $request,staff $staff)
{
    $year=Carbon::now()->year;
     //get the details of the additioanl designation the staff is already assigned.
    $check_staff_additioanl_designation=$staff->latest_additional_designation()->get();
    $flag=true;
    //if staff is holding an additional designation currently
    if($check_staff_additioanl_designation!=null)
    {
        foreach($check_staff_additioanl_designation as $check_staff_ad)
        {
            //if staff is currently non-vacation then no need to update leaves.
            if($check_staff_ad->isvacational=='Non-Vacational')
            {
                $flag=false;
            }
        }
    }
    //if staff is not holding any non-vacational additional desigantions then add non-vacational leaves
    //make the vacational leaves inactive
    if($flag==true)
    {
        //currently the staff is not having any additional designation.
        //so take the vacational CL, RH and DL and add the non-vacational leave accordingly.
        //For EL check if the staff was non-vacational any time before and has accumlated EL.
        //Continue that EL for the current year.
        $staff_vacational_leaves=$staff->leave_staff_entitlements()->get();
        $non_vacational_leaves=leave::where('vacation_type','Non-Vacational')
                                    ->where('max_entitlement','>',0)
                                    ->where('shortname','not like','SML%')
                                    ->where('shortname','not like','ML')
                                    ->where('status','active')->get();

        foreach($non_vacational_leaves as $nvl)
        {
            foreach($staff_vacational_leaves as $svl)
            {
                if($nvl->shortname==$svl->shortname && $nvl->shortname!='EL')
                {
                    $end_year=Carbon::parse($request->end_date)->year;
                    if($curr_year>$end_year)
                    {
                        //additional designation has been given in the last days of previous year.
                        //and vacational leaves for the current year is already given as entitlement
                        //delete the current year non-vacational leave entitlement
                        //update the previous year non-vacational leaves
                        //and add vacational leaves for current year.
                        $current_year_leaves=staff::with(['leave_staff_entitlements'=>function($q)use($curr_year,$svl){
                            $q->where('leave_staff_entitlements.status','active')
                            ->where('leave_staff_entitlements.leave_id',$svl->id)
                            ->where('year',$curr_year);
                        }])->where('id',$staff->id)->first();
                        foreach($current_year_leaves->leave_staff_entitlements as $curr_year_leave)
                        {
                            $curr_year_leave->pivot->delete();
                        }
                    }
                    $staff_nvl=$staff->leave_staff_entitlements()
                                     ->attach($nvl->id,
                                              ['year'=>$year,
                                                'entitled_curr_year'=>0,
                                                'accumulated'=>$svl->pivot->accumlated,
                                                'total_encashed'=>$svl->pivot->total_encashed,
                                                'encashed_curr_year'=>$svl->pivot->encashed_curr_year,
                                                'consumed_curr_year'=>$svl->pivot->consumed_curr_year,
                                                'wef'=>$request->start_date,
                                                'status'=>'active']);
                }
            }
        }
        //check if the staff was non-vacational in the past.

        $previous_non_vacational_entitlements=staff::join('leave_staff_entitlements','leave_staff_entitlements.staff_id','=','staff.id')
        ->join('leaves','leaves.id','=','leave_staff_entitlements.leave_id')
        ->where('staff.id',$staff->id)
        ->where('leaves.vacation_type','Non-Vacational')
        ->where('leaves.shortname','EL')->orderBy('leave_staff_entitlements.id','desc')->first();
       if($previous_non_vacational_entitlements!=null)
       {
            $current_accumulated=$previous_non_vacational_entitlements->accumulated+($previous_non_vacational_entitlements->entitled_curr_year-$previous_non_vacational_entitlements->consumed_curr_year);
            $current_total_encashed=$previous_non_vacational_entitlements->total_encashed+$previous_non_vacational_entitlements->encashed_curr_year;
            $staff_nvl=$staff->leave_staff_entitlements()
                             ->attach($previous_non_vacational_entitlements->leave_id,
                                ['year'=>$year,
                                'entitled_curr_year'=>0,
                                'accumulated'=>$current_accumulated,
                                'encashed_curr_year'=>0,
                                'total_encashed'=> $current_total_encashed,
                                'wef'=>$request->start_date,
                                'status'=>'active']);
       }
       else
       {
            foreach($non_vacational_leaves as $nvl1)
            {
                //fetch the non-vacational leave that is EL and break on it to use that ID to update the leave
                if($nvl1->shortname=='EL')
                {
                    $staff_nvl=$staff->leave_staff_entitlements()
                                    ->attach($nvl1->id,
                                    ['year'=>$year,
                                    'entitled_curr_year'=>0,
                                    'accumulated'=>0,
                                    'encashed_curr_year'=>0,
                                    'total_encashed'=> 0,
                                    'wef'=>$request->start_date,
                                    'status'=>'active']);
                    break;
                }

            }

       }
       //this block will make the staff vacational leaves as inactive.
       foreach ($staff_vacational_leaves as $svl)
       {
            $leave_entitlement = 0;
            $year = Carbon::now()->year;
            $startdate = Carbon::createFromFormat('Y-m-d', $year . "-01-01");
            $no_of_days = floatval($startdate->diffInDays($request->startdate));

            if ($svl->shortname == 'CL'|| $svl->shortname == 'EL') {
                $leave_entitlement = round($no_of_days * $svl->max_entitlement) / 365;
                $svl->pivot->entitled_curr_year = $leave_entitlement;
            }
            $svl->pivot->status = 'inactive';
            $svl->pivot->update();
        }
    }

}

//
public function update_additional_desig(Request $request, staff $staff, $design_id)
{
    $additional_design=$staff->designations->where('pivot.id','=',$design_id);
    foreach($additional_design as $design){
    //dd($design->pivot);
    //section to close additional desigantion
    if($request->end_date!=null){
        //when closing an additional designation the non-vacational leaves must be made inactive
        // and vacational leaves must be added.
                $this->create_vacational_leaves($request,$staff,$design_id);
                $design->pivot->end_date=$request->end_date;
                //mark the additional designation status as inactive.
              //  $design->pivot->status='inactive';

        }

        $design->pivot->designation_id=$request->designation_id;
        $design->pivot->start_date=$request->start_date;
        $design->pivot->dept_id=$request->dept_id;
        $design->pivot->gcr=$request->gcr;
        $design->pivot->gcr_close=$request->gcr_close;
        $update_add_design_result=  $design->pivot->update();
        if($update_add_design_result){
                $status=1;
            }
            else{
                $status=0;
            }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);
    }
}
//This function is used to create the vactional leaves when an employee's additional designation  is closed.
//The process is to compute the fractional ELs for non-vacational and make all non-vacational leaves as inactive.
//Then create vacational leaves.  Which also requires computing of fracational vacational EL's.
public function create_vacational_leaves(request $request,staff $staff,$design_id)
{
    $check_staff_additional_designation=staff::with(['designations'=>function($q){
        $q->where('isvacational','Non-vacational')
        ->where('isadditional',1)
        ->where('designation_staff.status','active');
        }])->where('id',$staff->id)->first();

    //if the count of the above query == 1 => that the staff has only one additional designation
    //and we are closing that additional designation.
    //closing additional designation requires closing non-vacational leaves are creating vacational leaves.
    if(count($check_staff_additional_designation->designations)==1)
    {
        $end_year=Carbon::parse($request->end_date)->year;
        //if staff has only one additional designation then update the non-vacational leaves entitlements
        //and create vactional leave entitlements
        //if the count is more than one then the staff has two or more non-vacational designations hence
        //no change is leaves. So dont do any thing
        $staff_non_vacational_leaves=staff::with(['leave_staff_entitlements'=>function($q)use($end_year){
            $q->where('leaves.vacation_type','Non-Vacational')
            ->where('year',$end_year);
        }])->where('id',$staff->id)->first();

        $vacational_leaves=leave::with(['leave_rules'=>function($q){
                                        $q->where('status','active');
                                }])->where('vacation_type','Vacational')
                                ->where('max_entitlement','>',0)
                                ->where('shortname','not like','SML%')
                                ->where('shortname','not like','ML')
                                ->where('status','active')->get();

        foreach($vacational_leaves as $vl)
        {

            foreach($staff_non_vacational_leaves->leave_staff_entitlements as $snvl)
            {


                if($vl->shortname==$snvl->shortname)
                {

                    //if el entitlement is given for this year then update it for the no. of days the staff
                    //was non_vacational and create fractional vacational EL entitlement for the number of days remaining in the current year.
                    //else only create fractional vacational EL entitlement for the number of days remaining in the current year
                    //additional designation end date
                    $end_date=Carbon::parse($request->end_date);

                    if($snvl->pivot->entitled_curr_year>0 && ($snvl->shortname=="EL" || $snvl->shortname=="CL"))
                    {

                        //date at which the non-vacational EL entitlement was given.
                        // non-vacational EL are given on the date of the additional designation start_date
                        //example if a staff is assigned hod on 16th june 2022, then every year 16th june
                        //non-vacational EL entitlements is given from 2023 year onwards.
                        //So if the staff additional designation is getting closed on 25th Aug 2024
                        //then we need to check how many days the staff is on non-vacational post from
                        //june 16th 2024 to 25th aug 2024. That is 71 days the staff was on non-vacational
                        //so non-vacational leaves for 71 days out of 365 days must be given as EL entitlement.
                        //And the remaining days of 365 days, the staff is going to be vacational staff
                        //which means 294 days the staff is going to get vacational ELs
                        $entitlement_given_date=Carbon::parse($snvl->pivot->wef);
                        $diffdays=$entitlement_given_date->diffInDays($end_date);


                        $snvl->pivot->entitled_curr_year=ceil(($diffdays*$snvl->max_entitlement)/365);
                        $snvl->pivot->status='inactive';
                        $snvl->pivot->update(); //update the staff non_vacational leaves as per the above calculations.
                        $accumulated=0;
                        if($vl->leave_rules[0]->carry_forwardable=='Yes')
                        {
                            //fetch the staff vacational leaves that the staff was entitled after with_effect_from carry_forwardable date
                            $previous_vacational_leaves=leave_staff_entitlement::where('staff_id',$staff->id)
                                                        ->where('wef','>=',$vl->leave_rules[0]->cf_wef)
                                                        ->where('leave_id',$vl->id)
                                                        ->orderBy('year','desc')->first();

                            //check if the additional designation was closed at the end of the previous year and a new year has began.
                            //if new year has began, then leave entitlements for the new year will be generated on the 28th of Dec.
                            //hence, we need to delete the current year entitlements and add the vacational entitlements.

                            if($previous_vacational_leaves!=null)
                            {
                                 $accumulated=$previous_vacational_leaves->accumulated+$previous_vacational_leaves->entitled_curr_year-$previous_vacational_leaves->consumed_curr_year;
                            }

                        }
                        $encashed=0;
                        if($vl->leave_rules[0]->encashable=='Yes')
                        {
                            $previous_vacational_leaves=leave_staff_entitlement::where('staff_id',$staff->id)
                                                        ->where('wef','>=',$vl->leave_rules[0]->cf_wef)
                                                        ->where('leave_id',$vl->id)
                                                        ->orderBy('year','desc')->first();
                            if($previous_vacational_leaves!=null)
                            {
                                 $encashed=$previous_vacational_leaves->total_encashed+$previous_vacational_leaves->encashed_curr_year;
                            }

                        }
                        $curr_year=Carbon::now()->year;
                        $wef=$request->end_date;
                        $vacational_entitlement="";
                        if($curr_year>$end_year)
                        {
                            //if curr_year is > than end_year ==>that the additional designation was closed in the end days of previous year.
                            //so delete the entries for the current year
                            $current_year_leaves=staff::with(['leave_staff_entitlements'=>function($q)use($curr_year,$snvl){
                                $q->where('leave_staff_entitlements.status','active')
                                ->where('leave_staff_entitlements.leave_id',$snvl->id)
                                ->where('year',$curr_year);
                            }])->where('id',$staff->id)->first();
                            foreach($current_year_leaves->leave_staff_entitlements as $curr_year_leave)
                            {
                                $curr_year_leave->pivot->delete();
                            }
                            $vacational_entitlement=$vl->max_entitlement;
                            $wef=$curr_year."-01-01";
                        }
                        else
                        {
                            $vacational_entitlement=$vl->max_entitlement-floor(($diffdays*$vl->max_entitlement)/365);

                        }

                        $staff_entitlement=$staff->leave_staff_entitlements()->attach($vl->id,['year'=>$curr_year,
                                                                                            'entitled_curr_year'=>$vacational_entitlement,
                                                                                            'accumulated'=>$accumulated,
                                                                                            'total_encashed'=>$encashed,'wef'=>$wef]);
                    }
                    else
                    {
                        $curr_year=Carbon::now()->year;
                        $wef=$curr_year.'-01-01';

                        if($curr_year>$end_year)
                        {
                            //if curr_year is > than end_year ==>that the additional designation was closed in the end days of previous year.
                            //so delete the entries for the current year
                            $current_year_leaves=staff::with(['leave_staff_entitlements'=>function($q)use($curr_year,$snvl){
                                $q->where('leave_staff_entitlements.status','active')
                                ->where('leave_staff_entitlements.leave_id',$snvl->id)
                                ->where('year',$curr_year);
                            }])->where('id',$staff->id)->first();
                            foreach($current_year_leaves->leave_staff_entitlements as $curr_year_leave)
                            {
                                $curr_year_leave->pivot->delete();
                            }
                        }
                        else
                        {
                            $snvl->pivot->status='inactive';
                            $snvl->pivot->update();
                        }
                        $staff_entitlement=$staff->leave_staff_entitlements()->attach($vl->id,['year'=>$curr_year,
                                                                                                'entitled_curr_year'=>$vl->max_entitlement,
                                                                                                'accumulated'=>0,
                                                                                                'total_encashed'=>0,'wef'=>$wef]);
                    }
                }
            }


            // $startdate = Carbon::createFromFormat('Y-m-d', $year . "-01-01");

            // $no_of_days = floatval($startdate->diffInDays($request->startdate));
            // if ($vl->shortname == 'EL')
            // {
            //     $leave_ entitlement = round($no_of_days * $vl->max_entitlement) / 365;
            // }elseif ($vl->shortname == 'CL'){
            //     $leave_entitlement = round($no_of_days * $vl->max_entitlement) / 365;
            // }
            // $vl->pivot->entitled_curr_year = $leave_entitlement;
            // $vl->pivot->status = 'inactive';
            // $vl->pivot->update();
        }
    }
}


    //Destroy additional Designation entry
public function destroy_additional_desig(Request $request, staff $staff,$additional_design_id)
{
       // $additional_design=$staff::with('designations')->newPivotQuery()->where('id',$additional_design_id)->delete();
     $additional_design=  DB::table('designation_staff')
          ->where('id', $additional_design_id)
          ->take(1)
          ->delete();
        if($additional_design){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);

    }



  }
