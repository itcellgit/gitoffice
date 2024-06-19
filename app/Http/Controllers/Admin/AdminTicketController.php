<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ticketing\ticket;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;
use Illuminate\Http\Request;
use App\Models\post_ticket;
use App\Models\staff;
use Illuminate\Support\Facades\DB;



class AdminTicketController extends Controller
{
    public function index()
    {
        $user=auth()->user();
         $tickets=ticket::with('user')->orderBy('status')->get();
       
        $admin_tickets_count = DB::table('tickets')
        ->select(
            DB::raw('COUNT(CASE WHEN status = "New" THEN 1 END) as new_count'),
            DB::raw('COUNT(CASE WHEN status = "Pending" THEN 1 END) as pending_count'),
            DB::raw('COUNT(CASE WHEN status = "Resolved" THEN 1 END) as resolved_count')
        )
        
        ->first();
         return view('Admin.tickets.adminticket',compact('tickets','admin_tickets_count'));
    }
    // public function index()
    // {
    //     $user = auth()->user();
    //     $tickets = ticket::with('staff', 'user')
    //         ->orderBy('status')
    //         ->get();
    
    //     $admin_tickets_count = DB::table('tickets')
    //         ->select(
    //             DB::raw('COUNT(CASE WHEN status = "New" THEN 1 END) as new_count'),
    //             DB::raw('COUNT(CASE WHEN status = "Pending" THEN 1 END) as pending_count'),
    //             DB::raw('COUNT(CASE WHEN status = "Resolved" THEN 1 END) as resolved_count')
    //         )
    //         ->first();
    
    //     return view('Admin.tickets.adminticket', compact('tickets', 'admin_tickets_count'));
    // }
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
    public function store(StoreticketRequest $request)
    {
       
        $ticket=ticket::create
        ([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>auth()->id(),
            //'status'=>$request->status,
          

        ]);
            $ticket->save();
        if($request->file('attachment'))
        {
            $text=$request->file('attachment')->extension();
            $contents=file_get_contents($request->file('attachment'));
            $filename=Str::random(25);
            $path="attachment/$filename.$text";
            Storage::disk('public')->put($path,$contents);
            $request->file('attachment')->move(public_path('attachment'), $filename);
            $ticket->update(['attachment'=>$filename]);
        }

        return redirect('Admin/tickets/adminticket');
    }

    /**
     * Display the specified resource.
     */
    public function show(ticket $ticket)
    {
        $postticket = post_ticket::where('ticket_id', $ticket->id)->get();
        $user=auth()->user();
        $staff = $user->staff;
       
        return view('Admin.tickets.adminshowticket',compact('ticket','postticket','staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        return view('ticket.edit',compact('ticket'));
    }

    
   
   
}

