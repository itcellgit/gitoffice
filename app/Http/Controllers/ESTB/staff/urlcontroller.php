<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\association;
use Illuminate\Support\Facades\DB;
use App\Models\consolidated_teaching_pay;
use App\Models\fixed_nt_pay;
use App\Models\designation;

class urlcontroller extends Controller
{

    //fetching all the function in ESTB login
    public function qualifications(staff $staff)
    {
        $qualifications =DB::table('qualifications')->where('status','active')->get();
       
        return view('/ESTB/staff/staffqualification',compact(['staff','qualifications']));
    }
     
    public function assocaitons(staff $staff){
        $associations = association::where('status','active')->get();
        return view('/ESTB/staff/staffassociation',compact(['staff','associations']));
    }

    public function departments(staff $staff){
        $departments = DB::table('departments')->where('status','active')->get();
        return view('/ESTB/staff/staffdepartments',compact(['staff','departments']));
    }

    public function designationpayscales(staff $staff){
        $emp_type=$staff->latest_employee_type()->first();
        $designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',0)->get();
       $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',1)->get();
       //dd($staff->employee_type);
       $payscales="";
       
            $payscales=DB::table('teaching_payscales')->where('status','active')->get();   
            $consolidated_teaching_pay=consolidated_teaching_pay::where('staff_id',$staff->id)->get();

            // $payscales=DB::table('ntpayscales')->where('status','active')->get(); 
            $ntpayscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
       
       // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
            $ntcpayscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
            $fixed_nt_pay=fixed_nt_pay::where('staff_id',$staff->id)->orderBy('id','desc')->get();
            
            $departments = DB::table('departments')->where('status','active')->get();
        

        
       return view('/ESTB/staff/staffdesignationpayscale',compact(['staff','designations','add_designations','payscales','ntpayscales','consolidated_teaching_pay','ntcpayscales','fixed_nt_pay','departments']));
       
    } 

    //annualincrement

    public function qualification(staff $staff)
    {
        $qualifications =DB::table('qualifications')->where('status','active')->get();
       
        return view('/Teaching/staff/qualifications',compact(['staff','qualifications']));
    }

    public function  annual_increment(staff $staff){
        //dd($staff);
       //$festivaladvance = DB::table('festival_advance')->where('status','active')->get();
        $staff=staff::with('annualIncrement')->where('id',$staff->id)->first();
        //dd($staff);
        return view('ESTB/staff.annualincrement',compact('staff'));
    }
     //fetivaladvance
     public function festival_advance(staff $staff){
        //dd($staff);
       //$festivaladvance = DB::table('festival_advance')->where('status','active')->get();
        $staff=staff::with('FestivalAdvance')->where('id',$staff->id)->first();
        //dd($staff);
        return view('/ESTB/staff/festivaladvance',compact('staff'));
    }

     //laptoploan
    public function  laptoploan(staff $staff){
        //dd($staff);
       //$festivaladvance = DB::table('festival_advance')->where('status','active')->get();
        $staff=staff::with('laptoploan')->where('id',$staff->id)->first();
        //dd($staff);
        return view('/ESTB/staff/laptoploan',compact('staff'));
    }



    
     
   //fetching all the function in DEAN ADMIN  login

    public function da_qualifications(staff $staff)
    {
        $qualifications =DB::table('qualifications')->where('status','active')->get();
       
        return view('/Dean_admin/staff/staffqualification',compact(['staff','qualifications']));
    }
     

    public function da_assocaitons(staff $staff){
        $associations = association::where('status','active')->get();
        return view('/Dean_admin/staff/staffassociation',compact(['staff','associations']));
    }


    public function da_departments(staff $staff){
        $departments = DB::table('departments')->where('status','active')->get();
        return view('/Dean_admin/staff/staffdepartments',compact(['staff','departments']));
    }

    
    public function da_designationpayscales(staff $staff){
        $emp_type=$staff->latest_employee_type()->first();
        $designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',0)->get();
       $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',1)->get();
       //dd($staff->employee_type);
       $payscales="";
       
            $payscales=DB::table('teaching_payscales')->where('status','active')->get();   
            $consolidated_teaching_pay=consolidated_teaching_pay::where('staff_id',$staff->id)->get();

            // $payscales=DB::table('ntpayscales')->where('status','active')->get(); 
            $ntpayscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
       
       // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
            $ntcpayscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
            $fixed_nt_pay=fixed_nt_pay::where('staff_id',$staff->id)->orderBy('id','desc')->get();
            
            $departments = DB::table('departments')->where('status','active')->get();
        

        
       return view('/Dean_admin/staff/staffdesignationpayscale',compact(['staff','designations','add_designations','payscales','ntpayscales','consolidated_teaching_pay','ntcpayscales','fixed_nt_pay','departments']));
       
    } 


    
    //Fetching all the  function PRINCIPAL LOGIN
    public function principal_departments(staff $staff){
        $departments = DB::table('departments')->where('status','active')->get();
        return view('/PRINCIPAL/staff/departments',compact(['staff','departments']));
    }


    public function principal_assocaitons(staff $staff){
        $associations = association::where('status','active')->get();
        return view('/PRINCIPAL/staff/associations',compact(['staff','associations']));
    }



    public function principal_designationpayscales(staff $staff){
        $emp_type=$staff->latest_employee_type()->first();
        $designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',0)->get();
       $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',1)->get();
       //dd($staff->employee_type);
       $payscales="";
       
            $payscales=DB::table('teaching_payscales')->where('status','active')->get();   
            $consolidated_teaching_pay=consolidated_teaching_pay::where('staff_id',$staff->id)->get();

            // $payscales=DB::table('ntpayscales')->where('status','active')->get(); 
            $ntpayscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
       
       // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
            $ntcpayscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->latest()->get();
            $fixed_nt_pay=fixed_nt_pay::where('staff_id',$staff->id)->orderBy('id','desc')->get();
            
            $departments = DB::table('departments')->where('status','active')->get();
       
       return view('/PRINCIPAL/staff/staffdesignations',compact(['staff','designations','add_designations','payscales','ntpayscales','consolidated_teaching_pay','ntcpayscales','fixed_nt_pay','departments']));
       
    } 

    public function principal_qualifications(staff $staff)
    {
        $qualifications =DB::table('qualifications')->where('status','active')->get();
       
        return view('/PRINCIPAL/staff/staffqualifications',compact(['staff','qualifications']));
    }

    
    public function stafflics(staff $staff)
    {
        $staff=staff::with('stafflics')->where('id',$staff->id)->first();
        return view('/ESTB/staff/stafflics',compact('staff'));
    }

}
