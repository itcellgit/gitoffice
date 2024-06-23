<?php

namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\staff;
use App\Models\payscale;
use Illuminate\Http\Request;
use App\Models\staffsalary;
use App\Http\Requests\StorestaffsalaryRequest;
use App\Http\Requests\UpdatestaffsalaryRequest;

class StaffsalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maxCreatedAt = DB::table('staffsalaries')->max('created_at');
        $previousMonthDate = Carbon::parse($maxCreatedAt)->format('Y-m-d');
        $currentDate = Carbon::now();


        $staffWithPayscaleAndAllowances=staff::with('teaching_payscale')
                                              ->with(['annaul_increment'=>function($q)use($maxCreatedAt,$currentDate){
                                                    $q->whereBetween('created_at',[$maxCreatedAt,$currentDate]);
                                              }])
                                              ->with('allowance')
                                              ->whereIn('id',function($q){
                                                $q->select('staff_id')
                                                  ->from('association_staff')
                                                  ->whereIn('association_id',function($q){
                                                    $q->select('id')
                                                      ->from('associations')
                                                      ->whereIn('asso_name',['Confirmed','promotional probationary']);
                                                  });
                                              })
                                              ->whereIn('id',function($q){
                                                    $q->select('staff_id')
                                                      ->from('employee_types')
                                                      ->where('employee_type','Teaching');
                                              })
                                              ->get();


            $staffdata=[];
        //   dd(count($staffWithPayscaleAndAllowances ));
           $i=1;
        foreach ($staffWithPayscaleAndAllowances as $staff) {
            $id=$staff->id;
            $staffdata[$id]=[];
            $previousmonthsalary=staffsalary::where('staff_id',$staff->id)->latest()->first();

            if($previousmonthsalary!=null)
            {

                if($previousmonthsalary->rate!=$staff->basic)
                {
                    $staffdata[$id]['remarks']=$staff->reason;
                    $ai_created_month=Carbon::parse($staff->ai_created_at)->month;
                    $ai_wef_month=Carbon::parse($staff->ai_wef)->month;
                    //the annual_increment is given post month of increment month => compute salary arrears
                    if($ai_created_month>$ai_wef_month)
                    {
                         // $salary_arrears=
                    }

                }
            }

            $leaveData = DB::table('leave_staff_applications')
                ->select('leave_id', DB::raw('SUM(no_of_days) AS total_leave_days'))
                ->where('start', '>=', $previousMonthDate)
                ->where('start', '<=', $currentDate)
                ->whereIn('leave_id', function ($query) {
                    $query->select('id')->from('leaves')->where('shortname', 'LIKE', '%LWP%');
                })
                ->where('staff_id', $staff->id)
                ->groupBy('leave_id')
                ->get();

             $no_of_days_lwp = $leaveData->sum('total_leave_days');
            if ($no_of_days_lwp > 0) {
                $daily_basic_rate = $staff->basic / 30;
                $staff->basic -= $daily_basic_rate * $no_of_days_lwp;
            }
            $staff->leave_days = $no_of_days_lwp;


        }

        return view('ESTB.salaries.staffpayscale.index', compact('staffWithPayscaleAndAllowances'));
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
    public function store(StorestaffsalaryRequest $request)
    {
        $validatedData = $request->validate([
            // Add validation rules as per your requirements
        ]);

        // Loop through the submitted data and store it in the staffpayscale table
        foreach ($request->manual as $staffId => $data) {
           // dd($data['vidyaganapati']);

           $staffpayscale= new staffsalary();
           $staffpayscale->staff_id=$staffId;
           $staffpayscale->basic=$data['basic'];
           $staffpayscale->da=$data['da'];
           $staffpayscale->hra=$data['hra'];
           $staffpayscale->cca=$data['cca'];
           $staffpayscale->special_incen=$data['special_incen'];
           $staffpayscale->salary_arrears=$data['salary_arrears'];
           $staffpayscale->vidyaganapati=$data['vidyaganapati'];
           $staffpayscale->prof_tax=$data['prof_tax'];
           $staffpayscale->lic= $data['lic'];
           $staffpayscale->ir=$data['ir'];
           $staffpayscale->hra_recovery=$data['hra_recovery'];
           $staffpayscale->special_allowances=$data['special_allowances'];
           $staffpayscale->allowance_value=$data['allowance_value'];
           $staffpayscale->gross_salary=$data['gross_salary'];
           $staffpayscale->pf_deduction=$data['pf_deduction'];
           $staffpayscale->pf_arrears=$data['pf_arrear'];
           $staffpayscale->income_tax=$data['income_tax'];
           $staffpayscale->GSLI=$data['GSLI'];
           $staffpayscale->credit_shares=$data['credit_shares'];
           $staffpayscale->credit_loan=$data['credit_loan'];
           $staffpayscale->forward_charges=$data['forward_charges'];
           $staffpayscale->salary_recovery=$data['salary_recovery'];
           $staffpayscale->laptop_computer=$data['laptop_computer'];
           $staffpayscale->total_deductions=$data['total_deductions'];
           $staffpayscale->net_salary=$data['net_salary'];
           $staffpayscale->created_at=Carbon::now()->format('Y-m-d');
           $staffpayscale->save();
        //    dd($staffpayscale);
        }
    return redirect()->back()->with('success', 'Staff payscale data stored successfully.');

    }


    /**
     * Display the specified resource.
     */
    public function show(staffsalary $staffsalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staffsalary $staffsalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestaffsalaryRequest $request, staffsalary $staffsalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staffsalary $staffsalary)
    {
        //
    }
}
