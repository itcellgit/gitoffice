<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\User;
use App\Models\department;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminEventController extends Controller
{
    public function index()
    {
        $deptevent = event::with('department')->get();
        // dd($deptevent);
        $departments = DB::table('departments')->where('status','active')->get();

        $selectedDepartments = range(1, 30);
        //$selectedDepartments = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30];

        return view('Admin.adminevents',compact('deptevent','departments','selectedDepartments'));

    }

    public function store(StoreeventRequest $request)
    {
        $event = new event();
        $event->user_id = Auth::id();
        $event->event_name = $request->event_name;
        $event->start_date = $request->start_date;
        $event->to_date = $request->to_date;
        $event->location = $request->location;
        $event->organizers = $request->organizers;
        $event->event_website = $request->event_webs;
        // Handle staff type
        if (in_array($request->staff_type, ["Teaching", "Non-Teaching", "All"])) 
        {
            $event->staff_type = $request->staff_type;
        }
    
        //Handle file upload
        if ($request->hasFile('attachment')) 
        {
            $attachment = $request->file('attachment');
            $filename = Str::random(25) . '.' . $attachment->getClientOriginalExtension();
            $path = $attachment->storeAs('attachments', $filename, 'public');
            //dd($path = $attachment->storeAs('attachments', $filename, 'public'));
            $event->attachment = $filename;
        }
         // Save the event
        $event->save();
    
        // Attach departments
        $departments = $request->departments;
        $event->department()->attach($departments);
    
        // Redirect with status
        $status = $event->id ? 1 : 0;
        return redirect('/Admin/adminevents')->with('status', $status);
    }


    public function update(UpdateeventRequest $request, event $event)
    {
        //dd($request);
        $event->event_name=$request->e_event_name;
        $event->start_date=$request->e_start_date;
        $event->to_date=$request->e_to_date;
        $event->location=$request->e_location;
        $event->organizers=$request->e_organizers;
        $event->event_website=$request->e_event_website;
        $event->staff_type=$request->e_staff_type;  
        // Handle file upload
         if ($request->hasFile('attachment')) 
        {
            $attachment = $request->file('attachment');
            $filename = Str::random(25) . '.' . $attachment->getClientOriginalExtension();
            $path = $attachment->storeAs('attachments', $filename, 'public');
            //dd($path = $attachment->storeAs('attachments', $filename, 'public'));
             $event->attachment = $filename;
        }
        $result = $event->update();  
        if($result)
        {
            $status = 1;
        }else
        {
            $status = 0;
        }
        return redirect('/Admin/adminevents')->with('status', $status);
  
    }

    public function destroy(event $event)
    {
        // Detach and delete associated records
        $event->department()->detach();
        
        // Delete the event
        $result = $event->delete();
    
        // Check if the deletion was successful
        if ($result) {
            $status = 1;
        } else {
            $status = 0;
        }
    
        // Redirect with status message
        return redirect('/Admin/adminevents')->with('status', $status);
    }
    

 



}
