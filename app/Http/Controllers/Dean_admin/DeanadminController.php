<?php

namespace App\Http\Controllers\Dean_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\leave;
use App\Models\staff;
use Illuminate\Support\Carbon;
use App\Models\holidayrh;
use App\Http\Controllers\ScheduledJobs;

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
use Hash;
use Auth;

class DeanadminController extends Controller
{
    //
    public function index(){
        return view('Dean_admin.dashboard');
    }

    public function leaves_lest()
    {
        $leaves=leave::with('combine_leave')->with('leave_rules')->orderby('vacation_type')->orderBy('longname')->get();

        return view('Dean_admin.leaves_management.daleaves',compact('leaves'));
    }


    public function da_leaves_entitlement()
    {

        $year=Carbon::now()->year;

        $leave_types=leave::select('shortname')->distinct('shortname')->where('max_entitlement','>',0)->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();

        $leave_types_taken = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";
        // $staff=DB::select($query);
        // $leave_types_balance = leave::select('shortname')->distinct('shortname')->where('shortname','not like','SML%')->where('shortname','not like','ML')->where('status','active')->get();// $query="select * from staff s, leaves l, leave_staff_entitlements lse where s.id=lse.staff_id and l.id=lse.leave_id and lse.status='active' and year=$year";

        $staff=staff::with('leave_staff_entitlements')->with('teaching_employee')->get();

        return view('Dean_admin.leaves_management.daleaves_entitlement',compact(['staff','leave_types','leave_types_taken','year'])); //,compact(['Leave_rules','filter']

    }


    public function da_holiday_rh_list()
    {
        //
        $filter = '';
        $holidayrh=holidayrh::orderBy('start')->get();
        return view('Dean_admin.leaves_management.daholiday_rh_list',compact('holidayrh','filter'));
    }


    public function da_calender_view()
    {

        // $user = Auth::user();
        // $staff_id_from_user = staff::where('user_id','=',$user->id)->first();
        $year=Carbon::now()->year;
        $holidayrh=holidayrh::orderBy('start')->get();

        $staff=staff::with('latest_employee_type')->with('latestassociation')->with('latest_additional_designation')->get();

        //dd($staff->latest_employee_type);

        
        return view ('Dean_admin.leaves_management.daleaves_calender');
    }


   

    
}
