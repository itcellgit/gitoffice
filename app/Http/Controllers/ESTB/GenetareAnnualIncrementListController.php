<?php
namespace App\Http\Controllers\ESTB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\staff;

class GenetareAnnualIncrementListController extends Controller
{
    public function index()
{
   // dd("here");
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
        

   return view('/ESTB/Generateannualincrement/index');
}
}
