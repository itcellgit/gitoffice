<?php

namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\cts_salary;
use App\Http\Requests\Storects_salaryRequest;
use App\Http\Requests\Updatects_salaryRequest;

class CtsSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $previousMonthDate = Carbon::now()->subMonth()->startOfMonth()->format('Y-m-d'); // Adjust as necessary
        $currentDate = Carbon::now()->format('Y-m-d');
    
        $results = DB::table('consolidated_teaching_pays as ctp')
            ->leftJoin('staff as s', 's.id', '=', 'ctp.staff_id')
            ->leftJoin('designation_staff as ds', function($join) {
                $join->on('s.id', '=', 'ds.staff_id')
                     ->where('ds.status', '=', 'active');
            })
            ->leftJoin('designations as d', 'ds.designation_id', '=', 'd.id')
            ->leftJoin('allowances as a', function($join) {
                $join->on('d.id', '=', 'a.designations_id')
                     ->where('a.status', '=', 'active');
            })
            ->where('ctp.status', 'Active')
            ->orderBy('s.id')
            ->select(
                's.id', 
                's.fname', 
                's.mname', 
                's.lname', 
                's.doj', 
                's.PF', 
                'd.design_name as designation', 
                'ctp.pay as conolidated',
                'ctp.pay as rate', 
                'a.title as allowance_title', 
                'a.value as allowance_value', 
                'a.value_type as allowance_type',
                DB::raw('25 as vidyaganapati'),
                DB::raw('IF(d.isadditional = 1, a.value, 0) AS calculated_allowance')
            )
            ->get();
    
        foreach ($results as $result) {
            $leaveData = DB::table('leave_staff_applications')
                ->select('leave_id', DB::raw('SUM(no_of_days) AS total_leave_days'))
                ->where('start', '>=', $previousMonthDate)
                ->where('start', '<=', $currentDate)
                ->whereIn('leave_id', function ($query) {
                    $query->select('id')->from('leaves')->where('shortname', 'LIKE', '%LWP%');
                })
                ->where('staff_id', $result->id)
                ->groupBy('leave_id')
                ->get();
    
            $no_of_days_lwp = $leaveData->sum('total_leave_days');
            if ($no_of_days_lwp > 0) {
                $daily_basic_rate = $result->conolidated / 30;
                $result->conolidated -= $daily_basic_rate * $no_of_days_lwp;
            }
            $result->leave_days = $no_of_days_lwp; // Add leave_days property to the result
        }
        $salary_heads = DB::table('salary_heads')->orderBy('id')->get();


    return view('ESTB.salaries.staffpayscale.cts.index', compact('results', 'salary_heads'));
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
    public function store(Storects_salaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cts_salary $cts_salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cts_salary $cts_salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatects_salaryRequest $request, cts_salary $cts_salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cts_salary $cts_salary)
    {
        //
    }
}
