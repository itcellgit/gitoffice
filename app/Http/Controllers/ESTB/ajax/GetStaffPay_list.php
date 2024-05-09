<?php

namespace App\Http\Controllers\ESTB\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\designation;
use Illuminate\Support\Facades\DB;
use App\Models\staff;

class GetStaffPay_list extends Controller
{
    
    public function getstaffpays(request $request)
    {
       
        $designation_id=$request->input('designation_id');// Get the selected option from the designation_id dropdown
        $designations = designation::find($designation_id);
        //dd($designations);
        $emp_type=$request->input('emp_type');
        
        if($emp_type=='Teaching'){
            $teachingpayscales =DB::table('teaching_payscales')->where('status','active')->get();

            $response_text = "
                                <label class='ti-form-label mb-0 font-bold'>Payscale</label>
                                <select class='ti-form-select' name='payscale_id' id='payscale_id'>";
            foreach($teachingpayscales as $tp){
                $response_text=$response_text."<option value='".$tp->id."' >".$tp->payscale_title."-".$tp->basepay."-".$tp->basepay."-".$tp->maxpay."-".$tp->agp."</option>";
            }        
                                 
            $response_text .=  " </select>
                        ";
          //  return response()->json($teachingpayscales); // Return the options as JSON
          return response($response_text); // Return the options as JSON
        }
        else{
           
            $pay_type=$request->input('pay_type');
            if($pay_type=='Consolidated')
            {
               
                $response_text="<div class='space-y-2' id='nt_consolidated_pay_div'>
                <label for='' class='ti-form-label mb-0 font-bold'>Consolidated Pay </label>
                    <select class='ti-form-select' name='payscales_id' id='nt_consolidated_pay'>";
                $ntc_payscale=$designations->load('ntcpayscales');
                
                //dd( $ntc_payscale);
                    
                    foreach ($ntc_payscale->ntcpayscales as $payscale_ntc)
                    {
                        $response_text=$response_text."<option value='".$payscale_ntc->id."' >".$ntc_payscale->design_name."-".$payscale_ntc->basepay."-".$payscale_ntc->allowance."- Year : ".$payscale_ntc->year."</option>";
                    }
                
                
                $response_text=$response_text."</select></div>"; 
             
               // dd( $response_text);
                return response($response_text); // Return the options as JSON
            }
            else{
               $non_teaching_payscale=$designations->load('ntpayscales');
               // $non_teaching_payscale=designation::with('ntpayscales')->where('id',$designation_id)->get();
                $response_text="<div class='space-y-2' id='nt_payscale_div'>
                <label class='ti-form-label mb-0 font-bold'>Payscale</label>
                <select class='ti-form-select' name='payscales_id'>";
                
                    foreach ($non_teaching_payscale->ntpayscales as $payscale_ntp)
                    {
                        $response_text= $response_text."<option value='$payscale_ntp->id' >".$non_teaching_payscale->design_name."-".$payscale_ntp->payband."</option>";
            
                    }
                    
                  
                    $response_text =  $response_text. "</select>
                            </div>    
                            <div class='space-y-2  id='payscalelevel'>
                            <label class='ti-form-label mb-0 font-bold'>Increment Level </label>
                            <select class='ti-form-select' name='payscale_level' id='payscale_level'>
                                <option value='null'>Choose the payscale level </option>
                                <option value='1'>Increment Level-1</option>
                                <option value='2'>Increment Level-2</option>
                                <option value='3' >Increment Level-3</option>
                            </select>
                        </div>";
                return response( $response_text ); // Return the options as JSON
            }
        }
    }
}
