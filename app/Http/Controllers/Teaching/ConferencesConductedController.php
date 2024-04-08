<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\conferences_conducted;
use App\Http\Requests\Storeconferences_conductedRequest;
use App\Http\Requests\Updateconferences_conductedRequest;
use Auth;
use App\Models\staff;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConferencesConductedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storeconferences_conductedRequest $request)
    {
       // dd($request);
        $conducted = new conferences_conducted();
       //dd($request);
        $conducted->egov_id=$this->gen_egov_id($request->cc_from_date);
        $conducted->conference_name=$request->cc_conference_name;
        $conducted->co_organizer=$request->cc_co_organizer;
        $conducted->no_of_participants=$request->cc_no_of_participants;
        $conducted->sponsored=$request->cc_sponsored;
        if($request->sponsoring_agency=="KLS GIT")
        {
            $conducted->sponsoring_agency=$request->cc_sponsoring_agency;
        }
         else
        {
            $conducted->sponsoring_agency=$request->cc_sponsoring_agency;

        }

        $conducted->from_date=$request->cc_from_date;
        $conducted->to_date=$request->cc_to_date;
        $conducted->no_of_days=$request->cc_no_of_days;
        $conducted->place=$request->cc_place;
        $conducted->publisher=$request->cc_publisher;
        $conducted->role=$request->cc_role;
        $conducted->weblink=$request->cc_weblink;
        $conducted->type_of_level=$request->cc_type_of_level;
        $conducted->ISSN_NO=$request->cc_ISSN_NO;


        //File Upload
        $file=$request->file("document");
        // $final_file_upload_name = $this->gen_egov_id($request->cc_from_date).'.'.$file->getClientOriginalExtension();
        // $conducted->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Conference_Conducted/';

        $file_size = $file->getSize();
        $file_upload_status = 0;
        $activityinsertedId = 0;
        $file_size_status = 0;
        $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
            //if($file->move($destination,$final_file_upload_name))
            if($file->store('public/Uploads/Research/Conference_Conducted/'))
            {
                //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $conducted->document= $file->hashName();
                    $conductedId = $conducted->save();

                    $user = Auth::user();

                    $staff=staff::with('conferences_conducted')->where('user_id','=',$user->id)->first();

                    $result=$staff->conferences_conducted()->attach($conducted->id);
                }
                else
                {
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }
        }

         if($conductedId && $file_upload_status && $file_size_status){
             $status = 1;
         }else{
             $status = 0;
         }

         $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];

         return redirect('/Teaching/research/conferenceactivities')->with('return_data', $return_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(conferences_conducted $conferences_conducted)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(conferences_conducted $conferences_conducted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateconferences_conductedRequest $request, conferences_conducted $conferences_conducted)
    {
        //
        $conferences_conducted->conference_name=$request->ce_conference_name;
        $conferences_conducted->co_organizer=$request->ce_co_organizer;
        $conferences_conducted->no_of_participants=$request->ce_no_of_participants;
        $conferences_conducted->sponsored=$request->ce_sponsored;
        if($request->sponsoring_agency)
        {
            $conferences_conducted->sponsoring_agency=$request->ce_sponsoring_agency;
         }

        $conferences_conducted->from_date=$request->ce_from_date;
        $conferences_conducted->to_date=$request->ce_to_date;
        $conferences_conducted->egov_id=$this->gen_egov_id($request->ce_from_date);
        $conferences_conducted->no_of_days=$request->ce_no_of_days;
        $conferences_conducted->place=$request->ce_place;
        $conferences_conducted->publisher=$request->ce_publisher;
        $conferences_conducted->role=$request->ce_role;
        $conferences_conducted->weblink=$request->ce_weblink;
        $conferences_conducted->type_of_level=$request->ce_type_of_level;
        $conferences_conducted->ISSN_NO=$request->ce_ISSN_NO;



        // Update validation status
        //dd($request->validation_status);
        $conferences_conducted->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


         //file upload
         $file=$request->file("document");
         //dd($file);
        //  $final_file_upload_name = $conferences_conducted->egov_id.'.'.$file->getClientOriginalExtension();
        //  $conferences_conducted->document= $final_file_upload_name;
        //  $destination = 'Uploads/Research/Conference_Conducted/';

         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $file_size_status = 0;
         if($file_size <= 500000)
         {
             $file_size_status = 1;
                 //for deleting the existing file and replacing it with the new one.
                 File::delete('public/Uploads/Research/Conference_Conducted/'.$conferences_conducted->document);

                 if($file->store('public/Uploads/Research/Conference_Conducted/'))
                 {
                     //dd("File upload Sucess");
                     $file_upload_status = 1;
                     $conferences_conducted->document= $file->hashName();
                    $result=  $conferences_conducted->update(); // insert the row and upload the file only when all the conditions are met.

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

        return redirect('/Teaching/research/conferenceactivities')->with('return_data', $return_data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(conferences_conducted $conferences_conducted)
    {
        //
        $user = Auth::user();
        $staff=staff::with('conferences_conducted')->where('user_id','=',$user->id)->first();
        $delete=$staff->conferences_conducted()->detach($conferences_conducted->id);
       // dd($professional_activity_attendee);
        $result =$conferences_conducted->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/research/conferenceactivities')->with('status', $status);
    }

    public function gen_egov_id($conducted_date)
    {
        $year = date('Y', strtotime($conducted_date));
        $month = date('M',strtotime($conducted_date));
        $no="";
        $conferences_conducted=conferences_conducted::whereYear('from_date',$year)->orderBy('id','desc')->first();
        if($conferences_conducted==null){
            $no="00001";
        }
        else
        {

            $oldegov_id=$conferences_conducted->egov_id;
            //dd(substr($oldegov_id,9,10));
            $oldno=intval(substr($oldegov_id,9,10));

            $no=$oldno+1;

            $no = str_pad($no, 5, '0', STR_PAD_LEFT);


        }
        return ($year.$month."CC".$no);
    }
}
