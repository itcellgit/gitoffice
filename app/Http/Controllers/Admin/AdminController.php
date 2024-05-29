<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\staff;
use App\Models\event;
use App\Models\notice;
use App\Models\Role;
use App\Models\UserRoles;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;





class AdminController extends Controller
{
    public function dashboard()
    {
        //count of totalemployees
        $totalemployee = Staff::count();

        // Count teaching employees
        $totalteachingEmployees=DB::table('staff')
       ->join('employee_types','employee_types.staff_id','=','staff.id')
        ->where('employee_types.employee_type','=','Teaching')
        ->count();

        // Count non-teaching employees
        $totalnonTeachingEmployees=DB::table('staff')
        ->join('employee_types','employee_types.staff_id','=','staff.id')
         ->where('employee_types.employee_type','=','Non-Teaching')
         ->count(); 

       $deptevent = event::with('department')->get();

        $dept_notice = notice::with('department')->get();
        // dd($deptevent);
        $departments = DB::table('departments')->where('status','active')->get();


        return view('Admin.dashboard',compact('totalemployee','totalteachingEmployees','totalnonTeachingEmployees','deptevent','dept_notice','departments'));
    }
   

    public function users()
    {

        $users = user::all();


        return view('admin.users', compact('users'));
    }



    public function startImpersonation(User $user)
    {
        if (Auth::user()->isSuperAdmin()) {
            // Store the original user's ID for reverting later
            session(['original_user_id' => Auth::id()]);

            // Start impersonating the selected user
            Auth::login($user);

            // Update the impersonation flags
            $impersonatedUser = Auth::user();
            $impersonatedUser->is_impersonating = true;
            $impersonatedUser->impersonator_id = session('original_user_id');
            $impersonatedUser->save();

            //return redirect()->route('Admin.dashboard');
            switch ($impersonatedUser->role) {
                case 'Super Admin':
                    return redirect()->route('Admin.dashboard');
                case 'non-teaching':
                    return redirect()->route('Non-Teaching.dashboard');
                case 'teaching':
                    return redirect()->route('Teaching.dashboard');
                case 'Establishment':
                    return redirect()->route('ESTB.dashboard');
                case 'Principal':
                    return redirect()->route('PRINCIPAL.dashboard');
                case 'Head of Department':
                    return redirect()->route('HOD.dashboard');
                case 'Deanrnd':
                    return redirect()->route('Deanrnd.dashboard');
                case 'egov_admin':
                    return redirect()->route('egov.dashboard');
                case 'principal_office':
                    return redirect()->route('Principaloffice.podashboard');
                case 'Exam_section':
                    return redirect()->route('Examoffice.dashboard');
                case 'Principal':
                    return redirect()->route('PRINCIPAL.dashboard');
            }

        }

        return redirect()->route('login')->with('error', 'Unauthorized access');
    }





    public function stopImpersonation()
    {
        //dd('stopImpersonation method called');
        if (session()->has('original_user_id')) {
            // Revert to the original user
            $originalUser = User::find(session('original_user_id'));
            Auth::login($originalUser);

            // Clear the impersonation flags
            $impersonatedUser = Auth::user();
            $impersonatedUser->is_impersonating = false;
            $impersonatedUser->impersonator_id = null;
            $impersonatedUser->save();

            // Forget the original user ID from the session
            session()->forget('original_user_id');

            return redirect()->route('Admin.dashboard');
        }

        return redirect()->route('login')->with('error', 'No impersonation session found');
    }


}
