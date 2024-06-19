<?php

namespace App\Http\Controllers\internship;

use App\Models\internship\spoc;
use App\Models\internship\industry;
use App\Http\Requests\StorespocRequest;
use App\Http\Requests\UpdatespocRequest;
use App\Http\Controllers\Controller;

use App\Models\department;
use App\Models\staff;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SpocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //dd('here');
       $user = Auth::user();
       $staff_id = Auth::user()->id;
       $staff = DB::table('staff')->where('user_id', $user->id)->first();
           if ($staff==null) {
               // Handle the case where the staff is not found
               abort(404, 'Staff not found.');
           }

       $spocCount = spoc::where('staff_id', $staff->id)->count();
       $spocs = spoc::where('staff_id', $staff->id)->with('industry')->with('department')->get();
       //dd($spocs);
       $industries = industry::select('id','name')->where('staff_id', $staff->id)->get();
       return view('internship.spoc', compact('spocCount','spocs','industries'));

    
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
    public function store(StorespocRequest $request)
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
    
       $spocs= new spoc();
       $spocs-> industry_id=$request->industry_id;
        $spocs-> name=$request->name;
        $spocs-> phone=$request->phone;
        $spocs-> email=$request->email;
        $spocs-> designation=$request->designation;
        $spocs-> department=$request->department;
        $spocs->department_id = $staff->department_id;
        $spocs->staff_id = $staff->id; 
 
        $spocs->save();
        return redirect('/Teaching/internship/spoc');
    }

    /**
     * Display the specified resource.
     */
    public function show(spoc $spoc)
    {
        return view('internship.showspoc',compact('spoc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(spoc $spoc)
    {
        return view('internship.edit',compact('spoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatespocRequest $request, spoc $spoc)
    {
       // dd($spoc);
        $spoc->industry_id=$request->industry_id;
        $spoc->name=$request->name;
        $spoc->phone=$request->phone;
        $spoc->email=$request->email;
        $spoc->designation=$request->designation;
        $spoc->department=$request->department;
 
        $spoc->save();
        return redirect('/Teaching/internship/spoc');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(spoc $spoc)
    {
        $spoc->delete();
        return redirect('/Teaching/internship/spoc');
    }
}
