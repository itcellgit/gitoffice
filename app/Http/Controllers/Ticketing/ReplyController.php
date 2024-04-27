<?php

namespace App\Http\Controllers\Ticketing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post_ticket;
use App\Models\Ticketing\ticket;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Storepost_ticketRequest;
use App\Http\Requests\Updatepost_ticketRequest;
use Auth;



class ReplyController extends Controller
{
    public function store(Storepost_ticketRequest $request,ticket $ticket)
    {
        //dd($ticket);
        $user = Auth::user();
     
        if (!$ticket)
        {
                // Handle the case where no ticket is found for the user
                // You might want to return an error or redirect the user
                // back with a message.
                // For now, I'll assume you want to handle this gracefully.
        return redirect()->back()->with('error', 'No ticket found for the user.');
        }
       //dd($request);
        $postticket = new post_ticket();
        $postticket->ticket_id = $ticket->id;
        $postticket->user_id = $user->id;
        $postticket->description = $request->description;		
        
        
        // if ($request->file('attachment')) {
        //     // Process attachment
        //     $text = $request->file('attachment')->extension();
        //     $contents = file_get_contents($request->file('attachment'));
        //     $filename = Str::random(25);
        //     $path = "attachment/$filename.$text";
        //     Storage::disk('public')->put($path, $contents);
        //     $postticket->attachment = $filename;
        // } else {
        //     // Handle case where attachment is not provided
        //     $postticket->attachment = ''; // or NULL, depending on your database schema
        // }
       // $postticket->save();
       //file upload
       $file=$request->file("attachment");
           
       $file_size = $file->getSize();
       $file_upload_status = 0;
       $postticketinsertedId = 0;
       $file_size_status = 0;
       $result = 0;

       if($file_size <= 500000)
       {
           $file_size_status = 1;
           if($file->store('public/Uploads/Research/Publications/'))
       {
           //dd("File upload Sucess");
           $file_upload_status = 1;
           $postticket->attachment= $file->hashName();
          $postticketinsertedId =  $postticket->save(); // insert the row and upload the file only when all the conditions are met.

       }
           else
           {
               //dd( "Failed to upload file");
               $file_upload_status = 0;
           }
       }
           if($postticketinsertedId && $file_upload_status && $file_size_status)
           {
               $status = 1;
           }
           else
           {
               $status = 0;
           }
       //dd($postticketinsertedId.'-'.$file_upload_status.'-'.$file_size_status.'-'.$result);
       $return_data =
       [
           'status' => $status,
           'file_size_status' => $file_size_status
       ];

      return redirect('Admin/tickets/adminticket')->with('return_data', $return_data);

        

        $postticket = post_ticket::where('ticket_id', $ticket->id)->get();


            // return redirect('ticket/show');
            // return view('Ticketing/showticket/reply');
         return view('Ticketing.showticket',compact('ticket','postticket'));
      
    }

    public function update(Updatepost_ticketRequest $request, ticket $ticket)
    {
         dd($request);

         
         $postticket->description=$request->description;
        
         if($request->file('attachment'))
       {
           $text=$request->file('attachment')->extension();
           $contents=file_get_contents($request->file('attachment'));
           $filename=Str::random(25);
           $path="attachment/$filename.$text";
           Storage::disk('public')->put($path,$contents);
           $request->file('attachment')->move(public_path('attachment'), $filename);
           $postticket->update(['attachment'=>$filename]);
       }
       if ($request->status == "Pending" || $request->status == "Resolved") 
       {
            $postticket->status = $request->status;
        } 
    else 
    {
        // Default to "updated" if the provided status is neither "pending" nor "resolved"
        $postticket->status = "Open";
    }

   $postticket->update();
        return redirect(route('ticket.dashboard'));
       // return redirect('Admin/tickets/adminticket');
    }
}
    






   

