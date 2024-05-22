<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Support\Facades\DB;
use App\Models\event;
use App\Models\notice;

class ESTBController extends Controller
{
    public function dashboard()
    {
        $totalemployee = Staff::count();

        // Count teaching employees
        $totalTeachingEmployees=DB::table('staff')
       ->join('employee_types','employee_types.staff_id','=','staff.id')
        ->where('employee_types.employee_type','=','Teaching')
        ->count(); 
        
        // Count non-teaching employees
        $totalNonTeachingEmployees=DB::table('staff')
        ->join('employee_types','employee_types.staff_id','=','staff.id')
         ->where('employee_types.employee_type','=','Non-Teaching')
         ->count(); 

         //event
         $estb_event = event::with('department')->get();

        //notice
         $estb_notice = notice::with('department')->get();
    
        return view('ESTB.dashboard', compact('totalemployee', 'totalTeachingEmployees', 'totalNonTeachingEmployees','estb_event','estb_notice'));
    }

    
}
