<?php

namespace App\Http\Controllers\Teaching;


use App\Http\Controllers\Controller;
use App\Models\patent;
use App\Http\Requests\StorepatentRequest;
use App\Http\Requests\UpdatepatentRequest;
use Illuminate\Support\Facades\File;

use Auth;
use App\Models\staff;

class PatentController extends Controller
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
    public function store(StorepatentRequest $request)
    {
        //
             //dd($request);
       $user = Auth::user();

       $staff=staff::where('user_id','=',$user->id)->first();
        $patents = new patent();
        $patents->egov_id=$this->gen_egov_id($request->p_appl_date);
        $patents->staff_id=$staff->id;
        $patents->appl_no=$request->p_appl_no;
        $patents->appl_date=$request->p_appl_date;
        $patents->title=$request->p_title;
        $patents->stream_domain=$request->p_stream_domain;
        $patents->status=$request->p_status;
        $patents->patent_no=$request->p_patent_no;
        $patents->publication_no=$request->p_publication_no;
        $patents->publication_date=$request->p_publication_date;

        //file upload
        $file=$request->file("document");
       // $final_file_upload_name = $this->gen_egov_id($request->p_appl_date).'.'.$file->getClientOriginalExtension();
        //$patents->document= $final_file_upload_name;
       // $destination = 'Uploads/Research/patents';

        $file_size = $file->getSize();
        $file_upload_status = 0;
        $patentsId = 0;
        $file_size_status = 0;
        $result = 0;
        if($file_size <= 500000)
        {
            $file_size_status = 1;
            if($file->store('public/Uploads/Research/patents/'))

            {
                //dd("File upload Sucess");
                $file_upload_status = 1;

                $patents->document= $file->hashName();
                $patentsId =  $patents->save();

                }
                else
                {
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }
            }



       // $patentsId = $patents->save();
        if($patentsId && $file_upload_status && $file_size_status){
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
    public function show(patent $patent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(patent $patent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepatentRequest $request, patent $patent)
    {
        //

        $patent->appl_no=$request->pe_appl_no;
        $patent->appl_date=$request->pe_appl_date;
        $patent->egov_id=$this->gen_egov_id($request->pe_appl_date);
        $patent->title=$request->pe_title;
        $patent->stream_domain=$request->pe_stream_domain;
        $patent->status=$request->pe_status;
        $patent->patent_no=$request->pe_patent_no;
        $patent->publication_no=$request->pe_publication_no;
        $patent->publication_date=$request->pe_publication_date;

         // Update validation status
        //dd($request->validation_status);
        $patent->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;

         //file upload
         $file=$request->file("document");
         //dd($file);
        //  $final_file_upload_name = $patent->egov_id.'.'.$file->getClientOriginalExtension();
        //  $patent->document= $final_file_upload_name;
        //  $destination = 'Uploads/Research/patents';

         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $file_size_status = 0;

         if($file_size <= 500000)
         {
             $file_size_status = 1;
                 //for deleting the existing file and replacing it with the new one.
                 File::delete('public/Uploads/Research/patents'.$patent->document);

                 if($file->store('public/Uploads/Research/patents/'))

            {
                //dd("File upload Sucess");
                $file_upload_status = 1;

                $patent->document= $file->hashName();
                $result=  $patent->update();

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
    public function destroy(patent $patent)
    {
        //
        $result =$patent->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/research/patentcopyrights')->with('status', $status);
    }
    public function gen_egov_id($patent_date)
    {
        $year = date('Y', strtotime($patent_date));
        $month = date('M',strtotime($patent_date));
        $no="";
        $patent=patent::whereYear('appl_date',$year)->orderBy('id','desc')->first();
        if($patent==null){
            $no="00001";
        }
        else
        {
            $oldyear=date('Y', strtotime($patent->appl_date));

            if($oldyear<$year){
                $no="00001";
            }
            else
            {
                $oldegov_id=$patent->egov_id;
                //dd(substr($oldegov_id,9,10));
                $oldno=intval(substr($oldegov_id,9,10));

                $no=$oldno+1;

                $no = str_pad($no, 5, '0', STR_PAD_LEFT);
            }

        }
        return ($year.$month."PA".$no);
    }
}
