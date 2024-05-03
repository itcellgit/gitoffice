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
        $postticket->description = $request->description;

        // Update attachment if provided
        if ($request->hasFile('attachment'))
        {
            // Delete old attachment if exists
            // if ($postticket->attachment)
            // {
            //     Storage::disk('public')->delete("attachment/{$postticket->attachment}");
            // }
            // Store new attachment
                $extension = $request->file('attachment')->extension();
                $filename = Str::random(25) . '.' . $extension;
                $path = $request->file('attachment')->storeAs('attachment', $filename, 'public');
            // Update attachment field in the postticket
                $postticket->attachment = $filename;
            }

             $postticket->save();

             $postticket = post_ticket::where('ticket_id', $ticket->id)->get();

            // return redirect('ticket/show');
            // return view('Ticketing/showticket/reply');
         return view('Ticketing.showticket',compact('ticket','postticket'));

    }

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
    






   

