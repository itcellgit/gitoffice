<?php

namespace App\Http\Controllers\ESTB;

use App\Http\Controllers\Controller;
use App\Models\staff;
use App\Models\user;
use App\Enums\UserRoles;
use Hash;
use App\Http\Requests\StorestaffRequest;
use App\Http\Requests\UpdatestaffRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\designation;
use App\Models\department;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\teaching_payscale;
use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Models\consolidated_teaching_pay;
use App\Models\users;
use App\Models\fixed_nt_pay;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter="";
       // dd($staff1);
       $staff=staff::with('designations')
        ->with('associations')
       ->with('departments' )
       ->with('teaching_payscale')
       ->with('ntpayscale')
       ->with('ntcpayscale')
       ->with('consolidated_teaching_pay')
       ->with('fixed_nt_pay')
       ->with('latest_employee_type')
       ->orderBy('fname')->get();

       //        $staff = DB::table('staff')->with('designations')->with('associations')->orderBy('id')->paginate(15);
       // $designations=designation::where('status','active')->get();
       // $caste_categories = castecategory::where('status','active')->get();
        $religions =religion::where('status','active')->get();
        $associations = association::where('status','active')->get();
        $departments = DB::table('departments')->where('status','active')->get();
        $qualifications =DB::table('qualifications')->where('status','active')->get();

        //$payscales = teaching::
        return view('ESTB.staff.index',compact(['staff','religions','associations','departments','qualifications','filter']));
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
    public function store(StorestaffRequest $request)
    {

        //dd('Hello and welcome to store function');
        //dd($request);
        //users table entry
        $user_details=new User();
        $user_details->email=$request->email."@git.edu";
        $user_details->password=Hash::make('password');
        if($request->employee_type == "Teaching"){
            $user_details->role=UserRoles::TEACHING->value;
        }else{
            $user_details->role=UserRoles::NONTEACHING->value;
        }
       $uresult= $user_details->save();

        // staff table details entry
        $staff_details=new staff();
        $staff_details->user_id=$user_details->id;
        $staff_details->fname=$request->fname;
        $staff_details->mname=$request->mname;
        $staff_details->lname=$request->lname;
        $staff_details->local_address=$request->local_address;
        $staff_details->permanent_address=$request->permanent_address;
        $staff_details->religion_id=$request->religion_id;
        $staff_details->castecategory_id=$request->castecategory_id;
        $staff_details->gender=$request->gender;
        $staff_details->dob=$request->dob;
        $staff_details->doj=$request->doj;
        $staff_details->date_of_increment=$request->date_of_increment;
        $staff_details->date_of_superanuation=$request->date_of_superanuation;
        $staff_details->bloodgroup=$request->bloodgroup;
        $staff_details->pan_card=$request->pan_card;
        $staff_details->adhar_card=$request->adhar_card;
        $staff_details->contactno=$request->contactno;
        $staff_details->emergency_no=$request->emergency_no;
        $staff_details->emergency_name=$request->emergency_name;
        $staff_details->created_at=Carbon::Now();
        $sdresult=$staff_details->save();
        $new_fixed_nt_pay=$staff_details->latest_employee_type()->createMany(
            [  //create many function takes an array of rows to be inserted in the sub table.
                [
                    'staff_id'=>$staff_details->id,
                    'employee_type'=>$request->employee_type,
                ]
            ]
        );

        //insert the staff department, designation,
        $sddresult=$staff_details->departments()->attach($request->departments_id,['start_date'=>$request->doj,'gcr'=>$request->gcr]);
        $sddesigresult=$staff_details->designations()->attach($request->designations_id,['start_date'=>$request->doj,'gcr'=>$request->gcr]);
        if($request->duration){
            $sdaresult= $staff_details->associations()->attach($request->associations_id,['duration'=>$request->duration,'start_date'=>$request->doj,'gcr'=>$request->gcr]);
        }
        else
        {
            $sdaresult= $staff_details->associations()->attach($request->associations_id,['start_date'=>$request->doj,'gcr'=>$request->gcr]);
        }



        if($request->employee_type == "Teaching"){//Teaching payscale

           if($request->pay_type=="Payscale")
           {
            $sdpresult=$staff_details->teaching_payscale()->attach($request->payscale_id,['start_date'=>$request->doj,'gcr'=>$request->gcr]);
           }
           else
            {
                $consolidatedpay=new consolidated_teaching_pay();
                $consolidatedpay->staff_id=$staff_details->id;
                $consolidatedpay->pay=$request->fixed_pay;
                $consolidatedpay->start_date=$request->doj;
                $consolidatedpay->gcr=$request->gcr;
                $consolidatedpay->status='active';
                $consolidatedpay->created_at=Carbon::Now();
                $consolidatedpay->save();
            }
        }

        else if($request->employee_type == "Non-Teaching"){
            if($request->pay_type == "Payscale"){ // for KLS pay scale
                //dd(123);
                $sdpresult=$staff_details->ntpayscale()->attach($request->payscales_id,['start_date'=>$request->doj,'level'=>$request->payscale_level,'gcr'=>$request->gcr]);
            }else if($request->pay_type=="Consolidated"){ // for Consolidated Payscale
                $sdpresult=$staff_details->ntcpayscale()->attach($request->payscales_id,['start_date'=>$request->doj,'gcr'=>$request->gcr]);
            }
            else{
                $fixed_nt_pay=new fixed_nt_pay();
                $fixed_nt_pay->staff_id=$staff_details->id;
                $fixed_nt_pay->pay=$request->fixed_pay;
                $fixed_nt_pay->start_date=$request->doj;
                $fixed_nt_pay->gcr=$request->gcr;
                $fixed_nt_pay->created_at=Carbon::Now();
                $fixed_nt_pay->save();
            }
        }

        //dd(1);

        if($uresult && $sdresult && $sddresult && $sddesigresult && $sdaresult && $sdpresult){
            $status=1;
        }
        else{
            DB::rollBack();
            $status=0;
        }
        return redirect('ESTB/staff')->with('status',$status);

    }

    /**
     * Display the specified resource.
     */
    public function show( staff $staff)
    {
        //

        $user=user::where('id',$staff->user_id)->get();
            $user=$user[0];

        $staff=staff::where('staff.id',$staff->id)
        ->with(
            ['departments' => function ($q){
                $q->latest();
            }]
            )
        ->with(
            ['designations'=> function ($q){
                $q->latest();
            }]
            )
            ->with(
                ['associations'=> function ($q){
                    $q->latest();
                }]
                )
        ->with(
            ['teaching_payscale'=> function ($q){
                $q->latest();
            }]
            )
        ->with('ntpayscale')
        ->with('ntcpayscale')
        ->with('latestassociation')

            ->with(
                ['qualifications'])

               ->with(['consolidated_teaching_pay'=>function($q){
                $q->latest();
               }])
                ->with(['fixed_nt_pay'=>function($q){
                    $q->latest();
                }])
                ->with('latest_employee_type')
                ->with('latestfixedntpay','latest_consolidated_teaching_pay','latestteaching_payscale','latestntpayscale','latestntcpayscale')
                ->first();

       $confirmation=$staff->confirmationAssociation()->first();
       $confirmationdate=null;
       if($confirmation!=null)
       {
            $confirmationdate=$confirmation->pivot->start_date;
       }
       //dd($staff->latest_employee_type[0]->employee_type);
        $religions =religion::where('status','active')->get();
       $associations = association::where('status','active')->get();
       $departments = DB::table('departments')->where('status','active')->get();
       $castecategories=DB::table('castecategories')->where('status','active')->get();
       $emp_type=$staff->latest_employee_type()->first();

       $designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',0)->get();

       $add_designations = DB::table('designations')->where('status','active')->where('emp_type',$emp_type->employee_type)->where('isadditional','=',1)->get();

       $payscales="";
       if($emp_type->employee_type==='Teaching')
       {
            $payscales=DB::table('teaching_payscales')->where('status','active')->get();
       }
       else if($emp_type->employee_type==="Non-Teaching" && $staff->associations[0]->asso_name=='Confirmed'){
           // $payscales=DB::table('ntpayscales')->where('status','active')->get();
            $payscales=designation::with('ntpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->orderby('designations.id')->get();
       }
       else
       {
       // $payscales=DB::table('ntcpayscales')->where('status','active')->get();
       $payscales=designation::with('ntcpayscales')->where('status','active')->where('isadditional',0)->where('emp_type','Non-Teaching')->orderby('designations.id')->get();

       }

        $qualifications =DB::table('qualifications')->where('status','active')->get();
        return view('/ESTB/staff/view', compact(['staff','user','payscales','castecategories','religions','associations','qualifications','departments','designations','add_designations','confirmationdate']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
    */

    public function update(UpdatestaffRequest $request, staff $staff)
    {

        $staff->fname=$request->fname;
        $staff->mname=$request->mname;
        $staff->lname=$request->lname;
        //$staff->email = $request->email;
        $staff->local_address=$request->local_address;
        $staff->permanent_address=$request->permanent_address;
        $staff->religion_id=$request->religion_id;
        $staff->castecategory_id=$request->castecategory_id;
        $staff->gender=$request->gender;
        $staff->dob=$request->dob;
        $staff->doj=$request->doj;
        $staff->date_of_increment=$request->date_of_increment;
        $staff->date_of_superanuation=$request->date_of_superanuation;
        $staff->bloodgroup=$request->bloodgroup;
        $staff->pan_card=$request->pan_card;
        $staff->adhar_card=$request->adhar_card;
        $staff->contactno=$request->contactno;
        $staff->emergency_no=$request->emergency_no;
        $staff->emergency_name=$request->emergency_name;
        $staff->vtu_id=$request->vtu_id;
        $staff->aicte_id=$request->aicte_id;
        $staff->date_of_confirmation=$request->date_of_confirmation;

        $sresult=$staff->update();
        $staff->latest_employee_type()->first();
        $emp_type=$staff->latest_employee_type()->first();
        if($emp_type->employee_type!=$request->employee_type)
        {
            //make the current employee_type inactive and add a new row in the employee type
            $employee_type=$staff->latest_employee_type()->update([
                'status'=>'inactive',
            ]);
            $new_fixed_nt_pay=$staff->latest_employee_type()->createMany(
                [  //create many function takes an array of rows to be inserted in the sub table.
                    [
                        'staff_id'=>$staff->id,
                        'employee_type'=>$request->employee_type,
                    ]
                ]
            );
        }

        if($sresult){
            $status = 1;
        }else{
            $status = 0;
        }
        //check if designation has changed
      return redirect('/ESTB/staff/show/'.$staff->id)->with('status',$status);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff)
    {
        //
    }



    //Code for filter the data from table
    public function filterstaff_information(Request $request)
    {
        //dd($request);
        $department_id = $request->input('departments_id');
        $association_id = $request->input('associations_id');
        $religion_id = $request->input('religion_id');
        $designation_id = $request->input('designations_id');
        $gender = $request->input('gender');

        // dd($dept_name);

        // Query staff based on filters
        $query = staff::query()->with(['departments','staff', 'associations', 'religions', 'casteCategory']);

        if ($department_id != '#') {
            $query->whereHas('departments', function ($q) use ($department_id) {
                $q->where('departments.id', $department_id);
            });
        }

        if ($association_id != '#') {
            $query->whereHas('associations', function ($q) use ($association_id) {
                $q->where('associations.id', $association_id);
            });
        }

        if ($religion_id != '#') {
            $query->where('religion_id', $religion_id);
        }

        if ($designation_id != '#') {
            $query->where('designations_id', $designation_id);
        }

        if ($gender) {
            $query->where('gender', $gender);
        }

        // Get filtered staff data
        $staff = $query->get();

        //dd($staff);

        // Fetch necessary dropdown data
        $religions = religion::where('status', 'active')->get();
        $associations = association::where('status', 'active')->get();
        $departments = department::where('status', 'active')->get();
        //$designations = designation::where('status', 'active')->get();

        return view('ESTB.staff.staffinformation', compact('staff', 'religions', 'associations', 'departments'));
    }

}
