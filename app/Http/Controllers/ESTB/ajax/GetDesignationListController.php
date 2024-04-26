<?php

namespace App\Http\Controllers\ESTB\ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\designation;

class GetDesignationListController extends Controller
{
    //
    public function getDesignationsList(Request $request){
        $employee_type = $request->input('employee_type'); // Get the selected option from the employee type dropdown

        // Perform your logic to fetch options for the caste category dropdown based on the selected option
        $designations =DB::table('designations')
                            ->where('status', 'active')
                            ->where('emp_type',$employee_type)
                            ->where('isadditional',0)->orderBy('design_name')->get();
        //dd($designations);
        return response()->json($designations); // Return the options as JSON

    }

    public function serachDesignation(Request $request){
        //dd($request);
        $design_search_val = $request->input('design_search_val');

        $search_designations =DB::table('designations')->where('design_name','LIKE','%'.$design_search_val.'%')
                           ->get();
                        //dd($search_designations);
        return response()->json(['designation_results' => $search_designations]);

    }


    public function getfullDesignationsList(Request $request){
        $designations = DB::table('designations')
                            ->where('status', 'active')
                            //->where('emp_type',$employee_type)
                            ->where('isadditional', 0)
                            ->orderBy('design_name')
                            ->get();
        return response()->json($designations);
    }

}
