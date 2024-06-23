<?php
namespace App\Http\Controllers\Ticketing;

use App\Models\Ticketing\ticket;
use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreticketRequest;
use App\Http\Requests\UpdateticketRequest;
use App\Models\post_ticket;
use Illuminate\Support\Facades\DB;
use App\Enums\UserRoles;
use Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=auth()->user();
        $user_id = $user->id;
        $deptid = DB::table('departments')->value('id');
         $tickets=$user->isAdmin?ticket::latest()->get():$user->tickets;
         $staff = $user->staff;
          session(['user_id' => $user_id, 'deptid' => $deptid]);
        $tickets_count = DB::table('tickets')
        ->select(
            DB::raw('COUNT(CASE WHEN status = "New" THEN 1 END) as new_count'),
            DB::raw('COUNT(CASE WHEN status = "Pending" THEN 1 END) as pending_count'),
            DB::raw('COUNT(CASE WHEN status = "Resolved" THEN 1 END) as resolved_count')
        )
         ->where('user_id', $user_id)
        ->first();
        return view('ticketing.dashboard',compact('tickets','staff','tickets_count'));
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
    // public function store(StoreticketRequest $request)
    // {
    //      $ticket=ticket::create
    //     ([
    //         'title'=>$request->title,
    //         'description'=>$request->description,
    //         'user_id'=>auth()->id(),

    //     ]);

    //     $ticket->save();
    //     //dd($request);
    //    // Update attachment if provided

    //    if($request->file('attachment'))
    //    {
    //        $text=$request->file('attachment')->extension();
    //        $contents=file_get_contents($request->file('attachment'));
    //        $filename=Str::random(25);
    //        $path="attachment/$filename.$text";
    //        Storage::disk('public')->put($path,$contents);
    //        $request->file('attachment')->move(public_path('attachment'), $filename);
    //        $ticket->update(['attachment'=>$filename]);
    //     }
    //         return redirect('ticket/dashboard');
    // }
    public function store(StoreticketRequest $request)
    {
         $ticket=ticket::create
        ([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>auth()->id(),
            
        ]);
        $ticket->save();
        //dd($request);
       // Update attachment if provided
      $attachments = $request->file('attachment');
        if ($attachments) 
        {
             $file_data = [];

         $attachments = is_array($attachments) ? $attachments : [$attachments];
         foreach ($attachments as $attachment) 
         {
            $extension = $attachment->extension();
            $filename = Str::random(25) . '.' . $extension;
            $path = "attachment/$filename";
            Storage::disk('public')->put($path, file_get_contents($attachment));
            $file_data[] = $filename;
        }
         $ticket->update
         ([
            'attachment' => count($file_data) === 1 ? $file_data[0] : json_encode($file_data)
        ]);
        }

    
        return redirect('ticket/dashboard');
    }
   


    /**
     * Display the specified resource.
     */
    public function show(ticket $ticket)
    {
        $postticket = post_ticket::where('ticket_id', $ticket->id)->get();
        $user=auth()->user();
        $staff = $user->staff;


         return view('Ticketing.showticket',compact('ticket','postticket','staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        return view('ticket.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateticketRequest $request, ticket $ticket)
    {
        // dd($request);
         $ticket->title=$request->title;
         $ticket->description=$request->description;
    //     if($request->file('attachment'))
    //    {
    //        $text=$request->file('attachment')->extension();
    //        $contents=file_get_contents($request->file('attachment'));
    //        $filename=Str::random(25);
    //        $path="attachment/$filename.$text";
    //        Storage::disk('public')->put($path,$contents);
    //        $request->file('attachment')->move(public_path('attachment'), $filename);
    //        $ticket->update(['attachment'=>$filename]);
    //    }

    // multiple images
    $attachments = $request->file('attachment');
    if ($attachments) 
    {
         $file_data = [];

     $attachments = is_array($attachments) ? $attachments : [$attachments];
     foreach ($attachments as $attachment) 
     {
        $extension = $attachment->extension();
        $filename = Str::random(25) . '.' . $extension;
        $path = "attachment/$filename";
        Storage::disk('public')->put($path, file_get_contents($attachment));
        $file_data[] = $filename;
    }
     $ticket->update
     ([
        'attachment' => count($file_data) === 1 ? $file_data[0] : json_encode($file_data)
    ]);
    }
    
      
        return redirect(route('ticket.dashboard'));
    }
   
    /**
     * Remove the specified resource from storage.
     */
  
    public function destroy(ticket $ticket)
    {
        // Detach related records in the post_tickets table
        $ticket->post_ticket()->delete();
        
        // Now delete the ticket
        $ticket->delete();
        
        return redirect(route('ticket.dashboard'));
    }

  

}
