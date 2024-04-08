<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\professional_activity_conducted;
use App\Http\Requests\Storeprofessional_activity_conductedRequest;
use App\Http\Requests\Updateprofessional_activity_conductedRequest;
use Auth;
use App\Models\staff;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProfessionalActivityConductedController extends Controller
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
    public function store(Storeprofessional_activity_conductedRequest $request)
    {
        //
         //dd($request);
         $conduct=new professional_activity_conducted();
         $conduct->title=$request->con_title;
         $conduct->level=$request->con_level;
         $conduct->organizer=$request->con_organizer;
         $conduct->co_organizer=$request->con_co_organizer;
         $conduct->category=$request->con_category;
         $conduct->sponsored=$request->con_sponsored;
            if($request->con_sponsoring_agency_name_address){
                $conduct->sponsoring_agency_name_address=$request->con_sponsoring_agency_name_address;
            }
        //$conduct->sponsorsponsoring_agency_name_addressed_by=$request->sponsoring_agency_name_address;

         $conduct->egov_id=$this->gen_egov_id($request->con_from_date);
         $conduct->from_date=$request->con_from_date;
         $conduct->to_date=$request->con_to_date;
         $conduct->place=$request->con_place;
         $conduct->no_of_days=$request->con_no_of_days;
         $conduct->role=$request->con_role;

         //file upload
          $file=$request->file("document");
        //   $final_file_upload_name = $this->gen_egov_id($request->con_from_date).'.'.$file->getClientOriginalExtension();
        //   $conduct->document= $final_file_upload_name;
        //   $destination ='Uploads/Professional_Activity_Conducted/';

         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $activitynsertedId = 0;
         $file_size_status = 0;

         if($file_size <= 500000){
            $file_size_status = 1;
            //if($file->move($destination,$final_file_upload_name))
            if($file->store('public/Uploads/Professional_Activity_Conducted/'))
            {
              //dd("File upload Sucess");
              $file_upload_status = 1;
              $conduct->document= $file->hashName();
              $activitynsertedId=$conduct->save();
              $user = Auth::user();
                    // dd($user);
              $staff=staff::with('professional_activity_conducted')->where('user_id','=',$user->id)->first();
                //$staff=staff::with('departments')->where('user_id',$user->id)->get();
                    //dd($staff[0]);
              $result=$staff->professional_activity_conducted()->attach($conduct->id);

            }else {
              //dd( "Failed to upload file");
              $file_upload_status = 0;
            }
        }else{
            $file_size_status = 0;
        }


      if($activitynsertedId && $file_upload_status && $file_size_status){
          $status = 1;
      }else{
          $status = 0;
      }
      // dd($result);
      $return_data = [
        'status' => $status,
        'file_size_status' => $file_size_status
    ];

      return redirect('/Teaching/professionalactivities')->with('return_data', $return_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(professional_activity_conducted $professional_activity_conducted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(professional_activity_conducted $professional_activity_conducted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateprofessional_activity_conductedRequest $request, professional_activity_conducted $professional_activity_conducted)
    {
        //dd($request);

         $professional_activity_conducted->title=$request->e_title;
         $professional_activity_conducted->level=$request->e_level;
         $professional_activity_conducted->organizer=$request->e_organizer;
         $professional_activity_conducted->co_organizer=$request->e_co_organizer;
         $professional_activity_conducted->category=$request->e_category;
       $professional_activity_conducted->sponsored=$request->e_sponsored;
         if($request->sponsoring_agency_name_address){
            $professional_activity_conducted->sponsoring_agency_name_address=$request->e_sponsoring_agency_name_address;
        }
         $professional_activity_conducted->from_date=$request->e_from_date;
         $professional_activity_conducted->to_date=$request->e_to_date;
         $professional_activity_conducted->place=$request->e_place;
         $professional_activity_conducted->no_of_days=$request->e_no_of_days;
         $professional_activity_conducted->role=$request->e_role;

          // Update validation status
        //dd($request->validation_status);
        $professional_activity_conducted->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


         //file upload
        $file=$request->file("document");
        //dd($file);
        // $final_file_upload_name = $professional_activity_conducted->egov_id.'.'.$file->getClientOriginalExtension();
        // $professional_activity_conducted->document= $final_file_upload_name;
        // $destination = 'Uploads/Professional_Activity_Conducted/';

        //to get the file size
        $file_size = $file->getSize();
        $file_upload_status = 0;
        $file_size_status = 0;
        $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
                //for deleting the existing file and replacing it with the new one.
                //File::delete('Uploads/Professional_Activity_Conducted/'.$professional_activity_conducted->document);
                File::delete('public/Uploads/Professional_Activity_Conducted/'.$professional_activity_conducted->document);

                //if($file->move($destination,$final_file_upload_name))
                if($file->store('public/Uploads/Professional_Activity_Conducted/'))
                {
                    //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $professional_activity_conducted->document= $file->hashName();
                    $result=$professional_activity_conducted->update();
                   // dd($result);
                } else{
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }

        }else{
            $file_size_status = 0;
        }

        if($result && $file_size_status == 1 && $file_upload_status == 1){
            $status = 1;
        }else{
            $status = 0;
        }

        $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];

        return redirect('/Teaching/professionalactivities')->with('return_data', $return_data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(professional_activity_conducted $professional_activity_conducted)
    {

        $user = Auth::user();
        $staff=staff::with('professional_activity_conducted')->where('user_id','=',$user->id)->first();
        $delete=$staff->professional_activity_conducted()->detach($professional_activity_conducted->id);
       // dd($professional_activity_attendee);
        $result =$professional_activity_conducted->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/professionalactivities')->with('status', $status);
    }


    public function gen_egov_id($conducted_date)
    {
        $year = date('Y', strtotime($conducted_date));
        $month = date('M',strtotime($conducted_date));
        $no="";
        $professional_activity_conducted=professional_activity_conducted::where('from_date','<=',$year.'-12-31')->orderBy('id','desc')->first();
        if($professional_activity_conducted==null){
            $no="00001";
        }
        else
        {
            $oldyear=date('Y', strtotime($professional_activity_conducted->from_date));

            if($oldyear<$year){
                $no="00001";
            }
            else
            {
                $oldegov_id=$professional_activity_conducted->egov_id;
                //dd(substr($oldegov_id,9,10));
                $oldno=intval(substr($oldegov_id,9,10));

                $no=$oldno+1;

                if($no<10)
                {
                    $no='0000'.$no;
                }
                if($no<100 && $no>=10)
                {
                    $no='000'.$no;
                }
                if($no<1000 && $no>100)
                {
                    $no='00'.$no;
                }
                if($no<10000 & $no>1000)
                {
                    $no='0'.$no;
                }
            }

        }
        return ($year.$month."PC".$no);
    }
}