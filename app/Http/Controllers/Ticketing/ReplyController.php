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
      // dd($request);
        $postticket = new post_ticket();
        $postticket->ticket_id = $ticket->id;
        $postticket->user_id = $user->id;
        $postticket->title = $request->title;
        $postticket->description = $request->description;

        // Update attachment if provided

        // if($request->file('attachment'))
        // {
        //     $extension=$request->file('attachment')->extension();
        //     $contents=file_get_contents($request->file('attachment'));
        //    // $filename=Str::random(25);
        //     $filename = Str::random(25) . '.' . $extension;
        //      $path = $request->file('attachment')->storeAs('attachment', $filename, 'public');
        //     //$path="attachment/$filename.$text";
        //     Storage::disk('public')->put($path,$contents);
        //     $request->file('attachment')->move(public_path('attachment'), $filename);
        //     //$ticket->update(['attachment'=>$filename]);
        //     $postticket->attachment = $filename;
        // }

        // multiple images
    
        $attachments = $request->file('post_attachment');
        if ($attachments) {
            $file_data = [];
        // Ensure $attachments is always an array
            $attachments = is_array($attachments) ? $attachments : [$attachments];
        
            foreach ($attachments as $attachment)
             {
                $extension = $attachment->extension();
                $filename = Str::random(25) . '.' . $extension;
                $path = "post_attachment/$filename"; // Updated path to post_attachment
                Storage::disk('public')->put($path, file_get_contents($attachment));
                $file_data[] = $filename;
            }
        
            
            $postticket->post_attachment = count($file_data) === 1 ? $file_data[0] : json_encode($file_data); 
        }
        
            $postticket->save();
        
        return redirect()->route('ticket.show', ['ticket' => $ticket->id])
         ->with('success', 'postticket saved successfully.');
    }
        
    
        //      $postticket = post_ticket::where('ticket_id', $ticket->id)->get();

            
        //  return view('Ticketing.showticket',compact('ticket','postticket'));

    

    public function update(Updatepost_ticketRequest $request, ticket $ticket)
    {
         $status = $request->status;
        //dd($request);
        if ($status == "Pending" || $status == "Resolved") 
        {
            $ticket->status = $status;
        }
        else 
        {
             $ticket->status = "Open";
        }
        $ticket->update();
        $postticket = post_ticket::where('ticket_id', $ticket->id)->get();

       return view('Admin.tickets.adminshowticket',compact('ticket','postticket'));
    }
    
 }
    






   

