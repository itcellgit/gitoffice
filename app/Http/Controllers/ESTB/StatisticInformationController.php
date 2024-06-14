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
use App\Models\employee_type;
use App\Models\religion;
use App\Models\castecategory;
use App\Models\teaching_payscale;
use App\Models\ntpayscale;
use App\Models\ntcpayscale;
use App\Models\consolidated_teaching_pay;
use App\Models\users;
use App\Models\fixed_nt_pay;

use Session;


class StatisticInformationController extends Controller
{
    public function statistic_information(Request $request)
    {
        // dd($request);

        $activeDesignations = designation::where('status', 'active')->get();
        $activeteachingpayscales = DB::table('teaching_payscales')->where('status', 'active')->get();
        $religions =religion::where('status','active')->get();
        $caste_categories = castecategory::where('status','active')->get();

        $start_date = request()->input('start_date'); 
        $end_date = request()->input('end_date'); 
        
        
        //dd($activeDesignations);
            // all designation entry code
            // $staffQuery = staff::query()
            //     ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
            //     ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
            //     ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
            //     ->select(
            //         'staff.id',
            //         'designations.design_name',
            //         'designations.isvacational',
            //         DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
            //         'teaching_payscales.payscale_title'
            //     )
            //     ->where('designations.isvacational', 1)
            //     ->get();

            // single designation query
            // $staffQuery = staff::query()
            // ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
            // ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
            // ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
            // ->select(
            //     'designations.design_name',
            //     'designations.isvacational',
            //     DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
            //     'teaching_payscales.payscale_title'
            // )
            // ->where('designations.isvacational', 1)
            // ->groupBy('designations.design_name', 'designations.isvacational', 'teaching_payscales.payscale_title')
            // ->get();
            // dd($staffQuery);

         // this query is all religion count
        // $religioncounts = staff::query()
        // ->join('religions', 'staff.religion_id', '=', 'religions.id')
        // ->join('castecategories', 'staff.castecategory_id', '=', 'castecategories.id')
        // ->select(
        //     'religions.religion_name',
        //     'castecategories.caste_name AS castecategory_name',
        //     DB::raw('SUM(CASE WHEN staff.gender = "Male" THEN 1 ELSE 0 END) AS male_count'),
        //     DB::raw('SUM(CASE WHEN staff.gender = "Female" THEN 1 ELSE 0 END) AS female_count')
        // )
        // ->where('religions.status', 'active')
        // ->where('castecategories.status', 'active')
        // ->groupBy('religions.religion_name', 'castecategories.caste_name')
        // ->get();
    
        //  my main query
        // $staffQuery = staff::query()
        // ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
        // ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
        // ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
        // ->join('castecategories', 'castecategories.id', '=', 'staff.castecategory_id')
        // ->join('religions', 'religions.id', '=', 'staff.religion_id')
        // ->select(
        //     'designations.design_name',
        //     'designations.isvacational',
        //     DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
        //     'teaching_payscales.payscale_title',
        //     // 'castecategories.caste_name',
        //     'religions.religion_name',
        //     // 'staff.gender',
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' THEN 1 ELSE 0 END) AS male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' THEN 1 ELSE 0 END) AS female_count")
        // )
        // ->whereIn('designations.design_name', ['Professor', 'Assistant Professor', 'Associate Professor']) 
        // ->groupBy('designations.design_name', 'designations.isvacational', 'teaching_payscales.payscale_title', 'castecategories.caste_name', 'religions.religion_name', 'staff.gender')
        // ->get();


        // $staffQuery = staff::query()
        // ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
        // ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
        // ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
        // ->join('castecategories', 'castecategories.id', '=', 'staff.castecategory_id')
        // ->join('religions', 'religions.id', '=', 'staff.religion_id')
        // ->select(
        //     'designations.design_name',
        //     'designations.isvacational',
        //     DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
        //     'teaching_payscales.payscale_title',
        //     'religions.religion_name',
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' THEN 1 ELSE 0 END) AS male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' THEN 1 ELSE 0 END) AS female_count")
        // )
        // ->whereIn('designations.design_name', ['Professor', 'Assistant Professor', 'Associate Professor']) 
        // ->groupBy('designations.design_name', 'designations.isvacational', 'teaching_payscales.payscale_title', 'religions.religion_name')
        // ->get();

        //  main  important query it is

        // $staffData = staff::query()
        // ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
        // ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
        // ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
        // ->join('castecategories', 'castecategories.id', '=', 'staff.castecategory_id')
        // ->join('religions', 'religions.id', '=', 'staff.religion_id')
        // ->select(
        //     'designations.design_name',
        //     'designations.isvacational',
        //     DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
        //     'teaching_payscales.payscale_title',
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Hindu' THEN 1 ELSE 0 END) AS hindu_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Hindu' THEN 1 ELSE 0 END) AS hindu_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Islam' THEN 1 ELSE 0 END) AS islam_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Islam' THEN 1 ELSE 0 END) AS islam_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Jainism' THEN 1 ELSE 0 END) AS jainism_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Jainism' THEN 1 ELSE 0 END) AS jainism_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Christian' THEN 1 ELSE 0 END) AS christian_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Christian' THEN 1 ELSE 0 END) AS christian_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' THEN 1 ELSE 0 END) AS total_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' THEN 1 ELSE 0 END) AS total_female_count")
        // )
        // ->whereIn('designations.design_name', ['Professor', 'Assistant Professor', 'Associate Professor']) 
        // ->groupBy('designations.design_name', 'designations.isvacational', 'teaching_payscales.payscale_title')
        // ->get();
 

    //   basepay and maxpay query
        // $staffData = staff::query()
        // ->join('designation_staff', 'designation_staff.staff_id', '=', 'staff.id')
        // ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
        // ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
        // ->join('castecategories', 'castecategories.id', '=', 'staff.castecategory_id')
        // ->join('religions', 'religions.id', '=', 'staff.religion_id')
        // ->select(
        //     'designations.design_name',
        //     'designations.isvacational',
        //     DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
        //     'teaching_payscales.payscale_title',
        //     'teaching_payscales.basepay', // Add basepay column
        //     'teaching_payscales.maxpay', // Add max_pay column
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Hindu' THEN 1 ELSE 0 END) AS hindu_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Hindu' THEN 1 ELSE 0 END) AS hindu_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Islam' THEN 1 ELSE 0 END) AS islam_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Islam' THEN 1 ELSE 0 END) AS islam_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Jainism' THEN 1 ELSE 0 END) AS jainism_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Jainism' THEN 1 ELSE 0 END) AS jainism_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Christian' THEN 1 ELSE 0 END) AS christian_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Christian' THEN 1 ELSE 0 END) AS christian_female_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'male' THEN 1 ELSE 0 END) AS total_male_count"),
        //     DB::raw("SUM(CASE WHEN staff.gender = 'female' THEN 1 ELSE 0 END) AS total_female_count")
        // )
        // ->whereIn('designations.design_name', ['Professor', 'Assistant Professor', 'Associate Professor']) 
        // ->groupBy('designations.design_name', 'designations.isvacational', 'teaching_payscales.payscale_title', 'teaching_payscales.basepay', 'teaching_payscales.maxpay')
        // ->get();


    // based on designation staff start_date and end _date query


    $staffDataQuery = staff::query()
    ->join('designation_staff', function($join) use ($start_date, $end_date) {
        $join->on('designation_staff.staff_id', '=', 'staff.id')
            ->where(function($query) use ($start_date, $end_date) {
                // Handle the filtering logic for active and inactive designations
                if ($start_date && $end_date) {
                    // For the given date range
                    $query->where(function($subQuery) use ($start_date, $end_date) {
                        $subQuery->where('designation_staff.start_date', '<=', $end_date)
                                 ->where(function($subSubQuery) use ($start_date) {
                                     $subSubQuery->whereNull('designation_staff.end_date')
                                                 ->orWhere('designation_staff.end_date', '>=', $start_date);
                                 });
                    });
                } elseif ($start_date) {
                    // Only start date provided
                    $query->where('designation_staff.start_date', '>=', $start_date)
                          ->where(function($subQuery) {
                              $subQuery->whereNull('designation_staff.end_date')
                                       ->orWhere('designation_staff.end_date', '>=', $start_date);
                          });
                } elseif ($end_date) {
                    // Only end date provided
                    $query->where('designation_staff.start_date', '<=', $end_date)
                          ->where(function($subQuery) use ($end_date) {
                              $subQuery->whereNull('designation_staff.end_date')
                                       ->orWhere('designation_staff.end_date', '>=', $end_date);
                          });
                } else {
                    // No date filters provided
                    $query->whereNull('designation_staff.end_date')
                          ->orWhere('designation_staff.end_date', '>=', now());
                }
            })
            ->where('designation_staff.status', '=', 'active'); // Status is active
    })
    ->join('designations', 'designations.id', '=', 'designation_staff.designation_id')
    ->join('teaching_payscales', 'teaching_payscales.id', '=', 'designations.id')
    ->join('castecategories', 'castecategories.id', '=', 'staff.castecategory_id')
    ->join('religions', 'religions.id', '=', 'staff.religion_id')
    ->select(
        'designations.design_name',
        'designations.isvacational',
        DB::raw("CASE WHEN designations.isvacational = 1 THEN 'Vacational' ELSE 'Non-Vacational' END AS designation_type"),
        'teaching_payscales.payscale_title',
        'teaching_payscales.payscale_title',
        'teaching_payscales.basepay', // Add basepay column
        'teaching_payscales.maxpay', // Add max_pay column
        DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Hindu' THEN 1 ELSE 0 END) AS hindu_male_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Hindu' THEN 1 ELSE 0 END) AS hindu_female_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Islam' THEN 1 ELSE 0 END) AS islam_male_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Islam' THEN 1 ELSE 0 END) AS islam_female_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Jainism' THEN 1 ELSE 0 END) AS jainism_male_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Jainism' THEN 1 ELSE 0 END) AS jainism_female_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'male' AND religions.religion_name = 'Christian' THEN 1 ELSE 0 END) AS christian_male_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'female' AND religions.religion_name = 'Christian' THEN 1 ELSE 0 END) AS christian_female_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'male' THEN 1 ELSE 0 END) AS total_male_count"),
        DB::raw("SUM(CASE WHEN staff.gender = 'female' THEN 1 ELSE 0 END) AS total_female_count")
    )
    ->whereIn('designations.design_name', ['Professor', 'Assistant Professor', 'Associate Professor'])
    ->groupBy('designations.design_name', 'designations.isvacational', 'teaching_payscales.payscale_title','teaching_payscales.basepay','teaching_payscales.maxpay');

    $staffData= $staffDataQuery->get();


     return view('ESTB.staff.generatestatistics', compact('start_date','end_date','activeDesignations', 'activeteachingpayscales', 'staffData', 'religions', 'caste_categories'));

        // return view('ESTB.staff.generatestatistics', compact('activeDesignations', 'activeTeachingPayscales', 'staffQuery', 'religions', 'caste_categories','religioncounts'));
    }

   

}
