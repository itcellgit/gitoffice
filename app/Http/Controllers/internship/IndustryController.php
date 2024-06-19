<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\industry;
use App\Models\department;
use App\Models\staff;
use App\Http\Requests\StoreindustryRequest;
use App\Http\Requests\UpdateindustryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user = Auth::user();
        $staff_id = Auth::user()->id;
        $staff = DB::table('staff')->where('user_id', $user->id)->first();
        if ($staff==null) {
            // Handle the case where the staff is not found
            abort(404, 'Staff not found.');
        }
            
        $industries = industry::where('staff_id', $staff->id)->with('department')->get();
        $industryCount = industry::where('staff_id', $staff->id)->count();

       //dd('here');
      
        // $industries=industry::get();
         return view('internship.industry',compact('industryCount','industries'));
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
    public function store(StoreindustryRequest $request)
    {
        $user=Auth::user();
        //dd($user);
        $staff = DB::table('staff')
                        ->join('department_staff','department_staff.staff_id','=','staff.id')
                        ->where('department_staff.status','active')
                        ->whereNotIn('department_staff.department_id',function($q){
                            $q->select('department_id')
                                ->from('department_staff as ds')
                                ->where('ds.staff_id','staff.id')
                                ->where('ds.status','active')
                                ->whereNotExists(function($query) {
                                $query->select(DB::raw(1))
                                    ->from('designation_staff as dsg')
                                    ->whereColumn('dsg.dept_id', 'ds.department_id')
                                    ->where('dsg.staff_id', 'staff.id')
                                    ->whereNotNull('dsg.dept_id')
                                    ->where('dsg.status', 'active');
                            }) ->pluck('ds.department_id');;
                        })
                        ->where('user_id', $user->id)
                        ->select('staff.id as id','department_id')
                        ->first();

       // dd($staff);
    
        if ($staff==null || !isset($staff->department_id)) {
            //dd(99);
        // Handle the case where the staff or department_id is not found
        abort(404, 'Staff or department not found.');
        }
        $industry= new industry();
        $industry-> name=$request->name;
        $industry-> location=$request->location;
        $industry-> domain=$request->domain;
        $industry->department_id = $staff->department_id;
        $industry->staff_id = $staff->id; 

 
        $industry->save();
        return redirect('/Teaching/internship/industry');
    }

    /**
     * Display the specified resource.
     */
    public function show(industry $industry)
    {
        return view('internship.showindustry',compact('industry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(industry $industry)
    {
        return view('internship.edit',compact('industry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateindustryRequest $request, industry $industry)
    {
                
        $industry->name=$request->name;
        $industry->location=$request->location;
        $industry->domain=$request->domain;
 
        $industry->save();
        return redirect('/Teaching/internship/industry');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(industry $industry)
    {
        $industry->delete();
        return redirect('/Teaching/internship/industry');
    }
}
