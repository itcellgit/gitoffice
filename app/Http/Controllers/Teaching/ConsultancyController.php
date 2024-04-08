<?php

namespace App\Http\Controllers\Teaching;


use App\Http\Controllers\Controller;
use App\Models\consultancy;
use App\Http\Requests\StoreconsultancyRequest;
use App\Http\Requests\UpdateconsultancyRequest;
use Illuminate\Support\Facades\File;

use Auth;
use App\Models\staff;

class ConsultancyController extends Controller
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
    public function store(StoreconsultancyRequest $request)
    {
        //
        $user = Auth::user();

        $staff=staff::where('user_id','=',$user->id)->first();
        //dd($request);
        $consult=new consultancy();
        $consult->egov_id=$this->gen_egov_id($request->c_from_date);
        $consult->staff_id=$staff->id;
        $consult->consultancy_title=$request->c_consultancy_title;
        $consult->agency=$request->c_agency;
        $consult->from_date=$request->c_from_date;
        $consult->to_date=$request->c_to_date;
        $consult->amount=$request->c_amount;
        $consult->consultancy_type=$request->c_consultancy_type;
        //$consultancyId=$consult->save();

       //file upload

       $file=$request->file("document");
    //    $final_file_upload_name = $this->gen_egov_id($request->c_from_date).'.'.$file->getClientOriginalExtension();
    //    $consult->document= $final_file_upload_name;
    //    $destination = 'Uploads/Research/Consultancy';

       $file_size = $file->getSize();
       $file_upload_status = 0;
       //$consultinsertedId = 0;
        $consultancyId = 0;
       $file_size_status = 0;
       $result = 0;


       if($file_size <= 500000)
        {
           $file_size_status = 1;
           if($file->store('public/Uploads/Research/Consultancy/'))
           {
               //dd("File upload Sucess");
               $file_upload_status = 1;
               $consult->document= $file->hashName();
              $consultancyId =  $consult->save(); // insert the row and upload the file only when all the conditions are met.

           }
            else
            {
                //dd( "Failed to upload file");
                $file_upload_status = 0;
            }
        }

       if($consultancyId && $file_upload_status && $file_size_status){
           $status = 1;
       }else{
           $status = 0;
       }

       $return_data = [
           'status' => $status,
           'file_size_status' => $file_size_status
       ];

        return redirect('/Teaching/research/fundingconsultancy')->with('return_data', $return_data);

        //return redirect('/Teaching/research/consultancy')->with('return_data', $return_data);



    }

    /**
     * Display the specified resource.
     */
    public function show(consultancy $consultancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(consultancy $consultancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateconsultancyRequest $request, consultancy $consultancy)
    {
        //dd($request);
        $consultancy->consultancy_title=$request->ce_consultancy_title;
        $consultancy->agency=$request->ce_agency;
        $consultancy->from_date=$request->ce_from_date;
        $consultancy->to_date=$request->ce_to_date;
        $consultancy->egov_id=$this->gen_egov_id($request->ce_from_date);
        $consultancy->amount=$request->ce_amount;
        $consultancy->consultancy_type=$request->ce_consultancy_type;

        // Update validation status
        //dd($request->validation_status);
        $consultancy->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


         //file upload
         $file=$request->file("document");

         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $file_size_status = 0;

         if($file_size <= 500000)
         {
             $file_size_status = 1;
                 //for deleting the existing file and replacing it with the new one.
                 File::delete('public/Uploads/Research/Consultancy/'.$consultancy->document);

                 if($file->store('public/Uploads/Research/Consultancy/'))
                 {
                     //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $consultancy->document= $file->hashName();
                    $result= $consultancy->update(); // insert the row and upload the file only when all the conditions are met.

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

         $return_data =
         [
             'status' => $status,
             'file _size_status' => $file_size_status
         ];



         return redirect('/Teaching/research/fundingconsultancy')->with('return_data', $return_data);


       // return redirect('/Teaching/research/consultancy')->with('return_data', $return_data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(consultancy $consultancy)
    {
        //
        $result =$consultancy->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }

        return redirect('/Teaching/research/fundingconsultancy')->with('status', $status);


        //return redirect('/Teaching/research/consultancy')->with('status', $status);

    }
    public function gen_egov_id($consultancy_date)
    {
        $year = date('Y', strtotime($consultancy_date));
        $month = date('m', strtotime($consultancy_date));
        $no = "";

        $consultancy = Consultancy::whereYear('from_date',  $year)->orderBy('id', 'desc')->first();

        if ($consultancy == null || date('Y', strtotime($consultancy->from_date)) < $year) {
            $no = "00001";
        } else {
            $oldegov_id = $consultancy->egov_id;
            $oldno = intval(substr($oldegov_id, 9));
            $no = str_pad($oldno + 1, 5, '0', STR_PAD_LEFT);
        }

        return ($year . $month . "CON" . $no);
    }

}
