<?php

namespace App\Http\Controllers\ESTB;

use App\Models\renumerationheads;
use App\Models\staff;
use App\Models\designation;
use App\Models\department;
use App\Models\employee_type;
use App\Http\Requests\StorerenumerationheadsRequest;
use App\Http\Requests\UpdaterenumerationheadsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;

class RenumerationheadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter="";
       // dd($staff1);
       $staff=staff::with('designations')
       ->with('departments' )
       ->with('latest_employee_type')
       ->orderBy('fname')->get();

       $departments = Department::where('status', 'active')->get();

       $designations=designation::where('status','active')->get();
        //To fetch Designation As per Employee type
        $teachingDesignations = designation::where('status', 'active')
                            ->where('emp_type', 'Teaching')
                            ->where('isadditional', 0)
                            ->orderBy('design_name')
                            ->get();

        $nonteachingDesignations = designation::where('status', 'active')
                            ->where('emp_type', 'Non-teaching')
                            ->where('isadditional', 0)
                            ->orderBy('design_name')
                            ->get();

        $renumerationheads = Staff::join('department_staff', 'staff.id', '=', 'department_staff.staff_id')
        ->join('departments', 'department_staff.department_id', '=', 'departments.id')
        ->leftJoin('renumerationheads','renumerationheads.staff_id','=','staff.id')
        ->whereIn('staff.id', function ($query) {
            $query->select('staff_id')
                ->from('designation_staff')
                ->whereIn('designation_id', function ($subquery) {
                    $subquery->select('id')
                        ->from('designations');
                })
                ->where('status', 'active');
        })
        ->select(
            'staff.id as staffid',
            'staff.fname',
            'staff.mname',
            'staff.lname',
            'departments.dept_shortname',
            'renumerationheads.*'
        )
        ->orderBy('departments.id')
        ->distinct()
        ->get();
        
        
         //dd($renumerationheads);
        
        return view('ESTB.renumerations.index', compact('renumerationheads','departments','filter','designations','teachingDesignations','nonteachingDesignations'));
    }

public function importExcel(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'excel_file' => 'required|file|mimes:xlsx,xls'
    ]);

    // Process the uploaded file
    $file = $request->file('excel_file');
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();

    // Get the highest row number
    $highestRow = $sheet->getHighestRow();

    // Iterate through each row to read and store grade data
    for ($row = 2; $row <= $highestRow; $row++) {
            $staffId = $sheet->getCell('A' . $row)->getValue();
            $renumeration_head = $sheet->getCell('B' . $row)->getValue();
            $date_number_from_excel = $sheet->getCell('C' . $row)->getValue();
            // Convert Excel date to PHP date
            $date = ($date_number_from_excel - 25569) * 86400;
            $date_of_disbursement = gmdate("d-m-Y", $date);
            $amount = $sheet->getCell('D' . $row)->getValue();

            // Check if the staff exists in the database
            $staff = Staff::find($staffId);
            if ($staff) {
                // Update or create renumeration head
                    Renumerationheads::updateOrCreate(
                        ['staff_id' => $staffId],
                        [
                            'renumeration_head' => $renumeration_head,
                            'date_of_disbursement' => $date_of_disbursement,
                            'amount' => $amount
                        ]
                    );
                }
            }
            return redirect()->back()->with('success', 'Excel file imported successfully');
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
    public function store(StorerenumerationheadsRequest $request)
{

}
    /**
     * Display the specified resource.
     */
    public function show(renumerationheads $renumerationheads)
    {
        //
    }

    public function filterrenume_information(Request $request)
    {
        $filter="";

	    $departments = DB::table('departments')->where('status','active')->get();

	    $designations=designation::where('status','active')->get();
	    //To fetch Designation As per Employee type
	    $teachingDesignations = designation::where('status', 'active')
	                        ->where('emp_type', 'Teaching')
	                        ->where('isadditional', 0)
	                        ->orderBy('design_name')
	                        ->get();

	    $nonteachingDesignations = designation::where('status', 'active')
	                        ->where('emp_type', 'Non-teaching')
	                        ->where('isadditional', 0)
	                        ->orderBy('design_name')
	                        ->get();
        //dd($request->query);

        $department_id = $request->input('departments');
        $designation_id = $request->input('designations');
        $employee_type = $request->input('employee_type');

        $query = Staff::query();

        $query->join('department_staff', function ($join) {
            $join->on('department_staff.staff_id', '=', 'staff.id')
                ->where('department_staff.status', 'active');
        });
        
        $query->join('departments', 'departments.id', '=', 'department_staff.department_id');

        $query->join('designation_staff', function ($join) {
            $join->on('designation_staff.staff_id', '=', 'staff.id')
                ->where('designation_staff.status', 'active');
        });

        $query->join('designations', 'designations.id', '=', 'designation_staff.designation_id');

        $query->join('employee_types', 'employee_types.staff_id', '=', 'staff.id');

        if ($department_id && !in_array('all', $department_id)) {
            $query->whereIn('departments.id', $department_id);
        }

        if ($designation_id) {
            $query->whereIn('designations.id', $designation_id);
        }

        if ($employee_type !== 'all') {
            $query->where('employee_types.employee_type', $employee_type)
                ->select('staff.distinct(*)', 'employee_types.employee_type');
        }

        // Use GROUP_CONCAT to fetch multiple departments as a single entry
        $query->select(
            'staff.id as staffid',
            'staff.fname',
            'staff.mname',
            'staff.lname',
            'departments.dept_shortname',

            DB::raw('GROUP_CONCAT(DISTINCT departments.dept_shortname ORDER BY departments.dept_shortname SEPARATOR ", ") AS departments_list'),
            DB::raw('GROUP_CONCAT(DISTINCT designations.design_name ORDER BY designations.design_name SEPARATOR ", ") AS designations_list'),
            'employee_types.employee_type'
        );
        // Group by staff columns to avoid duplicate staff entries
        $query->groupBy('staff.id',
            'staff.fname',
            'staff.mname',
            'staff.lname',
            'employee_types.employee_type',
            'departments.dept_shortname',
        );
        //$staff = $query->take(10)->get();
        //dd($staff);
        $renumerationheads = $query->get();

       // dd($staff);
       $staffCount =$renumerationheads->count();


    return view('ESTB.renumerations.index', compact('renumerationheads','filter', 'departments', 'designations', 'teachingDesignations', 'nonteachingDesignations'));

    }

    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');

    $designations = Designation::where('status', 'active')->get();
    $departments = Department::where('status', 'active')->get();

    $query = Staff::query();

    if (!empty($filter)) {
        $query->where('fname', 'like', '%' . $filter . '%')
        ->orWhere('mname', 'like', '%' . $filter . '%')
        ->orWhere('lname', 'like', '%' . $filter . '%')
        ->orWhereHas('latest_employee_type', function ($q) use ($filter) {
            $q->where('employee_types.employee_type', 'like', '%' . $filter . '%'); // Specify table name for id column
        });
    }

    $query->select(
        'staff.id as staffid', // Alias 'staffid' for 'id' column
        'staff.fname',
        'staff.mname',
        'staff.lname',
        'departments.dept_shortname'
    );
    $renumerationheads = $query->sortable()->orderBy('employee_type')->orderBy('fname')->paginate();

    return view('ESTB.renumerations.index', compact('renumerationheads', 'filter', 'departments', 'designations'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(renumerationheads $renumerationheads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterenumerationheadsRequest $request, renumerationheads $renumerationheads)
    {
        //
        // $renumerations->dept_namactivitye=$request->edit_activity;
        // $renumerations->level=$request->edit_level;
       
        // if($request->status=='active'){
        //     $renumerations->status='active';
        // }  
        // $result = $renumerations->update();  

        // if($result){
        //     $status = 1;
        // }else{
        //     $status = 0;
        // }
        // return redirect('/ESTB/renumerations')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(renumerationheads $renumerationheads)
    {
        //
    }
}
