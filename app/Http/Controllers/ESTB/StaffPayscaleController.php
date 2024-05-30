<?php

namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\staffpayscale;
use App\Http\Requests\StorestaffpayscaleRequest;
use App\Http\Requests\UpdatestaffpayscaleRequest;

class StaffpayscaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $staffWithPayscaleAndAllowances = Staff::select(
            'staff.id', 'staff.fname', 'staff.mname', 'staff.lname','staff.doj','staff.un_no','staff.PF',
            'designations.design_name', 'teaching_payscales.payscale_title',
            'staff_teaching_payscale.start_date', 'staff_teaching_payscale.end_date',
            'allowances.title as allowance_title', 'allowances.value as allowance_value',
            'annual_increments.basic as payband','teaching_payscales.cca','teaching_payscales.agp',
            DB::raw('(annual_increments.basic + teaching_payscales.agp) as basic'),
            DB::raw('(annual_increments.basic + teaching_payscales.agp) as rate'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp) * 0.20) as special_incen'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) as da'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) as hra'),
            DB::raw('(annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da/100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra/100) + teaching_payscales.cca + allowances.value
                        ) as gross_salary'),
            DB::raw('(CASE 
                        WHEN annual_increments.basic > 15000 THEN 1800 
                        ELSE (annual_increments.basic + teaching_payscales.agp) * 0.12 
                        END
                    ) as pf_deduction'),
            DB::raw('CASE
                        WHEN (
                            annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + teaching_payscales.cca + allowances.value
                        ) > 25000 THEN 200
                        ELSE 0
                        END as pf_tax_status'),
            DB::raw('25 as vidyaganapati'),
            DB::raw('300 as GSLI'),
            DB::raw('(CASE 
                WHEN annual_increments.basic > 15000 THEN 1800 
                ELSE (annual_increments.basic + teaching_payscales.agp) * 0.12 
                END
            ) as pf_deduction'),
    DB::raw('CASE
                WHEN (
                    annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + teaching_payscales.cca + allowances.value
                ) > 25000 THEN 200
                ELSE 0
                END as pf_tax_status'),
    DB::raw('25 as vidyaganapati'),
    DB::raw('300 as GSLI'),
    DB::raw('(
                CASE 
                    WHEN annual_increments.basic > 15000 THEN 1800 
                    ELSE (annual_increments.basic + teaching_payscales.agp) * 0.12 
                END 
                + 25 
                + 300 
                + CASE
                    WHEN (annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + teaching_payscales.cca + allowances.value
                ) > 25000 THEN 200
                    ELSE 0
                END
            ) as total_deductions'),
            DB::raw('((annual_increments.basic + teaching_payscales.agp + 
                        ((annual_increments.basic + teaching_payscales.agp) * 0.20) + 
                        ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + 
                        ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + 
                        teaching_payscales.cca + allowances.value) - 
                        CASE 
                            WHEN annual_increments.basic > 15000 THEN 1800 
                            ELSE (annual_increments.basic + teaching_payscales.agp) * 0.05
                        END
                        -25
                        -300
                        - CASE
                        WHEN ( annual_increments.basic + teaching_payscales.agp + ((annual_increments.basic + teaching_payscales.agp) * 0.20) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.da / 100) + ((annual_increments.basic + teaching_payscales.agp) * teaching_payscales.hra / 100) + teaching_payscales.cca + allowances.value
                        ) > 25000 THEN 200
                        ELSE 0
                        END
                    ) as net_salary')
            )
        ->join('staff_teaching_payscale', 'staff.id', '=', 'staff_teaching_payscale.staff_id')
        ->join('teaching_payscales', 'staff_teaching_payscale.teaching_payscale_id', '=', 'teaching_payscales.id')
        ->join('designations', 'teaching_payscales.designations_id', '=', 'designations.id')
        ->join('annual_increments', 'staff.id', '=', 'annual_increments.staff_id')
        ->join('allowance_staff', 'staff.id', '=', 'allowance_staff.staff_id')
        ->join('allowances', 'allowance_staff.allowance_id', '=', 'allowances.id')
        ->whereIn('teaching_payscales.payscale_title', ['5th payscale', '6th payscale'])
        ->whereNull('staff_teaching_payscale.end_date')
        ->where('staff_teaching_payscale.status', 'active')
        ->where('allowance_staff.status', 'active')
        ->distinct()
        ->orderBy('staff.id')
        ->get();
        

            // dd($staffWithPayscaleAndAllowances);
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
    public function store(StorestaffpayscaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(staffpayscale $staffpayscale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staffpayscale $staffpayscale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestaffpayscaleRequest $request, staffpayscale $staffpayscale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staffpayscale $staffpayscale)
    {
        //
    }
}
