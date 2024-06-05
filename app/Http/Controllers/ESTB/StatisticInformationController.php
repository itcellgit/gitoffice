<?php

namespace App\Http\Controllers\ESTB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
use App\Models\employee_type;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\association;
use App\Models\teaching_payscale;
use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Models\consolidated_teaching_pay;
use App\Models\users;
use App\Models\fixed_nt_pay;

use Session;


class StatisticInformationController extends Controller
{
    // public function index()
    // {
    //     // return view('ESTB.staff.generatestatistics');
    // }
    
    // public function create()
    // {
    //     $users= staff::join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')

    //         ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')

    //         ->select('staff.id as staff_id','staff.fname as fname',
    //         'staff.mname as mname',
    //         'staff.lname as lname',
    //         'designations.designation as designation',
    //         'designations.scale_of_pay as scale_of_pay')->get();
          
    //         $groupeduser= $users->groupBy('designation');
            
    //         $data = [];
    //         $slNo = 1;

    //     foreach ($groupeduser as $designation => $teachersByDesignation) {

    //         foreach ($teachersByDesignation as $users) {
    //             $data[] = 
    //             [
    //                 'Sl.No.' => $slNo++,
    //                 'Designation' => $designation,
    //                 'Scale of Pay' => $teacher->scale_of_pay,
    //                 'Vac.' => '', 
    //                 'GM' => 
    //                 [
    //                     'M' => '', 
    //                     'F' => '', 
    //                 ],

    //                 'SC' => 
    //                 [
    //                     'M' => '', 

    //                     'F' => '', 

    //                 ],

    //                 'ST' => 
    //                 [

    //                     'M' => '', 

    //                     'F' => '', 

    //                 ],

    //                 'OBC' => 
    //                 [

    //                     'M' => '', 

    //                     'F' => '', 

    //                 ],

    //                 'Total' => 
    //                 [

    //                     'M' => '', 

    //                     'F' => '', 

    //                 ],

    //             ];

    //         }

    //     }


    //     // Create Excel spreadsheet

    //     $spreadsheet = new Spreadsheet();

    //     $sheet = $spreadsheet->getActiveSheet();


    //     // Set header row

    //     $sheet->setCellValue('A1', 'Sl.No.');

    //     $sheet->setCellValue('B1', 'Designation');

    //     $sheet->setCellValue('C1', 'Scale of Pay');

    //     $sheet->setCellValue('D1', 'Vac.');

    //     $sheet->setCellValue('E1', 'GM');

    //     $sheet->setCellValue('F1', 'SC');

    //     $sheet->setCellValue('G1', 'ST');

    //     $sheet->setCellValue('H1', 'OBC');

    //     $sheet->setCellValue('I1', 'Total');


    //     // Set sub-headers for gender columns

    //     $sheet->setCellValue('E2', 'M');

    //     $sheet->setCellValue('F2', 'F');

    //     $sheet->setCellValue('G2', 'M');

    //     $sheet->setCellValue('H2', 'F');

    //     $sheet->setCellValue('I2', 'M');

    //     $sheet->setCellValue('J2', 'F');


    //     // Fill data in rows

    //     $row = 3;

    //     foreach ($data as $rowdata) {

    //         $sheet->setCellValue('A' . $row, $rowdata['Sl.No.']);

    //         $sheet->setCellValue('B' . $row, $rowdata['Designation']);

    //         $sheet->setCellValue('C' . $row, $rowdata['Scale of Pay']);

    //         $sheet->setCellValue('D' . $row, $rowdata['Vac.']);

    //         $sheet->setCellValue('E' . $row, $rowdata['GM']['M']);

    //         $sheet->setCellValue('F' . $row, $rowdata['GM']['F']);

    //         $sheet->setCellValue('G' . $row, $rowdata['SC']['M']);

    //         $sheet->setCellValue('H' . $row, $rowdata['SC']['F']);

    //         $sheet->setCellValue('I' . $row, $rowdata['ST']['M']);

    //         $sheet->setCellValue('J' . $row, $rowdata['ST']['F']);

    //         $sheet->setCellValue('K' . $row, $rowdata['OBC']['M']);

    //         $sheet->setCellValue('L' . $row, $rowdata['OBC']['F']);

    //         $sheet->setCellValue('M' . $row, $rowdata['Total']['M']);

    //         $sheet->setCellValue('N' . $row, $rowdata['Total']['F']);

    //         $row++;

    //     }


    //     // Create Excel writer

    //     $writer = new Xlsx($spreadsheet);


    //     // Export to Excel file

    //     $filename = 'teachers_data.xlsx';

    //     $writer->save($filename);


    //     // Return download response

    //     return response()->download($filename)->deleteFileAfterSend(true);

    // }
   
//     public function store(Request $request)
//  {
//      $request->validate
//      ([
//         'excel_file' => 'required|file|mimes:xlsx,xls|max:2048', // Example validation rules
//     ]);

//     $file = $request->file('excel_file');
//     $spreadsheet = IOFactory::load($file);
//     $sheet = $spreadsheet->getActiveSheet();

//     // Get the highest row number
//     $highestRow = $sheet->getHighestRow();

//     // Create an array to store the data
//     $data = [];

//     // Iterate through each row to read and store data
//     for ($row = 2; $row <= $highestRow; $row++) {
//         $designation = $sheet->getCell('A' . $row)->getValue();
//         $payScale = $sheet->getCell('B' . $row)->getValue();
//         $vacational = $sheet->getCell('C' . $row)->getValue();
//         $gmMale = $sheet->getCell('D' . $row)->getValue();
//         $gmFemale = $sheet->getCell('E' . $row)->getValue();
//         $scMale = $sheet->getCell('F' . $row)->getValue();
//         $scFemale = $sheet->getCell('G' . $row)->getValue();
//         $stMale = $sheet->getCell('H' . $row)->getValue();
//         $stFemale = $sheet->getCell('I' . $row)->getValue();
//         $obcMale = $sheet->getCell('J' . $row)->getValue();
//         $obcFemale = $sheet->getCell('K' . $row)->getValue();

//         $data[] = [
//             'designation' => $designation,
//             'pay_scale' => $payScale,
//             'vacational' => $vacational,
//             'gm' => [
//                 'male' => $gmMale,
//                 'female' => $gmFemale,
//             ],
//             'sc' => [
//                 'male' => $scMale,
//                 'female' => $scFemale,
//             ],
//             'st' => [
//                 'male' => $stMale,
//                 'female' => $stFemale,
//             ],
//             'obc' => [
//                 'male' => $obcMale,
//                 'female' => $obcFemale,
//             ],
//         ];
//     }

// //   return view('ESTB.staff.generatestatistics', compact('data'));
// }
   
public function filter_information(Request $request)
{

    $filter="";
  $designations=designation::where('status','active')->get();

  $teachingDesignations = designation::where('status', 'active')
                              ->where('emp_type', 'Teaching')
                              ->where('isadditional', 0)
                             ->orderBy('design_name')
                             ->get();
    
 $payscales=DB::table('teaching_payscales')->where('status','active')->get();

 $teaching_payscales = teaching_payscale::where('status', 'active')
                        ->orderBy('payscale_title')
                        ->get();



 $religions =religion::where('status','active')->get();



 $designation_id = $request->input('designations');
$castecategories = $request->input('castecategory_id');
$religion = $request->input('religion_id');
$gender = $request->input('gender');
$payscale_id = $request->input('payscale_id');
$isvacational = $request->input('isvacational');
$isadditional = $request->input('isadditional');

        $query = Staff::query();

        $query->join('designation_staff', function ($join) {
            $join->on('designation_staff.staff_id', '=', 'staff.id')
                ->where('designation_staff.status', 'active');
        });

        $query->join('designations', 'designations.id', '=', 'designation_staff.designation_id');

        $query->join('religions', 'religions.id', '=', 'staff.religion_id')
            ->join('employee_types', 'employee_types.staff_id', '=', 'staff.id');

     $query->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
            ->where('teaching_payscales.status', 'active');
            
    //$query = Designation::where('status', 'active');

            if ($designation_id) {
                $query->whereIn('designations.id', $designation_id);
            }
    
            if ($religion !== 'all') {
                $query->where('religions.id', $religion)
                    ->select('staff.*', 'religions.religion_name');
            }
            if ($gender !== 'all') {
                $query->where('staff.gender', $gender);
            }

            if ($payscale_id) {
                $query->whereIn('teaching_payscales.id', $payscale_id);
            }

            // if ($isvacational) {
            //     $isVacationalValue = ($isvacational === 'Vacational') ? 1 : 0;
            //     $query->where('is_vacational', $isVacationalValue);
            // }
        
            // if (isset($isadditional)) {
            //     $query->where('isadditional', $isadditional);
            
            // }
            $staff = $query->get();
           
            $religionscount = DB::table('religions')
            ->leftJoin('staff', 'religions.id', '=', 'staff.religion_id')
            ->select('religion_name',
                     DB::raw('SUM(CASE WHEN staff.gender = "M" THEN 1 ELSE 0 END) as male_count'),
                     DB::raw('SUM(CASE WHEN staff.gender = "F" THEN 1 ELSE 0 END) as female_count'))
            ->where('religions.status', 'active')
            ->groupBy('religions.id', 'religion_name')
            ->get();

           $staffCount = $staff->count();
           //dd($staff, $staffCount, $designations, $teachingDesignations, $payscales, $teaching_payscales, $religions, $religionscount);

 return view('ESTB.staff.generatestatistics',compact('staff','staffCount','designations','teachingDesignations','payscales','teaching_payscales','religions','religionscount',));
 
//return view('ESTB.staff.generatestatistics');

}
public function statistic_information(Request $request)
{
   // dd($request);
  

    $activeDesignations = designation::where('status', 'active')->get();
    $activeTeachingPayscales = DB::table('teaching_payscales')->where('status', 'active')->get();
    $religions =religion::where('status','active')->get();
    $caste_categories = castecategory::where('status','active')->get();


    //dd($activeDesignations);

    $staffQuery = staff::query()
        ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
        ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
        ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
        ->select(
            'staff.id',
            'designations.design_name',
            'designations.isvacational',
            DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
            'teaching_payscales.payscale_title'
        )
        ->where('designations.isvacational', 1)
        ->get();
        //dd($staffQuery);

        $religioncounts = staff::query()
    ->join('religions', 'staff.religion_id', '=', 'religions.id')
    ->join('castecategories', 'staff.castecategory_id', '=', 'castecategories.id')
    ->select(
        'religions.religion_name',
        'castecategories.caste_name AS castecategory_name',
        DB::raw('SUM(CASE WHEN staff.gender = "Male" THEN 1 ELSE 0 END) AS male_count'),
        DB::raw('SUM(CASE WHEN staff.gender = "Female" THEN 1 ELSE 0 END) AS female_count')
    )
    ->where('religions.status', 'active')
    ->where('castecategories.status', 'active')
    ->groupBy('religions.religion_name', 'castecategories.caste_name')
    ->get();


        //dd($counts);
        $staffCount = $staffQuery->count();


       
   
    // return view('ESTB.staff.generatestatistics', compact('groupedData', 'staffCount', 'designation', 'teaching_payscales', 'religions'));
    return view('ESTB.staff.generatestatistics', compact('activeDesignations', 'activeTeachingPayscales', 'staffQuery', 'religions', 'caste_categories','religioncounts'));

}





// public function statistic_information(Request $request)
// {
//     $activeDesignations = designation::where('status', 'active')->get();
//     $activeTeachingPayscales = DB::table('teaching_payscales')->where('status', 'active')->get();
//     $religions = religion::where('status', 'active')->get();
//     $caste_categories = castecategory::where('status', 'active')->get();

//     $staffQuery = staff::query()
//         ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
//         ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
//         ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
//         ->select(
//             'designations.design_name',
//             'teaching_payscales.payscale_title',
//             'staff.gender',
//             'staff.castecategory_id'
//         )
//         ->where('designations.isvacational', 1)
//         ->get();

//     $groupedData = [];
//     foreach ($staffQuery as $staff) {
//         $key = $staff->design_name . '|' . $staff->payscale_title;
//         if (!isset($groupedData[$key])) {
//             $groupedData[$key] = [
//                 'GM' => ['M' => 0, 'F' => 0],
//                 'SC' => ['M' => 0, 'F' => 0],
//                 'ST' => ['M' => 0, 'F' => 0],
//                 'OBC' => ['M' => 0, 'F' => 0],
//                 'total' => ['M' => 0, 'F' => 0]
//             ];
//         }
//         $category = match ($staff->castecategory_id) {
//             1 => 'GM',
//             2 => 'SC',
//             3 => 'ST',
//             4 => 'OBC',
//             default => 'Others'
//         };
//         $gender = $staff->gender == 'Male' ? 'M' : 'F';
//         // $groupedData[$key][$category][$gender]++;
//         $groupedData[$key]['total'][$gender]++;
//     }

//     $totals = [
//         'GM' => ['M' => 0, 'F' => 0],
//         'SC' => ['M' => 0, 'F' => 0],
//         'ST' => ['M' => 0, 'F' => 0],
//         'OBC' => ['M' => 0, 'F' => 0],
//         'total' => ['M' => 0, 'F' => 0]
//     ];

//     foreach ($groupedData as $data) {
//         foreach (['GM', 'SC', 'ST', 'OBC'] as $category) {
//             $totals[$category]['M'] += $data[$category]['M'];
//             $totals[$category]['F'] += $data[$category]['F'];
//         }
//         $totals['total']['M'] += $data['total']['M'];
//         $totals['total']['F'] += $data['total']['F'];
//     }

//     return view('ESTB.staff.generatestatistics', compact('groupedData', 'totals'));
// }




}
