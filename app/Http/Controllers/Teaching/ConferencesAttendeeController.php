<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\conferences_attendee;
use App\Http\Requests\Storeconferences_attendeeRequest;
use App\Http\Requests\Updateconferences_attendeeRequest;
use Auth;
use App\Models\staff;
use App\Models\conferences_conducted;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConferencesAttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(Storeconferences_attendeeRequest $request)
    {
        // dd($request);
        $attended=new conferences_attendee();
        $attended->egov_id=$this->gen_egov_id($request->from_date);
        $attended->conference_name=$request->conference_name;
        $attended->attended_as=$request->attended_as;
        $attended->from_date=$request->from_date;
        $attended->to_date=$request->to_date;
        $attended->no_of_days=$request->no_of_days;
        $attended->title=$request->title;
        $attended->place=$request->place;
        $attended->sponsored=$request->sponsored;
        if($request->sponsored_by=="KLS GIT")
        {

            $attended->sponsored_by=$request->sponsored_by;
        }
        else{
            $attended->sponsored_by=$request->other_sponsored;
        }

        $attended->amount=$request->amount;
        $attended->weblink=$request->weblink;
        $attended->type_of_level = $request->type_of_level;
        $attended->ISSN_NO = $request->ISSN_NO;

        //file upload

        $file=$request->file("document");
        // $final_file_upload_name = $this->gen_egov_id($request->from_date).'.'.$file->getClientOriginalExtension();
        // $attended->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Conference_Attended';

        $file_size = $file->getSize();
        $file_upload_status = 0;
        $activityinsertedId = 0;
        $file_size_status = 0;
        $result = 0;


        if($file_size <= 500000)
        {
            $file_size_status = 1;
            if($file->store('public/Uploads/Research/Conference_Attended/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $attended->document= $file->hashName();
               $conferenceId =  $attended->save();

                $user = Auth::user();
                // dd($user);
                $staff=staff::with('conferences_attendee')->where('user_id','=',$user->id)->first();
                //$staff=staff::with('departments')->where('user_id',$user->id)->get();
                //dd($staff[0]);
                    $result=$staff->conferences_attendee()->attach($attended->id);
                }
                else
                {
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }
            }

        if($conferenceId && $file_upload_status && $file_size_status){
            $status = 1;
        }else{
            $status = 0;
        }

        $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];

        //return redirect('/Teaching/research')->with('return_data', $return_data);
        return redirect('/Teaching/research/conferenceactivities')->with('return_data', $return_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(conferences_attendee $conferences_attendee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(conferences_attendee $conferences_attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateconferences_attendeeRequest $request, conferences_attendee $conferences_attendee)
    {

     //dd($request->conference_name);
        $conferences_attendee->conference_name=$request->edit_conference_name;
        $conferences_attendee->attended_as=$request->edit_attended_as;
        $conferences_attendee->from_date=$request->edit_from_date;
        $conferences_attendee->to_date=$request->edit_to_date;
        $conferences_attendee->no_of_days=$request->edit_no_of_days;
        $conferences_attendee->title=$request->edit_title;
        $conferences_attendee->place=$request->edit_place;
        $conferences_attendee->egov_id=$this->gen_egov_id($request->edit_from_date);
        $conferences_attendee->sponsored=$request->edit_sponsored;
        if($request->sponsored_by)
        {
            $conferences_attendee->sponsored_by=$request->edit_sponsored_by;
        }

        $conferences_attendee->amount=$request->edit_amount;
        $conferences_attendee->weblink=$request->edit_weblink;
        $conferences_attendee->type_of_level=$request->edit_type_of_level;
        $conferences_attendee->ISSN_NO=$request->edit_ISSN_NO;

         // Update validation status
        //dd($request->validation_status);
        $conferences_attendee->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


        //file upload
        $file=$request->file("document");
        //dd($file);
        // $final_file_upload_name = $conferences_attendee->egov_id.'.'.$file->getClientOriginalExtension();
        // $conferences_attendee->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Conference_Attended/';

        //to get the file size
        $file_size = $file->getSize();
        $file_upload_status = 0;
        $file_size_status = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
                //for deleting the existing file and replacing it with the new one.
                File::delete('public/Uploads/Research/Conference_Attended/'.$conferences_attendee->document);

                if($file->store('public/Uploads/Research/Conference_Attended/'))
                {
                    //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $conferences_attendee->document= $file->hashName();
                   $result =  $conferences_attendee->update(); // insert the row and upload the file only when all the conditions are met.

                }
                else{
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }

        }else{
            $file_size_status = 0;
        }


        if($result && $file_upload_status == 1 &&  $file_size_status == 1){
            $status = 1;
        }else{
            $status = 0;
        }

        $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];

        //return redirect('/Teaching/research')->with('return_data', $return_data);
        return redirect('/Teaching/research/conferenceactivities')->with('return_data', $return_data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(conferences_attendee $conferences_attendee)
    {
        //

        $user = Auth::user();
        $staff=staff::with('conferences_attendee')->where('user_id','=',$user->id)->first();
        $delete=$staff->conferences_attendee()->detach($conferences_attendee->id);
       // dd($professional_activity_attendee);
        $result =$conferences_attendee->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }


        //return redirect('/Teaching/research')->with('status', $status);
        return redirect('/Teaching/research/conferenceactivities')->with('status', $status);
    }

    public function gen_egov_id($attendee_date)
    {
        $year = date('Y', strtotime($attendee_date));
        $month = date('M',strtotime($attendee_date));
        $no="";
        $conferences_attendee=conferences_attendee::whereYear('from_date',$year)->orderBy('id','desc')->first();
        if($conferences_attendee==null){
            $no="00001";
        }
        else
        {

                $oldegov_id=$conferences_attendee->egov_id;
                //dd(substr($oldegov_id,9,10));
                $oldno=intval(substr($oldegov_id,9,10));

                $no=$oldno+1;

                $no = str_pad($no, 5, '0', STR_PAD_LEFT);


        }
        return ($year.$month."".$no);
    }
}
