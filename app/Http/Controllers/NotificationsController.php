<?php

namespace App\Http\Controllers;

use App\Models\notifications;
use App\Http\Requests\StorenotificationsRequest;
use App\Http\Requests\UpdatenotificationsRequest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function notification_index()
    {
        //
        $notification=new notifications();
        //$notification->user_id = Auth::id();
        return view('Staff.Non-Teaching.notifications',compact(['notification']));
    
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
    public function store(StorenotificationsRequest $request)
    {
        //dd($request);
        $notification=new notifications();
        $notification->user_id = Auth::id();
        $notification->notification_title=$request->notification_title;
         
        if($request->notification_type=="Leave")
         {
             
            $notification->notification_type=$request->notification_type;       
         }
         elseif($request->notification_type=="Qualification")
         {
            $notification->notification_type=$request->notification_type;      
         }

         
         $notification->date=$request->date;
         $notification->description=$request->description;
         $notification->save();
         
        
         $notificationinsertedId= $notification->id;
         if($notificationinsertedId > 0){
             $status = 1;
             return redirect('/Non-Teaching/notifications')->with('status', $status);
         }else{
             $status = 0;
             return redirect('/Non-Teaching/notifications')->with('status', $status);
        }
    }

   


    /**
     * Display the specified resource.
     */
    public function show(notifications $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notifications $notifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenotificationsRequest $request, notifications $notifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notifications $notifications)
    {
        //
    }
}
