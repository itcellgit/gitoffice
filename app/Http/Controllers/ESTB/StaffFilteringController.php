<?php

namespace App\Http\Controllers\ESTB;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffFilteringController extends Controller
{
    //
    public function indexFiltering(Request $request)
    {
        $filter = $request->query('filter');
        $religions =DB::table('religions')->where('status','active')->get();
        $designations=DB::table('designations')->where('status','active')->get();
        $associations = DB::table('associations')->where('status','active')->get();
        $departments = DB::table('departments')->where('status','active')->get();

        if (!empty($filter)) {
            $staff=staff::with('designations')
                ->whereRelation('designations','design_name','like','%'.$filter.'%')
               ->with('departments')
               ->orWhereRelation('departments','dept_name','like','%'.$filter.'%')
               ->orWhereRelation('departments','dept_shortname','like','%'.$filter.'%')
                ->with('associations')
                ->orWhereRelation('associations','asso_name','like','%'.$filter.'%')


            ->orwhere('staff.fname', 'like', '%'.$filter.'%')
             ->orWhere('staff.mname', 'like', '%'.$filter.'%')
             ->orWhere('staff.lname', 'like', '%'.$filter.'%')
             ->orWhere('staff.employee_type', 'like', '%'.$filter.'%')
             ->orWhere('staff.contactno', 'like', '%'.$filter.'%')

            // ->orWhere('departments.dept_name', 'like', '%'.$filter.'%')
            // ->orWhere('associations.asso_name','like','%'.$filter.'%')
            ->sortable()->orderBy('employee_type')->orderBy('fname')
            ->paginate();
            //dd($staff);


        } else {
            $staff=staff::with('designations')
        ->with('associations')
       ->with('departments' )
       ->with('teaching_payscale')
       ->with('ntpayscale')
       ->with('ntcpayscale')
       ->sortable()
       ->orderBy('fname')->paginate();
        }
        //dd($designation);
        return view('ESTB.staff.index', compact('staff', 'filter','departments','designations','associations','religions'));
    }
}
