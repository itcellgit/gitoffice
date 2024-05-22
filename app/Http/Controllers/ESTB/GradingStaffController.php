<?php
namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\GradingStaffExport;
use App\Models\Grading_staff;
use App\Http\Requests\StoreGrading_staffRequest;
use App\Http\Requests\UpdateGrading_staffRequest;
use App\Models\staff;
use App\Models\designation;
use Illuminate\Support\Facades\Input;
use PhpOffice\PhpSpreadsheet\IOFactory;

class GradingStaffController extends Controller
{
    public function index()
{
    // Assuming you have received the year and month data from somewhere
    $year = request('year');
    $month = request('month');

    $staff = Staff::with(['departments' => function ($query) {
        $query->orderBy('id');
    }])
    ->leftJoin('department_staff', 'staff.id', '=', 'department_staff.staff_id')
    ->leftJoin('departments', 'department_staff.department_id', '=', 'departments.id')
    ->whereNotIn('staff.id', function ($query) {
        $query->select('staff_id')
            ->from('designation_staff')
            ->whereIn('designation_id', function ($subquery) {
                $subquery->select('id')
                    ->from('designations')
                    ->where('isvacational', 'Non-Vacational');
            })
            ->where('status', 'active');
    })
    ->select('staff.id as id', 'staff.fname', 'staff.lname','departments.id as dept_id')
    ->orderBy('departments.id')
    ->distinct()
    ->get();

    // Loop through each staff member and store data into grading_staff table
    foreach ($staff as $member) {
        // Assuming Grading_staff model has necessary fillable fields
        Grading_staff::create([
            'staff_id' => $member->id,
            'year' => $year,
            'month' => $month,
        
            'status' => 'active'
            // Add other necessary fields
        ]);
    }
    return redirect()->back()->with('success', 'data added successfully');
        
}
    public function showGradeTemplate()
    {
     
        $grading = Grading_staff::with('staff')->get();
        $gradesArray = ['A', 'B', 'C'];
        return view('ESTB.Grading.gradetemplate.GradeTemplate', compact(['grading', 'gradesArray']));
    }

public function update(UpdateGrading_staffRequest $request, Grading_staff $grading_staff)
{
    foreach ($request->grade as $staffId => $grade) {
        $gradingStaff = Grading_Staff::find($staffId);
        if ($gradingStaff) {
            $gradingStaff->grade = $grade;
            $gradingStaff->save();
        }
    }
    return redirect()->back()->with('success', 'Grades updated successfully');

    dd($request->all());
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
        $grade = $sheet->getCell('F' . $row)->getValue(); // Assuming grade is in column E

        // Check if the staff exists in the database
        $staff = Staff::find($staffId);
        if ($staff) {
            // Assuming Grading_staff model has necessary fillable fields
            Grading_staff::updateOrCreate(
                ['staff_id' => $staffId],
                ['grade' => $grade]
            );
        }
    }


    return redirect()->back()->with('success', 'Excel file imported successfully');
}

    public function create()
    {
        //
    }

    public function store(StoreGrading_staffRequest $request)
    {
           
        }

    public function show(Grading_staff $grading_staff)
    {
        //
    }

    public function edit(Grading_staff $grading_staff)
    {
        //
    }

    public function destroy(Grading_staff $grading_staff)
    {
        //
    }
}
