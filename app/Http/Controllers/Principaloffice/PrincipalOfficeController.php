<?php

namespace App\Http\Controllers\Principaloffice;

use App\Http\Controllers\Controller;
use App\Enums\UserRoles;
use App\Models\user;
use App\Models\users;
use App\Models\event;
use App\Models\notice;
use App\Models\notifications;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorenoticeRequest;
use App\Http\Requests\UpdatenoticeRequest;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Session;
use Hash;
use Auth;

use Illuminate\Http\Request;

class PrincipalOfficeController extends Controller
{
    //
    public function dashboard()
    {
        $user = Auth::user();
        $deptevent = event::with('department')->get();
        $dept_notice = notice::with('department')->get();
        //dd($deptevent);
        $departments = DB::table('departments')->where('status','active')->get();

        //$notifications = notifications::where('user_id', $user->id)->get();
        $notifications = notifications::where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->get();
       
        //dd($notifications);
        // $events = event::with('department')->get();
        // Session::put('events', $events);

        $notifications = session('notifications', []);
        $events = session('events', []);

        foreach ($notifications as $key => $notification) {
            if (isset($events[$key])) {
                $notifications[$key]['event_name'] = $events[$key]['event_name'];
            } else {
                $notifications[$key]['event_name'] = null;
            }
        }

        session(['notifications' => $notifications]);
        // Store notifications in session to send in profile
        //Session::put('notifications', $notifications);
        //dd(Session::get('notifications'));
        return view('Principaloffice.podashboard', compact('deptevent', 'departments','dept_notice','notifications','events'));
    }

}
