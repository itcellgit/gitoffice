<?php

namespace App\Http\Controllers;


use App\Models\event;
use App\Models\User;
use App\Models\department;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Support\Facades\DB;
use Auth;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $deptevent = event::with('department')->get();
        // dd($deptevent);
        $departments = DB::table('departments')->where('status','active')->get();

        $selectedDepartments = range(1, 30);
        //$selectedDepartments = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30];

        return view('Principaloffice.poevents',compact('deptevent','departments','selectedDepartments'));

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


    // public function store(StoreeventRequest $request)
    // {
    //      //dd($request->all());
    //      //dd($request);
    //     $event=new event();
    //     $event->user_id = Auth::id();
    //     $event->event_name=$request->event_name;
    //     $event->start_date=$request->start_date;
    //     $event->to_date=$request->to_date;
    //     $event->location=$request->location;
    //     $event->organizers=$request->organizers;
    //     $event->event_website=$request->event_website;
    //    // $event->staff_type=$request->staff_type;
    //     if($request->staff_type=="Teaching")
    //     {
            
    //         $event->staff_type=$request->staff_type;       
    //     }
    //     elseif($request->staff_type=="Non-Teaching")
    //     {
    //         $event->staff_type=$request->staff_type;      
    //     }
    //     elseif($request->staff_type=="All")
    //     {
    //         $event->staff_type=$request->staff_type;      
    //     }
    //     $event->save();

       
    //     if($request->file('attachment'))
    //     {
    //        $text=$request->file('attachment')->extension();
    //        $contents=file_get_contents($request->file('attachment'));
    //        $filename=Str::random(25);
    //        $path="attachment/$filename.$text";
    //        Storage::disk('public')->put($path,$contents);
    //        $request->file('attachment')->move(public_path('attachment'), $filename);
    //        $event->update(['attachment'=>$filename]);

    //        //dd(public_path('attachment') . '/' . $filename);
    //     }



    //     $depart = $request->departments; 
    //     //dd($depart);
    //     foreach ($depart as  $d ) {
    //         $event->department()->attach($d);
    //        //dd($event);
    //     }

    //    // $eventresult=$event->department()->attach($request->department_id);
    //     $eventinsertedId = $event->id;
    //     if($eventinsertedId > 0){
    //         $status = 1;
    //         return redirect('/Principaloffice/poevents')->with('status', $status);
    //     }else{
    //         $status = 0;
    //         return redirect('/Principaloffice/poevents')->with('status', $status);
    //     }
       
        
    // }

       
    
    public function store(StoreeventRequest $request)
    {
        // Debugging request data
        //dd($request->all());
    
        $event = new event();
        $event->user_id = Auth::id();
        $event->event_name = $request->event_name;
        $event->start_date = $request->start_date;
        $event->to_date = $request->to_date;
        $event->location = $request->location;
        $event->organizers = $request->organizers;
        $event->event_website = $request->event_website;
    
        // Handle staff type
        if (in_array($request->staff_type, ["Teaching", "Non-Teaching", "All"])) {
            $event->staff_type = $request->staff_type;
        }
    
        //Handle file upload


        if ($request->hasFile('attachment')) {
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
        return redirect('/Principaloffice/poevents')->with('status', $status);
    }


   

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


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
         if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $filename = Str::random(25) . '.' . $attachment->getClientOriginalExtension();
            $path = $attachment->storeAs('attachments', $filename, 'public');

            //dd($path = $attachment->storeAs('attachments', $filename, 'public'));

            $event->attachment = $filename;
        }

        $result = $event->update();  
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Principaloffice/poevents')->with('status', $status);
  
    }

 
    /**
     * Remove the specified resource from storage.
     */
    

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
        return redirect('/Principaloffice/poevents')->with('status', $status);
    }
    
}
