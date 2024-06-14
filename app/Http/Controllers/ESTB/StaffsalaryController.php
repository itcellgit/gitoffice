<?php

namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Staff;
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
        $previousMonthDate = Carbon::parse($maxCreatedAt)->subMonth();
        $currentDate = Carbon::now();

        $staffWithPayscaleAndAllowances = Staff::select(
            'staff.id', 'staff.fname', 'staff.mname', 'staff.lname', 'staff.doj', 'staff.un_no', 'staff.PF',
            'designations.design_name', 'teaching_payscales.payscale_title',
            'staff_teaching_payscale.start_date', 'staff_teaching_payscale.end_date',
            'allowances.title as allowance_title', 'allowances.value as allowance_value',
            'annual_increments.basic as payband', 'teaching_payscales.cca', 'teaching_payscales.agp',
            DB::raw('IFNULL(laptoploans.amount, 0.0) as laptop_loan_amount'),
            DB::raw('(annual_increments.basic + teaching_payscales.agp) as basic'),
            DB::raw('(annual_increments.basic + teaching_payscales.agp) as rate'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp) * 0.20) as special_incen'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) as da'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) as hra'),
            DB::raw('(annual_increments.basic + teaching_payscales.agp + 
                      ((annual_increments.basic + teaching_payscales.agp) * 0.20) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da/100) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra/100) + 
                      teaching_payscales.cca + allowances.value) as gross_salary'),
            DB::raw('(CASE WHEN annual_increments.basic > 15000 THEN 1800 ELSE 
                      (annual_increments.basic + teaching_payscales.agp) * 0.05 END) as pf_deduction'),
            DB::raw('CASE WHEN (annual_increments.basic + teaching_payscales.agp + 
                      ((annual_increments.basic + teaching_payscales.agp) * 0.20) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + 
                      teaching_payscales.cca + allowances.value) > 25000 THEN 200 ELSE 0 END as prof_tax'),
            DB::raw('25 as vidyaganapati'),
            DB::raw('300 as GSLI'),
            DB::raw('(CASE WHEN annual_increments.basic > 15000 THEN 1800 ELSE 
                      (annual_increments.basic + teaching_payscales.agp) * 0.05 END + 
                      25 + 300 + IFNULL(laptoploans.amount, 0.0) + 
                      CASE WHEN (annual_increments.basic + teaching_payscales.agp + 
                      ((annual_increments.basic + teaching_payscales.agp) * 0.20) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + 
                      teaching_payscales.cca + allowances.value) > 25000 THEN 200 ELSE 0 END) as total_deductions'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp + 
                      ((annual_increments.basic + teaching_payscales.agp) * 0.20) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + 
                      teaching_payscales.cca + allowances.value) - 
                      CASE WHEN annual_increments.basic > 15000 THEN 1800 ELSE 
                      (annual_increments.basic + teaching_payscales.agp) * 0.05 END - 
                      25 - 300 - IFNULL(laptoploans.amount, 0.0) - 
                      CASE WHEN (annual_increments.basic + teaching_payscales.agp + 
                      ((annual_increments.basic + teaching_payscales.agp) * 0.20) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + 
                      ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + 
                      teaching_payscales.cca + allowances.value) > 25000 THEN 200 ELSE 0 END) as net_salary')
            )
            ->join('staff_teaching_payscale', 'staff.id', '=', 'staff_teaching_payscale.staff_id')
            ->join('teaching_payscales', 'staff_teaching_payscale.teaching_payscale_id', '=', 'teaching_payscales.id')
            ->join('designations', 'teaching_payscales.designations_id', '=', 'designations.id')
            ->join('annual_increments', 'staff.id', '=', 'annual_increments.staff_id')
            ->join('allowance_staff', 'staff.id', '=', 'allowance_staff.staff_id')
            ->join('allowances', 'allowance_staff.allowance_id', '=', 'allowances.id')
            ->leftJoin('laptoploans', 'staff.id', '=', 'laptoploans.staff_id')
            ->whereIn('teaching_payscales.payscale_title', ['5th payscale', '6th payscale'])
            ->whereNull('staff_teaching_payscale.end_date')
            ->where('staff_teaching_payscale.status', 'active')
            ->where('allowance_staff.status', 'active')
            ->distinct()
            ->orderBy('staff.id')
            ->get();

        foreach ($staffWithPayscaleAndAllowances as $staff) {
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
