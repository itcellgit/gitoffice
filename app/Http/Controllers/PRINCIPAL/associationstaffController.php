<?php

namespace App\Http\Controllers\PRINCIPAL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\association;
use Illuminate\Support\Facades\DB;
use App\Models\consolidated_teaching_pay;
use Illuminate\Support\Carbon;

class associationstaffController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, staff $staff)
    {
     //   dd($request->associations_id);
        switch($request->associations_id){
            case 1://Visiting
            case 2: //Adjunct
            case 4://Contractual
                $staff_latest_asso=$staff->latestassociation()->first();
                if($staff_latest_asso!=null){
                       
                 //  $updateresult=$staff->associations()->updateExistingPivot($staff->latestassociation[0]->id,['end_date'=>$request->start_date,'status'=>'inactive','updated_at'=>Carbon::now()->toDateTimeString()]);
                    $staff_latest_asso->pivot->end_date=$request->start_date;
                    $staff_latest_asso->pivot->status='inactive';
                    $staff_latest_asso->pivot->updated_at=Carbon::now()->toDateTimeString();
                    $updateresult= $staff_latest_asso->pivot->update();
                }
                $insertnewasso=$staff->associations()->attach($request->associations_id,['start_date'=>$request->start_date,'closing_date'=>$request->closing_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'created_at'=>Carbon::now()->toDateTimeString()]);
        
                if($insertnewasso ){
                    $status=1;
                }
                else
                {
                    DB::rollBack();
                    $status=0;
                }
                break;
            case 5://Probationary
            case 6://Confirmed
            case 7: //Temporary (non teaching)
                    //for the above cases update the existing association by adding end_date and insert the new association
                    $staff_latest_asso=$staff->latestassociation()->first();
                    if($staff_latest_asso!=null){
                        // $staff=$staff->load('latestassociation');
        
                     //   $updateresult=$staff->associations()->updateExistingPivot($staff->latestassociation[0]->id,['end_date'=>$request->start_date,'status'=>'inactive','updated_at'=>Carbon::now()->toDateTimeString()]);
                        $staff_latest_asso=$staff->latestassociation()->first();
                        $staff_latest_asso->pivot->end_date=$request->start_date;
                        $staff_latest_asso->pivot->status='inactive';
                        $staff_latest_asso->updated_at=Carbon::Now();
                        $updateresult=$staff_latest_asso->pivot->update();
                    }
                    
                    $insertnewasso=$staff->associations()->attach($request->associations_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'created_at'=>Carbon::now()->toDateTimeString()]);
            
                    if($insertnewasso ){
                        $status=1;
                    }
                    else
                    {
                        DB::rollBack();
                        $status=0;
                    }
                        break;
            case 8: //Transfered
            case 9: //Retired
            case 10: //Resigned
            case 11: //Terminated
                // for all above three cases set end_date for department, designation, payscales & association
                
                $closeall_status=$this->closeall($request,$staff);
                $insertnewasso=$staff->associations()->attach($request->associations_id,['start_date'=>$request->start_date,'reason'=>$request->reason,'gcr'=>$request->gcr,'created_at'=>Carbon::now()->toDateTimeString()]);
                if($closeall_status ==1 && $insertnewasso){
                    $status=1;
                }else{
                    $status=0;
                }
                break;

        }
        
        
        return redirect('PRINCIPAL/staff/staffview'.$staff->id)->with('status',$status);
    }

    public function updatecurrent(request $request, staff $staff, $sasso_id)
    {
        //dd($sasso_id);
        //dd($request);
        if( $request->associations_id==4 && $request->close_forever){
            $status=$this->closeallcontractual($request,$staff);
        }
        //resigned, terminated, superannuated, transferred
        elseif($request->associations_id==8 ||$request->associations_id==9||$request->associations_id==10||$request->associations_id==11)
        {
            $status=$this->closeall($request,$staff);
        }
        else
        {
          
            if($request->associations_id==4)//Association id =4 means contractual
            {
                //dd($request);
                //$updateresult= $staff->associations()->updateExistingPivot($sasso_id,['association_id'=>$request->associations_id,'start_date'=>$request->start_date,'closing_date'=>$request->closing_date,'reason'=>$request->reason,'gcr'=>$request->gcr]);
                $staff_latest_asso=$staff->latestassociation()->first();
                if($staff_latest_asso->pivot->start_date!=$request->start_date){
                    //dd('dates are not same');
                     $staff_association =  $staff->associations()->latest()->get(); //fetch all associations of that staff
                    
                    foreach($staff_association AS $staff_asso){
                        //check if end date of previous association is same as latest association start date
                       
                        if($staff_latest_asso->pivot->start_date == $staff_asso->pivot->end_date){
                            //dd('Both are matching');
                            //dd($staff_asso);
                            $staff_asso->pivot->end_date = $request->start_date;
                            $staff_asso->pivot->update();
                        }
                    }
                    $staff_latest_asso->pivot->start_date=$request->start_date;
                }

                
                
                $staff_latest_asso->pivot->association_id=$request->associations_id;
                
                $staff_latest_asso->pivot->closing_date=$request->closing_date;
                $staff_latest_asso->pivot->reason=$request->reason;
                $staff_latest_asso->pivot->gcr=$request->gcr;
                $updateresult=$staff_latest_asso->pivot->update();
            }
             else
             {
                
                $staff_latest_asso=$staff->latestassociation()->first();
                //for checking if the current association is edited with a different date, then the very previous asociations date needs to be altered.
                if($staff_latest_asso->pivot->start_date!=$request->start_date){
                    //dd('dates are not same');
                     $staff_association =  $staff->associations()->latest()->get(); //fetch all associations of that staff
                    
                    foreach($staff_association AS $staff_asso){
                        //check if end date of previous association is same as latest association start date
                       
                        if($staff_latest_asso->pivot->start_date == $staff_asso->pivot->end_date){
                            //dd('Both are matching');
                            //dd($staff_asso);
                            $staff_asso->pivot->end_date = $request->start_date;
                            $staff_asso->pivot->update();
                        }
                    }
                    $staff_latest_asso->pivot->start_date=$request->start_date;
                }

                if($staff_latest_asso->pivot->association_id==4)
                {
                    $staff_latest_asso->pivot->closing_date=null;
                }
                $staff_latest_asso->pivot->association_id=$request->associations_id;
                //$staff_latest_asso->pivot->start_date=$request->start_date;
                $staff_latest_asso->pivot->reason=$request->reason;
                $staff_latest_asso->pivot->gcr=$request->gcr;
                $updateresult= $staff_latest_asso->pivot->update();
            }
            if($updateresult)
            {
                $status=1;
            }
            else
            {
                $status=0;
            }
        }
        return redirect('PRINCIPAL/staff/staffview'.$staff->id)->with('status',$status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff,$asso_id)
    {
        $delete=$staff->associations()->detach($asso_id);
        if($delete){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('PRINCIPAL/staff/staffview'.$staff->id)->with('status',$status);
    }

    
    public function closeall(request $request,staff $staff){

        $status=0;
        
        
                //$updateresult=$staff->associations()->updateExistingPivot($staff->latestassociation[0]->id,['end_date'=>$request->start_date,'status'=>'inactive','updated_at'=>Carbon::now()->toDateTimeString()]);
                $staff_latest_asso=$staff->latestassociation()->first();
                $staff_latest_asso->pivot->end_date=$request->start_date;
                $staff_latest_asso->pivot->status='inactive';
               $staff_latest_asso->pivot->updated_at=Carbon::now()->toDateTimeString();
                $updateresult=$staff_latest_asso->pivot->update();
                $staff_latest_dept=$staff->activedepartments()->first();
                $staff_latest_dept->pivot->status='inactive';
                $staff_latest_dept->pivot->end_date=$request->start_date;
                $staff_latest_dept->pivot->updated_at=Carbon::now()->toDateTimeString();
                $staff_latest_dept->pivot->gcr=$request->gcr;
                $staff_latest_dept->pivot->reason=$request->reason;
                
                $staff_latest_dept->pivot->update();

                $staff_latest_design=$staff->latestDesignation()->first();
                $staff_latest_design->pivot->status='inactive';
                $staff_latest_design->pivot->end_date=$request->start_date;
                $staff_latest_design->pivot->updated_at=Carbon::now()->toDateTimeString();
                $staff_latest_design->pivot->update();

                //For closing the latest (active) additional designation.
                $staff_latest_additonal_design=$staff->latest_additional_designation()->first();
                if($staff_latest_additonal_design!=null)
                {
                     $staff_latest_additonal_design->pivot->status='inactive';
                    $staff_latest_additonal_design->pivot->end_date=$request->start_date;
                    $staff_latest_additonal_design->pivot->reason=$request->reason;
                    $staff_latest_additonal_design->pivot->updated_at=Carbon::now()->toDateTimeString();
                    $staff_latest_additonal_design->pivot->update();
                    //dd($staff_latest_additonal_design);
                }
               

                if($staff->employee_type=="Teaching")
                {
                    $staff_latest_payscale=$staff->latestteaching_payscale()->first();
                    
                    if($staff_latest_payscale!=null)
                    {
                        $staff_latest_payscale->pivot->status='inactive';
                        $staff_latest_payscale->pivot->end_date=$request->start_date;
                        $staff_latest_payscale->pivot->reason=$request->reason;
                        $staff_latest_payscale->pivot->gcr=$request->gcr;
                        $staff_latest_payscale->pivot->updated_at=Carbon::now()->toDateTimeString();
                        $staff_latest_payscale->pivot->update();

                        

                        if($staff_latest_dept && $staff_latest_design && $staff_latest_payscale){
                            $status=1;
                        }
                        else
                        {
                            DB::rollBack();
                            $status=0;
                        }
                    }
                   

                    //checking fore consolidated teaching pay.
                    $consolidated_teaching_pay=$staff->latest_consolidated_teaching_pay()->first();
                    //dd($consolidated_teaching_pay);
                    if($consolidated_teaching_pay!=null)
                    {
                         
                         $consolidated_teaching_pay->status='inactive';
                         $consolidated_teaching_pay->end_date=$request->start_date;
                         $consolidated_teaching_pay->reason=$request->reason;
                         $consolidated_teaching_pay->gcr=$request->gcr;
                         $consolidated_teaching_pay->updated_at=Carbon::now()->toDateTimeString();
                         $consolidated_teaching_pay->update();

                         if($staff_latest_dept && $staff_latest_design &&  $consolidated_teaching_pay){
                            $status=1;
                        }
                        else
                        {
                           DB::rollBack();
                            $status=0;
                        }
                      
                    }
                   
                    
                }
                else
                {
                        //non-teaching payscale at end_date
                        $staff_latest_payscale=$staff->latestntpayscale()->first();
                       // dd($staff_latest_payscale);
                       if($staff_latest_payscale!=null)
                       {
                        $staff_latest_payscale->pivot->status = 'inactive';
                        $staff_latest_payscale->pivot->end_date=$request->start_date;
                        $staff_latest_payscale->pivot->reason=$request->reason;
                        $staff_latest_payscale->pivot->gcr=$request->gcr;
                        $staff_latest_payscale->pivot->updated_at=Carbon::now()->toDateTimeString();
                        //dd($staff_latest_payscale);
                        $staff_latest_payscale->pivot->update();

                            if($staff_latest_dept && $staff_latest_design &&  $staff_latest_payscale){
                                $status=1;
                            }
                            else
                            {
                            DB::rollBack();
                                $status=0;
                            }
                       }

                       //for Non teaching consolidated paycale (updating)(closing).
                       $staff_latest_ntcpayscale=$staff->latestntcpayscale()->first();
                       //dd($staff_latest_ntcpayscale);
                       if($staff_latest_ntcpayscale !=null){
                            $staff_latest_ntcpayscale->pivot->status = 'inactive';
                            $staff_latest_ntcpayscale->pivot->end_date=$request->start_date;
                            $staff_latest_ntcpayscale->pivot->reason = $request->reason;
                            $staff_latest_ntcpayscale->pivot->gcr=$request->gcr;
                            $staff_latest_ntcpayscale->pivot->updated_at=Carbon::now()->toDateTimeString();
                            $staff_latest_ntcpayscale->pivot->update();

                            if($staff_latest_dept && $staff_latest_design &&  $staff_latest_ntcpayscale){
                                $status=1;
                            }
                            else
                            {
                            DB::rollBack();
                                $status=0;
                            }

                       }
                       //No-Teaching fixed payscale Loading (For Closing)
                       $staff_fixed_nt_pay=$staff->latestfixedntpay()->first();
                       //dd($staff_fixed_nt_pay);
                      
                       
                    if($staff_fixed_nt_pay!=null){
                        $staff_fixed_nt_pay->status = 'inactive';
                        $staff_fixed_nt_pay->end_date = $request->start_date;
                        $staff_fixed_nt_pay->reason = $request->reason;
                        $staff_fixed_nt_pay->gcr =$request->gcr;
                        $staff_fixed_nt_pay->updated_at=Carbon::now()->toDateTimeString();
                       // dd($staff_fixed_nt_pay);
                        $staff_fixed_nt_pay->update();

                        if($staff_latest_dept && $staff_latest_design &&  $staff_fixed_nt_pay){
                            $status=1;
                        }
                        else
                        {
                        DB::rollBack();
                            $status=0;
                        }
                    }
                       
                }
                return $status;
    }
    public function closeallcontractual(request $request,staff $staff){

        $status=0;
        
       
              //  $updateresult=$staff->associations()->updateExistingPivot($staff->latestassociation[0]->id,['end_date'=>$request->closing_date,'status'=>'inactive','updated_at'=>Carbon::now()->toDateTimeString()]);
            $staff_latest_asso=$staff->latestassociation()->first();
           //  dd($staff_latest_asso->pivot->closing_date);
            $staff_latest_asso->pivot->end_date=$staff_latest_asso->pivot->closing_date;
            $staff_latest_asso->pivot->status='inactive';
           // dd($staff_latest_asso);
            $staff_latest_asso->pivot->update();
              $staff_latest_dept=$staff->activedepartments()->get();
            foreach($staff_latest_dept as $staff_dept)
            {
                $staff_dept->pivot->status='inactive';
                $staff_dept->pivot->end_date=$request->closing_date;
                $staff_dept->pivot->updated_at=Carbon::now()->toDateTimeString();
                $staff_dept->pivot->gcr=$request->gcr;
                $staff_dept->pivot->reason=$request->reason;
                $staff_dept->pivot->update();
            }
                

                $staff_latest_design=$staff->latestDesignation()->first();
                //dd($staff_latest_design);
                $staff_latest_design->pivot->status='inactive';
                $staff_latest_design->pivot->end_date=$request->closing_date;
                $staff_latest_design->pivot->updated_at=Carbon::now()->toDateTimeString();
                $staff_latest_design->pivot->update();

                //For closing the latest (active) additional designation.
                $staff_latest_additonal_design=$staff->latest_additional_designation()->first();
                if($staff_latest_additonal_design!=null)
                {
                     $staff_latest_additonal_design->pivot->status='inactive';
                    $staff_latest_additonal_design->pivot->end_date=$request->closing_date;
                    $staff_latest_additonal_design->pivot->reason=$request->reason;
                    $staff_latest_additonal_design->pivot->updated_at=Carbon::now()->toDateTimeString();
                    $staff_latest_additonal_design->pivot->update();
                    //dd($staff_latest_additonal_design);
                }
               
            $emp_type=$staff->latest_employee_type()->first();

                if($emp_type->employee_type=="Teaching")
                {
                    $staff_latest_payscale=$staff->latestteaching_payscale()->first();
                    
                    if($staff_latest_payscale!=null)
                    {
                        $staff_latest_payscale->pivot->status='inactive';
                        $staff_latest_payscale->pivot->end_date=$request->closing_date;
                        $staff_latest_payscale->pivot->reason=$request->reason;
                        $staff_latest_payscale->pivot->gcr=$request->gcr;
                        $staff_latest_payscale->pivot->updated_at=Carbon::now()->toDateTimeString();
                        $staff_latest_payscale->pivot->update();

                        

                        if($staff_latest_dept && $staff_latest_design && $staff_latest_payscale){
                            $status=1;
                        }
                        else
                        {
                            DB::rollBack();
                            $status=0;
                        }
                    }
                   

                    //checking fore consolidated teaching pay.
                    $consolidated_teaching_pay=$staff->latest_consolidated_teaching_pay()->first();
                    //dd($consolidated_teaching_pay);
                    if($consolidated_teaching_pay!=null)
                    {
                         
                         $consolidated_teaching_pay->status='inactive';
                         $consolidated_teaching_pay->end_date=$request->closing_date;
                         $consolidated_teaching_pay->reason=$request->reason;
                         $consolidated_teaching_pay->gcr=$request->gcr;
                         $consolidated_teaching_pay->updated_at=Carbon::now()->toDateTimeString();
                         $consolidated_teaching_pay->update();

                         if($staff_latest_dept && $staff_latest_design &&  $consolidated_teaching_pay){
                            $status=1;
                        }
                        else
                        {
                           DB::rollBack();
                            $status=0;
                        }
                      
                    }
                   
                    
                }
                else
                {
                        //non-teaching payscale at end_date
                        $staff_latest_payscale=$staff->latestntpayscale()->first();
                       // dd($staff_latest_payscale);
                       if($staff_latest_payscale!=null)
                       {
                        $staff_latest_payscale->pivot->status = 'inactive';
                        $staff_latest_payscale->pivot->end_date=$request->closing_date;
                        $staff_latest_payscale->pivot->reason=$request->reason;
                        $staff_latest_payscale->pivot->gcr=$request->gcr;
                        $staff_latest_payscale->pivot->updated_at=Carbon::now()->toDateTimeString();
                        //dd($staff_latest_payscale);
                        $staff_latest_payscale->pivot->update();

                            if($staff_latest_dept && $staff_latest_design &&  $staff_latest_payscale){
                                $status=1;
                            }
                            else
                            {
                            DB::rollBack();
                                $status=0;
                            }
                       }

                       //for Non teaching consolidated paycale (updating)(closing).
                       $staff_latest_ntcpayscale=$staff->latestntcpayscale()->first();
                       //dd($staff_latest_ntcpayscale);
                       if($staff_latest_ntcpayscale !=null){
                            $staff_latest_ntcpayscale->pivot->status = 'inactive';
                            $staff_latest_ntcpayscale->pivot->end_date=$request->closing_date;
                            $staff_latest_ntcpayscale->pivot->reason = $request->reason;
                            $staff_latest_ntcpayscale->pivot->gcr=$request->gcr;
                            $staff_latest_ntcpayscale->pivot->updated_at=Carbon::now()->toDateTimeString();
                            $staff_latest_ntcpayscale->pivot->update();

                            if($staff_latest_dept && $staff_latest_design &&  $staff_latest_ntcpayscale){
                                $status=1;
                            }
                            else
                            {
                            DB::rollBack();
                                $status=0;
                            }

                       }
                       //No-Teaching fixed payscale Loading (For Closing)
                       $staff_fixed_nt_pay=$staff->latestfixedntpay()->first();
                       //dd($staff_fixed_nt_pay);
                      
                       
                    if($staff_fixed_nt_pay!=null){
                        $staff_fixed_nt_pay->status = 'inactive';
                        $staff_fixed_nt_pay->end_date = $request->closing_date;
                        $staff_fixed_nt_pay->reason = $request->reason;
                        $staff_fixed_nt_pay->gcr =$request->gcr;
                        $staff_fixed_nt_pay->updated_at=Carbon::now()->toDateTimeString();
                       // dd($staff_fixed_nt_pay);
                        $staff_fixed_nt_pay->update();

                        if($staff_latest_dept && $staff_latest_design &&  $staff_fixed_nt_pay){
                            $status=1;
                        }
                        else
                        {
                        DB::rollBack();
                            $status=0;
                        }
                    }
                       
                }
                return $status;
    }
}

