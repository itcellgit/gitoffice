<?php

namespace App\Http\Controllers\ESTB\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\ESTB\TaxHeads;
use App\Models\association;
use Illuminate\Support\Facades\DB;
use App\Models\consolidated_teaching_pay;
use App\Models\fixed_nt_pay;
use App\Models\leave;
use App\Models\designation;
use Illuminate\Support\Carbon;

class urlcontroller extends Controller
{

    //fetching all the function in ESTB login
    public function qualifications(staff $staff)
    {
        $qualifications =DB::table('qualifications')->where('status','active')->get();
       
        return view('/ESTB/staff/staffqualification',compact(['staff','qualifications']));
    }

    //ESTB staff Leave Entilement 
    // public function leave_entitlement(staff $staff)
    // {
    //     // $s = new ScheduledJobs();
    //     // $s->yearly_leave_entitlements();
    //      $year=Carbon::now()->year;

    //     $leave_types=leave::select('shortname')->distinct('shortname')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();

    //     $leave_types_taken = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";
    //     // $staff=DB::select($query);
    //     // $leave_types_balance = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";
    //     // Create the subquery for concatenating departments.


    //             //compute the sum of no_of_days for each leave type for each staff
    //             $sum_days=DB::table('leave_staff_applications')
    //                 ->join('leaves','leaves.id','=','leave_staff_applications.leave_id')
    //                 ->where('leave_staff_applications.appl_status','!=','rejected')
    //                 ->select('staff_id', 'leaves.shortname',DB::raw("sum(no_of_days) as total_days"))
    //                 ->groupBy('leave_staff_applications.staff_id',
    //                           'leave_staff_applications.leave_id',
    //                           'leaves.shortname')->get();
      
    //                 $staff = Staff::with(['leave_staff_entitlements' => function ($q) {
    //                     $q->wherePivot('status', 'active');
    //                 }])->whereIn('id', function ($q) {
    //                     $q->select('staff_id')
    //                         ->from('association_staff')
    //                         ->whereIn('association_id', function ($q1) {
    //                             $q1->select('id')
    //                                 ->from('associations')
    //                                 ->where('asso_name', 'like', '%Confirmed%')
    //                                 ->orWhere('asso_name', 'like', '%Contractual%')
    //                                 ->orWhere('asso_name', 'like', '%Probationary%')
    //                                 ->orWhere('asso_name', 'like', '%Temporary (non teaching)%')
    //                                 ->orWhere('asso_name', 'like', '%Promotional Probationary%');
    //                         });
    //                 })
    //                 ->get();
                   
                  
                               
                
    //               //  dd($staff);

    //                 $data=[];
    //                 foreach($staff as $st)
    //                 {
    //                     $data[$st->id]=[];
    //                     $data[$st->id]['id']=$st->id;
    //                     $data[$st->id]['name']=$st->fname." ".$st->mname." ".$st->lname;
    //                     foreach($st->leave_staff_entitlements as $lse)
    //                     {
    //                         $data[$st->id][$lse->shortname]=[];
    //                         $data[$st->id][$lse->shortname]['entitled']=$lse->pivot->entitled_curr_year;
    //                         $data[$st->id][$lse->shortname]['availed']=$lse->pivot->consumed_curr_year;
    //                         $data[$st->id][$lse->shortname]['balance']=$data[$st->id][$lse->shortname]['entitled']+$lse->pivot->accumulated-$data[$st->id][$lse->shortname]['availed'];
    //                     }
    //                     foreach($sum_days as $sd)
    //                     {
    //                         if($sd->staff_id==$st->id)
    //                         {
    //                             $is_different_leave=true;
    //                             foreach($st->leave_staff_entitlements as $lse)
    //                             {
    //                                 if($lse->shortname==$sd->shortname)
    //                                 {
    //                                     $is_different_leave=false;
    //                                 }
    //                             }
    //                             if($is_different_leave)
    //                             {
    //                                 $data[$st->id][$sd->shortname]['availed']=$sd->total_days;
    //                             }
    //                         }

    //                     }
    //                 }
    //              //   dd($data);
    //             //  foreach($data as $d)
    //             //     foreach($leave_types as $l)
    //             //           dd($d[$l->shortname]['entitled']);
    //     return view('/ESTB/staff/staffleave',compact(['data','leave_types','leave_types_taken','year'])); //,compact(['Leave_rules','filter']
    // }

    public function leave_entitlement(Staff $staff)
    {
        $year = Carbon::now()->year;
    
        $leave_types = Leave::select('shortname')->distinct('shortname')->where('max_entitlement', '>', 0)->where('shortname', 'not like', 'SML%')->where('shortname', 'not like', 'ML')->where('status', 'active')->get();
        //dd($leave_types);
        $leave_types_taken = Leave::select('shortname')->distinct('shortname')->where('shortname', 'not like', 'SML%')->where('shortname', 'not like', 'ML')->where('status', 'active')->get();
    
        $sum_days = DB::table('leave_staff_applications')->join('leaves', 'leaves.id', '=', 'leave_staff_applications.leave_id')->where('leave_staff_applications.appl_status', '!=', 'rejected')->where('leave_staff_applications.staff_id', $staff->id)->select('staff_id', 'leaves.shortname', DB::raw("sum(no_of_days) as total_days"))->groupBy('leave_staff_applications.staff_id', 'leave_staff_applications.leave_id', 'leaves.shortname')->get();
    
        $staff_leave_entitlements = $staff->leave_staff_entitlements()
            ->wherePivot('status', 'active')
            ->get();
    
        $data = [];
        $data[$staff->id] = [];
        $data[$staff->id]['id'] = $staff->id;
        $data[$staff->id]['name'] = $staff->fname . " " . $staff->mname . " " . $staff->lname;
    
        foreach ($staff_leave_entitlements as $lse) {
            $data[$staff->id][$lse->shortname] = [];
            $data[$staff->id][$lse->shortname]['entitled'] = $lse->pivot->entitled_curr_year;
            $data[$staff->id][$lse->shortname]['availed'] = $lse->pivot->consumed_curr_year;
            $data[$staff->id][$lse->shortname]['balance'] = $data[$staff->id][$lse->shortname]['entitled'] + $lse->pivot->accumulated - $data[$staff->id][$lse->shortname]['availed'];
        }
    
        foreach ($sum_days as $sd) {
            $is_different_leave = true;
            foreach ($staff_leave_entitlements as $lse) {
                if ($lse->shortname == $sd->shortname) {
                    $is_different_leave = false;
                }
            }
            if ($is_different_leave) {
                $data[$staff->id][$sd->shortname]['availed'] = $sd->total_days;
            }
        }
    
        $staff_id = request()->input('staff');
        //dd($staff_id);
        
        
       

        $leaves = DB::table('leave_staff_applications as lsa')
                    ->join('leaves as l', 'l.id', '=', 'lsa.leave_id')
                    ->join('staff as s', 's.id', '=', 'lsa.staff_id')
                    ->join('staff as alt', 'alt.id', '=', 'lsa.alternate')
                    ->leftJoin('staff as add_alt', 'add_alt.id', '=', 'lsa.additional_alternate')
                    ->leftJoin('staff as recommender', 'recommender.user_id', '=', 'lsa.recommender')
                    ->where('lsa.appl_status', '!=', 'rejected')
                    ->where('lsa.staff_id', $staff_id)
                    ->select(
                        'lsa.cl_type',
                        'lsa.alternate',
                        'lsa.reason',
                        'lsa.start',
                        'lsa.end',
                        'lsa.approver',
                        'lsa.additional_alternate',
                        'lsa.recommender',
                        'lsa.no_of_days',
                        'lsa.appl_status',
                        'lsa.leave_status',
                        'lsa.year',
                        DB::raw("SUM(lsa.no_of_days) AS total_days"),
                        'l.shortname',
                        's.fname as staff_fname',
                        's.mname as staff_mname',
                        's.lname as staff_lname',
                        'alt.fname as alternate_fname',
                        'alt.mname as alternate_mname',
                        'alt.lname as alternate_lname',
                        'add_alt.fname as add_alt_fname',
                        'add_alt.mname as add_alt_mname',
                        'add_alt.lname as add_alt_lname',
                        'recommender.fname as recommender_fname',
                        'recommender.mname as recommender_mname',
                        'recommender.lname as recommender_lname'
                    )
                    ->groupBy(
                        'lsa.cl_type',
                        'lsa.alternate',
                        'lsa.reason',
                        'lsa.start',
                        'lsa.end',
                        'lsa.approver',
                        'lsa.additional_alternate',
                        'lsa.recommender',
                        'lsa.no_of_days',
                        'lsa.appl_status',
                        'lsa.leave_status',
                        'lsa.year',
                        'l.shortname',
                        's.fname',
                        's.mname',
                        's.lname',
                        'alt.fname',
                        'alt.mname',
                        'alt.lname',
                        'add_alt.fname',
                        'add_alt.mname',
                        'add_alt.lname',
                        'recommender.fname',
                        'recommender.mname',
                        'recommender.lname'
                    )
                    ->get();



       
        return view('/ESTB/staff/staffleave', compact(['data', 'leave_types', 'leave_types_taken', 'year','leaves']));
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
        $no_of_days_lwp=DB::table('leave_staff_applications')
                        ->whereIn('leave_id',function($q){
                            $q->select('id')
                            ->from('leaves')
                            ->where('shortname','like','%lwp%');
                        })
                    ->where('appl_status','!=','rejected')
                        ->where('start','>=',function($q)use($staff){
                            $q->select('wef')
                                ->from('annual_increments')
                                ->where('staff_id',$staff->id)
                                ->latest()->take(1);
                        })
                        ->Where('start','<=',function($q)use($staff){
                            $q->select('date_of_increment')
                                ->from('staff')
                                ->where('id',$staff->id);
                            })
                        ->where('staff_id',$staff->id)
                        ->select(DB::raw('sum(no_of_days) as total_leave_days'))
                        ->groupBy('leave_id')->first();
       // dd($no_of_days_lwp);
        return view('ESTB/staff.annualincrement',compact('staff','no_of_days_lwp'));
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
    public function staffshares(staff $staff)
    {
        $staff=staff::with('staffshares')->where('id',$staff->id)->first();
        return view('/ESTB/staff/staffshares',compact('staff'));
    }
    public function staffloans(staff $staff)
    {
        $staff=staff::with('staffloans')->where('id',$staff->id)->first();
        return view('/ESTB/staff/staffloans',compact('staff'));
    }
    public function stafftaxregime($staffId)
    {
        // $staff=staff::with('TaxHeads')->where('id',$staff->id)->first();
        $staff = Staff::with('taxHeads')->findOrFail($staffId);
    
        $taxHeads=TaxHeads::get();
        // $taxHeads = TaxHeads::findOrFail($request->tax_heads_id);
        return view('/ESTB/staff/stafftaxregime',compact('staff','taxHeads'));
    }


}
