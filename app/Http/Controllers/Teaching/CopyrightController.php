<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\copyright;
use App\Http\Requests\StorecopyrightRequest;
use App\Http\Requests\UpdatecopyrightRequest;
use Illuminate\Support\Facades\File;
use Auth;
use App\Models\staff;

class CopyrightController extends Controller
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
    public function store(StorecopyrightRequest $request)
    {
        //
       // dd($request);
        $user = Auth::user();
        //dd($user);
        $staff=staff::where('user_id','=',$user->id)->first();
         $copyright = new copyright();
         $copyright->staff_id=$staff->id;
         $copyright->copyright_title=$request->c_copyright_title;
         $copyright->egov_id=$this->gen_egov_id($request->c_copyright_date);
         $copyright->copyright_date=$request->c_copyright_date;
         $copyright->author_name=$request->c_author_name;
         $copyright->status=$request->c_status;
         $copyright->description=$request->c_description;

        //file upload
        $file=$request->file("document");
        // $final_file_upload_name = $this->gen_egov_id($request->c_copyright_date).'.'.$file->getClientOriginalExtension();
        // $copyright->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Copyrights';

        $file_size = $file->getSize();
        $file_upload_status = 0;
        $copyrightId = 0;
        $file_size_status = 0;
        $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
            if($file->store('public/Uploads/Research/Copyrights/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $copyright->document= $file->hashName();
               $copyrightId =  $copyright->save(); // insert the row and upload the file only when all the conditions are met.

            }
                else
                {
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }
            }


         //$copyrightId = $copyright->save();
         if($copyrightId  && $file_upload_status && $file_size_status){
             $status = 1;
         }else{
             $status = 0;
         }

         $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
         ];
        return redirect('/Teaching/research/patentcopyrights')->with('return_data', $return_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(copyright $copyright)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(copyright $copyright)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecopyrightRequest $request, copyright $copyright)
    {
        //

        $copyright->copyright_title=$request->ce_copyright_title;
        $copyright->copyright_date=$request->ce_copyright_date;
        $copyright->egov_id=$this->gen_egov_id($request->ce_copyright_date);
        $copyright->author_name=$request->ce_author_name;
        $copyright->status=$request->ce_status;
        $copyright->description=$request->ce_description;

         // Update validation status
        //dd($request->validation_status);
        $copyright->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;

        //file upload
        $file=$request->file("document");
        //dd($file);
        // $final_file_upload_name = $copyright->egov_id.'.'.$file->getClientOriginalExtension();
        // $copyright->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Copyrights';

        //to get the file size
        $file_size = $file->getSize();
        $file_upload_status = 0;
        $file_size_status = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
                //for deleting the existing file and replacing it with the new one.
                File::delete('public/Uploads/Research/Copyrights'.$copyright->document);

                if($file->store('public/Uploads/Research/Copyrights/'))
                {
                    //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $copyright->document= $file->hashName();
                   $result =  $copyright->update(); // insert the row and upload the file only when all the conditions are met.

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
        return redirect('/Teaching/research/patentcopyrights')->with('return_data', $return_data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(copyright $copyright)
    {
        //
        $result =$copyright->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/research/patentcopyrights')->with('status', $status);
    }

    public function gen_egov_id($copyright_date)
{
    $year = date('Y', strtotime($copyright_date));
    $month = date('m', strtotime($copyright_date)); // Changed 'M' to 'm' for numeric month
    $no = "";

    // Retrieve the latest copyright record for the given year
    $latest_copyright = copyright::whereYear('copyright_date',  $year)->orderBy('id', 'desc')->first();

    if ($latest_copyright == null) {
        // If no copyright record exists for the given year, start the sequence from 00001
        $no = "00001";
    } else {
        // If a copyright record exists for the given year
        $oldegov_id = $latest_copyright->egov_id;
        // Extract the sequence number from the eGov ID
        $oldno = intval(substr($oldegov_id, -5)); // Changed 10 to -5 to extract the last 5 characters

        // Increment the sequence number by 1
        $no = $oldno + 1;

        // Pad the sequence number with leading zeros to ensure it's 5 digits long
        $no = str_pad($no, 5, '0', STR_PAD_LEFT);
    }

    // Construct and return the eGov ID
    return ($year . $month . "copy" . $no);
}











}
