<?php

namespace App\Http\Controllers\ESTB;

use App\Models\allowance_staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\allowance;
use Carbon\Carbon;

class AllowanceStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ESTB.autonomous_allowances.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $year = request('year');
        $month = request('month');
        //query to fetch departments of all staff with multiple departments as comma separated list
        $departmentsSubquery = DB::table('department_staff')
            ->join('departments', 'departments.id', '=', 'department_staff.department_id')
            ->where('department_staff.status', 'active')
            ->select(
                'department_staff.staff_id',
                DB::raw('GROUP_CONCAT(departments.dept_shortname ORDER BY departments.dept_shortname ASC SEPARATOR ", ") as dept_shortname')
            )
            ->groupBy('department_staff.staff_id');

        $grading=staff::leftJoinSub($departmentsSubquery, 'grouped_depts', function($join) {
            $join->on('grouped_depts.staff_id', '=', 'staff.id');
        })
        ->join('allowance_staff','allowance_staff.staff_id','=','staff.id')
        ->join('allowances','allowances.id','=','allowance_staff.allowance_id')
        ->where('year',$year)->where('month',$month)

        ->select('staff.id as id',
        DB::raw("concat(staff.fname, '-',staff.mname,'-',staff.lname) as name"),
        'grouped_depts.dept_shortname as dept',
        'allowances.value as value','allowance_staff.year as year','allowance_staff.month as month','allowance_staff.status as status')
        -> orderBy('dept')
        ->get();
       //dd($grading);
        // $staff=staff::join('allowance_staff','allowance_staff.staff_id','=','staff.id')
        // ->where('year',$year)
        // ->where('month',$month)
        // ->get();
       // dd($staff);
        if(count($grading)>0)
        {
            return view('ESTB.autonomous_allowances.index',compact('grading'));
        }
        else
        {
            $staff = Staff::whereNotIn('staff.id', function ($query) {
                $query->select('staff_id')
                    ->from('designation_staff')
                    ->whereIn('designation_id', function ($subquery) {
                        $subquery->select('id')
                            ->from('designations')
                            ->where('isvacational', 'Non-Vacational');
                    })
                    ->where('status', 'active');
            })
            ->leftJoinSub($departmentsSubquery, 'grouped_depts', function($join) {
                $join->on('grouped_depts.staff_id', '=', 'staff.id');
            })
            ->select('staff.id as id',
            DB::raw("concat(staff.fname, '-',staff.mname,'-',staff.lname) as name"),
            'grouped_depts.dept_shortname as dept')
            ->get();

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Sl.No.');
            $sheet->setCellValue('B1','StaffID');
            $sheet->setCellValue('C1', 'Name');
            $sheet->setCellValue('D1','Dept');
            $sheet->setCellValue('E1','Year');
            $sheet->setCellValue('F1','Month');
            $sheet->setCellValue('G1','Grade(A/B/C)');
            $cellno=2;
            foreach($staff as $s)
            {
                $sheet->setCellValue('A'.$cellno,$cellno-1);
                $sheet->setCellValue('B'.$cellno,$s->id);
                $sheet->setCellValue('C'.$cellno,$s->name);
                $sheet->setCellValue('D'.$cellno,$s->dept);
                $sheet->setCellValue('E'.$cellno,$year);
                $sheet->setCellValue('F'.$cellno,$month);

                if(isset($s->grade))
                {
                    $sheet->setCellValue('G'.$cellno,$s->grade);
                }
                else
                {
                    $sheet->setCellValue('G'.$cellno,"");
                }
                $cellno++;
            }

            // Create a writer
            $writer = new Xlsx($spreadsheet);
            $temp_file = tempnam(sys_get_temp_dir(), 'grading_template_'.$year.' '.$month);
            $writer->save($temp_file);
            // Return download response
            return response()->download($temp_file, 'grading_template_'.$year.' '.$month.'.xlsx')->deleteFileAfterSend(true);
        }



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,xls|max:2048', // Example validation rules
        ]);
        //set the old allowance as inactive.
        $fetch_active_staff_allowance=allowance::with(['staff'=>function($q){
            $q->wherePivot('status','active');
        }])->where('title','like','Autonomous%')->get();

        foreach($fetch_active_staff_allowance as $staff_allowance)
        {

            if(count($staff_allowance->staff)>0)
            {

                foreach($staff_allowance->staff as $staff)
                {
                    $staff->pivot->status='inactive';
                    $staff->pivot->update();
                }
            }
        }
        $file = $request->file('excel_file');
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();

        // Get the highest row number
        $highestRow = $sheet->getHighestRow();
        //create an array to display to user.

        // Iterate through each row to read and store grade data
        for ($row = 2; $row <= $highestRow; $row++) {
            $staffId = $sheet->getCell('B' . $row)->getValue();
            $year=$sheet->getCell('E'.$row)->getValue();
            $month=$sheet->getCell('F'.$row)->getValue();
            $grade = $sheet->getCell('G' . $row)->getValue(); // Assuming grade is in column G

            $staff_designation=DB::table('designation_staff')->where('staff_id',$staffId)->whereIn('designation_id',function($q){
                $q->select('designations.id')
                ->from('designations')
                ->where('isadditional',0)
                ->where('design_name','like','%Professor');
            })->select('designation_id')->first();
           // dd($staff_designation->designation_id);
            $allowance=allowance::where('title','like','autonomous allowance - '.$grade)->where('designations_id',$staff_designation->designation_id)->first();

            if($allowance)
            {
                $attach=$allowance->staff()->attach($staffId,['year'=>$year,'month'=>$month,'status'=>'active','created_at'=>Carbon::now()]);
            }
        }
        $grading=staff::leftJoinSub($departmentsSubquery, 'grouped_depts', function($join) {
            $join->on('grouped_depts.staff_id', '=', 'staff.id');
        })
        ->join('allowance_staff','allowance_staff.staff_id','=','staff.id')
        ->join('allowances','allowances.id','=','allowance_staff.allowance_id')
        ->where('year',$year)->where('month',$month)

        ->select('staff.id as id',
        DB::raw("concat(staff.fname, '-',staff.mname,'-',staff.lname) as name"),
        'grouped_depts.dept_shortname as dept',
        'allowances.value as value','allowance_staff.year as year','allowance_staff.month as month','allowance_staff.status as status')
       -> orderBy('dept')
       ->get();

       // dd($grading);
        return view('ESTB.autonomous_allowances.index',compact('grading'));
    }
    /**
     * Display the specified resource.
     */
    public function show(allowance_staff $allowance_staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(allowance_staff $allowance_staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, allowance_staff $allowance_staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(allowance_staff $allowance_staff)
    {
        //
    }
}
