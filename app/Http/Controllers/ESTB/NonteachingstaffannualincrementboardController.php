<?php

namespace App\Http\Controllers\ESTB;

use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\user;
use App\Enums\UserRoles;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests\StorestaffRequest;
use App\Http\Requests\UpdatestaffRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\designation;
use App\Models\annual_increment;
use App\Models\department;
use App\Models\employee_type;
use App\Models\allowance;
use App\Models\association;
use App\Models\teaching_payscale;
use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Models\consolidated_teaching_pay;
use App\Models\users;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\fixed_nt_pay;

use Session;



class NonteachingstaffannualincrementboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $year = request('year');
        $month = request('month');
        $year=Carbon::now()->year;
        $previous_year_date=($year-1).'-'.(6).'-01';
        $current_year_date=Carbon::createFromDate($year,6)->endOfMonth()->format('yy-m-d');
        $filter="";
       // dd($staff1);
       $staff=staff::with(['designations'=>function($q){
                        $q->wherePivot('status','active');
                    }])
                    ->with(['associations'=>function($q){
                            $q->wherePivot('status','active');
                    }])
                    ->with('qualifications')
                    ->with(['annualIncrement'=>function($q)use($year){
                        $q->whereYear('wef',$year-1)->orderBy('wef','desc');
                    }])
                    ->with(['allowance'=>function($q)use($year){
                        $q->wherePivot('status','active')
                        ->wherePivot('month','Jul')
                        ->wherePivot('Year',$year);
        
                    }])
                    ->with(['departments'=>function($q){
                        $q->wherePivot('status','active');
                    }])
                    ->with(['teaching_payscale'=>function($q){
                        $q->wherePivot('status','active');
                    }]) 
                    ->with(['ntpayscale'=>function($q){
                        $q->wherePivot('status','active');
                    }])
                    ->with(['ntcpayscale'=>function($q){
                        $q->wherePivot('status','active');
                    }])
                    ->with('consolidated_teaching_pay')
                    ->with('fixed_nt_pay')
                    ->with(['latest_employee_type'=>function($q){
                        $q->where('status','active');
                    }])
    
                    ->whereRaw('month(date_of_increment)=?',[8])
                    ->orderBy('fname')->
                    whereIn('staff.id',function($q){
            $q->select('association_staff.staff_id')
            ->from('association_staff')
            ->join('employee_types','employee_types.staff_id','=','association_staff.staff_id')
            ->where('association_id',function($q1){
                $q1->select('id')
                ->from('associations')
                ->where('asso_name','Confirmed');
            })->where('employee_type','Teaching');
       })->get();

       
        // DB::raw('(annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da/100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra/100) + teaching_payscales.cca + allowances.value) as gross_salary')
 
    

      //dd($staff);
      $data = [];
    foreach($staff as $st)
    {
    $staffId = $st->id;
    $data[$staffId] = [
        'basic' => 0,
        'agp' => 0,
        'total' => 0,
        'incremente_value'=>0,
       'incremented_total'=>0,
       'basic_agp_incremented_value'=>0,
       'gross_value' =>0
    ];
    $no_of_days_lwp=DB::table('leave_staff_applications')
                        ->whereIn('leave_id',function($q){
                            $q->select('id')
                            ->from('leaves')
                            ->where('shortname','like','%lwp%');
                        })
                    ->where('appl_status','!=','rejected')
                        ->where('start','>=',$previous_year_date)
                        ->Where('start','<=',$current_year_date)
                        ->where('staff_id',$st->id)
                        ->select(DB::raw('sum(no_of_days) as total_leave_days'))
                        ->groupBy('leave_id')->first();
//dd($no_of_days_lwp->total_leave_days);

   

    
        
    foreach($st->annualIncrement as $increment) {
         
            $data[$staffId] ['basic']=$increment->basic;
            if($no_of_days_lwp!=null && $no_of_days_lwp->total_leave_days>0 )
            {
                
                $data[$staffId]['wef'] = Carbon::parse($st->date_of_increment)->addDays($no_of_days_lwp->total_leave_days)->format('d-M-Y');
              
            
            }
            else
            {
                $data[$staffId]['wef']=Carbon::parse($st->date_of_increment)->format('d-M-Y');
                
            }
    }
   
    $data[$staffId]['cca'] = 0;

    foreach($st->teaching_payscale as $payscale) {
       // dd($payscale);
      // Ensure the pay scale entry belongs to the current staff member
            $data[$staffId]['agp'] = $payscale->agp;
            
           
            $data[$staffId]['cca'] = $payscale->cca;
            // Calculate the total amount by adding basic and agp
            $data[$staffId]['total'] = $increment->basic + $payscale->agp;
            // $incremented_total = $total + ($total * 0.03);
            //dd($staffId." ".$data[$staffId]['total'].' '.$data[$staffId]['total']*0.03);
        
            $data[$staffId]['incremente_value'] = ($data[$staffId]['total']* 0.03);
            $data[$staffId]['incremented_total'] = $data[$staffId]['basic'] +
            $data[$staffId]['incremente_value'];
//   dd($staffId." ".$data[$staffId]['incremented_total_after'].' '.$data[$staffId]['basic']+
  //$data[$staffId]['incremented_total']);
  $data[$staffId]['basic_agp_incremented_value']= $data[$staffId]['basic']+ $data[$staffId]['incremente_value']+  $data[$staffId]['agp'];
//   dd($staffId." ".$data[$staffId]['incremented_total_after_increment'].' '.$data[$staffId]['incremented_total_after']+
//   $data[$staffId]['agp']); 

    
  
    }
    $data[$staffId]['value']=0;
   
    
    if(count($st->designations)==1)
    {
        foreach($st->allowance as $al) {
            $data[$staffId] ['value']=$al->value;
        }
    }
    else
    {
        $data[$staffId]['value']=0;
       
        foreach($st->designations as $design )
        {
          
            
            //dd($design->isadditional===1 && $design->isvacational=='Non-Vacational');
            if($design->isadditional===1 && $design->isvacational=='Non-Vacational' && $design->pivot->allowance_status==1)
            {
                
                $additional_design_allowance=allowance::where('designations_id',$design->id)->first();
              
               
                // dd($fetchallowance->value_type=="flat");
              //$loop[$st->id][$design->id][]=$additional_design_allowance;
              
                if( $additional_design_allowance->value_type=='flat')
                {
                   
                    $data[$staffId]['value']= $data[$staffId]['value']+$additional_design_allowance->value;
            
                }
                else
                {
                    $data[$staffId]['value']= $data[$staffId]['value']+$data[$staffId]['total']*$additional_design_allowance/100;
                }
                
            }
            else
            {
                if($data[$staffId]['value']!=0){

                    foreach($st->allowance as $al) {
                        $data[$staffId] ['value']=$al->value;
                    }
                }
            }

        }
        //dd($loop);
    }
    
    $data[$staffId]['gross_value']=ceil(($data[$st->id]['basic_agp_incremented_value']*195/100)+$data[$staffId]['cca']+$data[$staffId] ['value']);

}

    //dd($data['31']['total']);


         return view('ESTB.salaries.GenerateAnnualIncrement.Board.Nonteaching.index',compact(['staff','data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    // $year = request('year');
    $month = request('month');
    $year=Carbon::now()->year;
    $previous_year_date=($year-1).'-'.(6).'-01';
    $current_year_date=Carbon::createFromDate($year,6)->endOfMonth()->format('yy-m-d');
    $filter="";
   // dd($staff1);
   $staff=staff::with(['designations'=>function($q){
                    $q->wherePivot('status','active');
                }])
                ->with(['associations'=>function($q){
                        $q->wherePivot('status','active');
                }])
                ->with('qualifications')
                ->with(['annualIncrement'=>function($q)use($year){
                    $q->whereYear('wef',$year-1)->orderBy('wef','desc');
                }])
                ->with(['allowance'=>function($q)use($year){
                    $q->wherePivot('status','active')
                    ->wherePivot('month','Jul')
                    ->wherePivot('Year',$year);
    
                }])
                ->with(['departments'=>function($q){
                    $q->wherePivot('status','active');
                }])
                ->with(['teaching_payscale'=>function($q){
                    $q->wherePivot('status','active');
                }]) 
                ->with(['ntpayscale'=>function($q){
                    $q->wherePivot('status','active');
                }])
                ->with(['ntcpayscale'=>function($q){
                    $q->wherePivot('status','active');
                }])
                ->with('consolidated_teaching_pay')
                ->with('fixed_nt_pay')
                ->with(['latest_employee_type'=>function($q){
                    $q->where('status','active');
                }])

                ->whereRaw('month(date_of_increment)=?',[8])
                ->orderBy('fname')->
                whereIn('staff.id',function($q){
        $q->select('association_staff.staff_id')
        ->from('association_staff')
        ->join('employee_types','employee_types.staff_id','=','association_staff.staff_id')
        ->where('association_id',function($q1){
            $q1->select('id')
            ->from('associations')
            ->where('asso_name','Confirmed');
        })->where('employee_type','Teaching');
   })->get();

   
    // DB::raw('(annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da/100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra/100) + teaching_payscales.cca + allowances.value) as gross_salary')



  //dd($staff);
  $data = [];
foreach($staff as $st)
{
$staffId = $st->id;
$data[$staffId] = [
    'basic' => 0,
    'agp' => 0,
    'total' => 0,
    'incremente_value'=>0,
   'incremented_total'=>0,
   'basic_agp_incremented_value'=>0,
   'gross_value' =>0
];
$no_of_days_lwp=DB::table('leave_staff_applications')
                    ->whereIn('leave_id',function($q){
                        $q->select('id')
                        ->from('leaves')
                        ->where('shortname','like','%lwp%');
                    })
                ->where('appl_status','!=','rejected')
                    ->where('start','>=',$previous_year_date)
                    ->Where('start','<=',$current_year_date)
                    ->where('staff_id',$st->id)
                    ->select(DB::raw('sum(no_of_days) as total_leave_days'))
                    ->groupBy('leave_id')->first();
//dd($no_of_days_lwp->total_leave_days);




    
foreach($st->annualIncrement as $increment) {
     
        $data[$staffId] ['basic']=$increment->basic;
        if($no_of_days_lwp!=null && $no_of_days_lwp->total_leave_days>0 )
        {
            
            $data[$staffId]['wef'] = Carbon::parse($st->date_of_increment)->addDays($no_of_days_lwp->total_leave_days)->format('d-M-Y');
          
        
        }
        else
        {
            $data[$staffId]['wef']=Carbon::parse($st->date_of_increment)->format('d-M-Y');
            
        }
}

$data[$staffId]['cca'] = 0;

foreach($st->teaching_payscale as $payscale) {
   // dd($payscale);
  // Ensure the pay scale entry belongs to the current staff member
        $data[$staffId]['agp'] = $payscale->agp;
        
       
        $data[$staffId]['cca'] = $payscale->cca;
        // Calculate the total amount by adding basic and agp
        $data[$staffId]['total'] = $increment->basic + $payscale->agp;
        // $incremented_total = $total + ($total * 0.03);
        //dd($staffId." ".$data[$staffId]['total'].' '.$data[$staffId]['total']*0.03);
    
        $data[$staffId]['incremente_value'] = ($data[$staffId]['total']* 0.03);
        $data[$staffId]['incremented_total'] = $data[$staffId]['basic'] +
        $data[$staffId]['incremente_value'];
//   dd($staffId." ".$data[$staffId]['incremented_total_after'].' '.$data[$staffId]['basic']+
//$data[$staffId]['incremented_total']);
$data[$staffId]['basic_agp_incremented_value']= $data[$staffId]['basic']+ $data[$staffId]['incremente_value']+  $data[$staffId]['agp'];
//   dd($staffId." ".$data[$staffId]['incremented_total_after_increment'].' '.$data[$staffId]['incremented_total_after']+
//   $data[$staffId]['agp']); 



}
$data[$staffId]['value']=0;


if(count($st->designations)==1)
{
    foreach($st->allowance as $al) {
        $data[$staffId] ['value']=$al->value;
    }
}
else
{
    $data[$staffId]['value']=0;
   
    foreach($st->designations as $design )
    {
      
        
        //dd($design->isadditional===1 && $design->isvacational=='Non-Vacational');
        if($design->isadditional===1 && $design->isvacational=='Non-Vacational' && $design->pivot->allowance_status==1)
        {
            
            $additional_design_allowance=allowance::where('designations_id',$design->id)->first();
          
           
            // dd($fetchallowance->value_type=="flat");
          //$loop[$st->id][$design->id][]=$additional_design_allowance;
          
            if( $additional_design_allowance->value_type=='flat')
            {
               
                $data[$staffId]['value']= $data[$staffId]['value']+$additional_design_allowance->value;
        
            }
            else
            {
                $data[$staffId]['value']= $data[$staffId]['value']+$data[$staffId]['total']*$additional_design_allowance/100;
            }
            
        }
        else
        {
            if($data[$staffId]['value']!=0){

                foreach($st->allowance as $al) {
                    $data[$staffId] ['value']=$al->value;
                }
            }
        }

    }
    //dd($loop);
}

$data[$staffId]['gross_value']=ceil(($data[$st->id]['basic_agp_incremented_value']*195/100)+$data[$staffId]['cca']+$data[$staffId] ['value']);

}

//dd($data['31']['total']);


    return view('ESTB.salaries.GenerateAnnualIncrement.Board.Nonteaching.index',compact(['staff','data']));
}

    
    

}