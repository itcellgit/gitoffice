<?php

namespace App\Http\Controllers\NonTeaching;
use App\Http\Controllers\Controller;
use App\Models\professional_activity_attendee;
use App\Models\professional_activity_coducted;
use Illuminate\Http\Request;
use Auth;
use App\Models\staff;
use App\Http\Requests\Storeprofessional_activity_attendeeRequest;
use App\Http\Requests\Updateprofessional_activity_attendeeRequest;
use App\Http\Requests\Storeprofessional_activity_conductedRequest;
use App\Http\Requests\Updateprofessional_activity_coductedRequest;
use Illuminate\Support\Facades\File;


class NT_ProfessionalActivityAttendeeController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $staff=staff::with('professional_activity_attendee')->with('professional_activity_conducted')->where('user_id','=',$user->id)->first();

        //dd($staff);
        return view('Staff.Non-Teaching.professional_activity',compact(['staff']));
    }

    public function store(Storeprofessional_activity_attendeeRequest $request)
    {
        //dd($request);
        $activity=new professional_activity_attendee();
        $activity->title=$request->title;
        $activity->organizer=$request->organizer;
        $activity->role=$request->role;
        $activity->level=$request->level;
        $activity->category=$request->category;
        $activity->sponsored=$request->sponsored;
        if($request->sponsored_by=="KLS GIT")
        {

            $activity->sponsored_by=$request->sponsored_by;
        }
        else{
            $activity->sponsored_by=$request->other_sponsored;
        }

        $activity->egov_id=$this->gen_egov_id($request->from_date);
        $activity->from_date=$request->from_date;
        $activity->to_date=$request->to_date;
        $activity->no_of_days=$request->no_of_days;

        //file upload
         $file=$request->file("document");
        //  $final_file_upload_name = $this->gen_egov_id($request->from_date).'.'.$file->getClientOriginalExtension();
        //  $activity->document= $final_file_upload_name;
        //  $destination = 'Uploads/Professional_Activity_Attended';

         $file_size = $file->getSize();
         $file_upload_status = 0;
         $activityinsertedId = 0;
         $file_size_status = 0;
         $result = 0;

         if($file_size <= 500000)
         {
             $file_size_status = 1;
             if($file->store('public/Uploads/Professional_Activity_Attended/'))
             {
                 //dd("File upload Sucess");
                 $file_upload_status = 1;
                 $activity->document= $file->hashName();
                 $activityinsertedId =  $activity->save(); // insert the row and upload the file only when all the conditions are met.

                 $user = Auth::user();
                 // dd($user);
                 $staff=staff::with('professional_activity_attendee')->where('user_id','=',$user->id)->first();

                 $result=$staff->professional_activity_attendee()->attach($activity->id);
                 //dd($result);
             }
             else
             {
                 //dd( "Failed to upload file");
                 $file_upload_status = 0;
             }
         }
         if($activityinsertedId && $file_upload_status && $file_size_status)
         {
             $status = 1;
         }else
         {
             $status = 0;
         }
         //dd($activityinsertedId.'-'.$file_upload_status.'-'.$file_size_status.'-'.$result);
         $return_data = [
             'status' => $status,
             'file_size_status' => $file_size_status
         ];
         return redirect('/Non-Teaching/professionalactivities')->with('return_data', $return_data);

    }

    public function update(Updateprofessional_activity_attendeeRequest $request, professional_activity_attendee $professional_activity_attendee)
    {
        //dd($request);

        $professional_activity_attendee->title=$request->edit_title;
        $professional_activity_attendee->organizer=$request->edit_organizer;
        $professional_activity_attendee->role=$request->edit_role;
        $professional_activity_attendee->level=$request->edit_level;
        $professional_activity_attendee->category=$request->edit_category;
        $professional_activity_attendee->sponsored=$request->edit_sponsored;
        if($request->sponsored_by=="KLS GIT")
        {

            $professional_activity_attendee->sponsored_by=$request->edit_sponsored_by;
        }
        else{
            $professional_activity_attendee->sponsored_by=$request->edit_other_sponsored;
        }

        $professional_activity_attendee->from_date=$request->edit_from_date;
        $professional_activity_attendee->egov_id=$this->gen_egov_id($request->edit_from_date);
        $professional_activity_attendee->to_date=$request->edit_to_date;
        $professional_activity_attendee->no_of_days=$request->edit_no_of_days;

        // Update validation status
        //dd($request->validation_status);
        $professional_activity_attendee->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


        //file upload
        $file=$request->file("document");
        //dd($file);
        // $final_file_upload_name = $professional_activity_attendee->egov_id.'.'.$file->getClientOriginalExtension();
        // $professional_activity_attendee->document= $final_file_upload_name;
        // $destination = 'Uploads/Professional_Activity_Attended/';

        //to get the file size
        $file_size = $file->getSize();
        $file_upload_status = 0;
        $file_size_status = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
                //for deleting the existing file and replacing it with the new one.
                File::delete('public/Uploads/Professional_Activity_Attended/'.$professional_activity_attendee->document);

                if($file->store('public/Uploads/Professional_Activity_Attended/'))
             {
                 //dd("File upload Sucess");
                 $file_upload_status = 1;
                 $professional_activity_attendee->document= $file->hashName();
                 $result =  $professional_activity_attendee->update();
                }
                 else{
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }

        }else{
            $file_size_status = 0;
        }

       //dd($result);
        if($result && $file_upload_status == 1 &&  $file_size_status == 1){
            $status = 1;
        }else{
            $status = 0;
        }

        $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];

        return redirect('/Non-Teaching/professionalactivities')->with('return_data', $return_data);

        // $result = $professional_activity_attendee ->update();
        // if($result){
        //     $status = 1;
        // }else{
        //     $status = 0;
        // }
        // return redirect('/Non-Teaching/professionalactivities')->with('status', $status);


      }

      public function destroy(professional_activity_attendee $professional_activity_attendee)
      {

          $user = Auth::user();
          $staff=staff::with('professional_activity_attendee')->where('user_id','=',$user->id)->first();
          $delete=$staff->professional_activity_attendee()->detach($professional_activity_attendee->id);
         // dd($professional_activity_attendee);
          $result =$professional_activity_attendee->delete();
          if($result)
          {
              $status = 1;
          }else{
              $status = 0;
          }
          return redirect('/Non-Teaching/professionalactivities')->with('status', $status);
        }

        public function gen_egov_id($attendee_date)
    {
        $year = date('Y', strtotime($attendee_date));
        $month = date('M',strtotime($attendee_date));
        $no="";
        $professional_activity_attendee=professional_activity_attendee::whereYear('from_date',$year)->orderBy('id','desc')->first();
        if($professional_activity_attendee==null){
            $no="00001";
        }
        else
        {

                $oldegov_id=$professional_activity_attendee->egov_id;
                //dd(substr($oldegov_id,9,10));
                $oldno=intval(substr($oldegov_id,9,10));

                $no=$oldno+1;

                $no = str_pad($oldno + 1, 5, '0', STR_PAD_LEFT);


        }
        return ($year.$month."PA".$no);
    }

}
