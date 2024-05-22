<?php

namespace App\Http\Controllers\ESTB;
use App\Models\staff;
use App\Models\renumerationheads;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenumeFilterController extends Controller
{
    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');
        $designations=DB::table('designations')->where('status','active')->get();
        $departments = DB::table('departments')->where('status','active')->get();

        if (!empty($filter)) {
            $renumerationheads=staff::with('designations')
                ->whereRelation('designations','design_name','like','%'.$filter.'%')
               ->with('departments')
               ->orWhereRelation('departments','dept_name','like','%'.$filter.'%')
               ->orWhereRelation('departments','dept_shortname','like','%'.$filter.'%')

            ->orwhere('staff.fname', 'like', '%'.$filter.'%')
             ->orWhere('staff.mname', 'like', '%'.$filter.'%')
             ->orWhere('staff.lname', 'like', '%'.$filter.'%')
             ->orWhere('staff.employee_type', 'like', '%'.$filter.'%')
            ->orWhere('departments.dept_name', 'like', '%'.$filter.'%')
            ->sortable()->orderBy('employee_type')->orderBy('fname')
            ->paginate();
            //dd($staff);


        } else {
            $renumerationheads=staff::with('designations')
       ->with('departments' )
       ->sortable()
       ->orderBy('fname')->paginate();
        }
        //dd($designation);
        return view('ESTB.renumerations.index', compact('staff', 'filter','departments','designations','renumerationheads'));
    }
}
