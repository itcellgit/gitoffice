<?php

namespace App\Http\Controllers\Teaching;

use App\Models\publication;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorepublicationRequest;
use App\Http\Requests\UpdatepublicationRequest;
use Illuminate\Support\Facades\File;
use Auth;
use App\Models\staff;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
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
    public function store(StorepublicationRequest $request)
    {
        //dd($request);
        $user = Auth::user();

        $staff=staff::where('user_id','=',$user->id)->first();
        $publication = new publication();
        $publication->staff_id=$staff->id;
        if($request->level =="Other")
        {
            $publication->level = $request->level;
            $publication->other_level=$request->other_level;

        }
        else
        {
            $publication->level=$request->level;
        }

        $publication->title=$request->title;
        $publication->date=$request->date;
        $publication->egov_id=$this->gen_egov_id($request->date);
        $publication->journal=$request->journal;
        $publication->publication_type=$request->publication_type;
        $publication->doi_number=$request->doi_number;
        $publication->link=$request->link;
        $publication->role=$request->role;
        $publication->volume=$request->volume;
        $publication->issue=$request->issue;
        $publication->page_no=$request->page_no;
        $publication->year=$request->year;

        

        //file upload
            $file=$request->file("document");
            // $final_file_upload_name = $this->gen_egov_id($request->date).'.'.$file->getClientOriginalExtension();
            // $publication->document= $final_file_upload_name;
            // $destination = 'Uploads/Research/Publications/';

            $file_size = $file->getSize();
            $file_upload_status = 0;
            $publicationinsertedId = 0;
            $file_size_status = 0;
            $result = 0;

            if($file_size <= 500000)
            {
                $file_size_status = 1;
                if($file->store('public/Uploads/Research/Publications/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $publication->document= $file->hashName();
               $publicationinsertedId =  $publication->save(); // insert the row and upload the file only when all the conditions are met.

            }
                else
                {
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }
            }
                if($publicationinsertedId && $file_upload_status && $file_size_status)
                {
                    $status = 1;
                }
                else
                {
                    $status = 0;
                }
            //dd($publicationinsertedId.'-'.$file_upload_status.'-'.$file_size_status.'-'.$result);
            $return_data =
            [
                'status' => $status,
                'file_size_status' => $file_size_status
            ];

           return redirect('/Teaching/research/publications')->with('return_data', $return_data);

    }




    /**
     * Display the specified resource.
     */
    public function show(publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepublicationRequest $request, publication $publication)
    {

        //dd($request);

        if($request->level =="Other")
        {
            $publication->level = $request->e_level;
            $publication->other_level=$request->e_other_level;

        }
        else
        {
            $publication->level=$request->e_level;
        }
        $publication->title=$request->e_title;
        $publication->date=$request->e_date;
        $publication->egov_id=$this->gen_egov_id($request->e_date);
        $publication->journal=$request->e_journal;
        $publication->publication_type=$request->e_publication_type;
        $publication->doi_number=$request->e_doi_number;
        $publication->link=$request->e_link;
        $publication->role=$request->e_role;


        $publication->volume=$request->e_volume;
        $publication->issue=$request->e_issue;
        $publication->page_no=$request->e_page_no;
        $publication->year=$request->e_year;

         // Update validation status
        //dd($request->validation_status);
        //$publication->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;
       
        //File Upload
        $file=$request->file("document");
       // $final_file_upload_name = $publication->egov_id.'.'.$file->getClientOriginalExtension();

    //    $final_file_upload_name = $this->gen_egov_id($request->e_date).'.'.$file->getClientOriginalExtension();
    //     $publication->document= $final_file_upload_name;
    //     $destination = 'Uploads/Research/Publications/';

        $file_size = $file->getSize();
        $file_upload_status = 0;
       // $publicationinsertedId = 0;
        $file_size_status = 0;
       // $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;

            File::delete('public/Uploads/Research/Publications/'.$publication->document);

            if($file->store('public/Uploads/Research/Publications/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $publication->document= $file->hashName();
               $result=  $publication->update(); // insert the row and upload the file only when all the conditions are met.

            }
                else
                {
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }
        }
        else{
            $file_size_status = 0;
        }


         if($result && $file_upload_status == 1 && $file_size_status== 1){
             $status = 1;
         }else{
             $status = 0;
         }

         $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];


        //dd($return_data);
        //return redirect('/Teaching/research')->with('return_data', $return_data);
        return redirect('/Teaching/research/publications')->with('return_data', $return_data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(publication $publication)
    {
        //
      // dd($publication);

        $result =$publication->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        //return redirect('/Teaching/research')->with('status', $status);
        return redirect('/Teaching/research/publications')->with('status', $status);
    }

    public function gen_egov_id($publication_date)
{
    $year = date('Y', strtotime($publication_date));
    $month = date('m', strtotime($publication_date));
    $no = "";

    $publication = publication::whereYear('date', $year)->orderBy('id', 'desc')->first();

    if ($publication == null || date('Y', strtotime($publication->date)) < $year) {
        $no = "00001";
    } else {
        $oldegov_id = $publication->egov_id;
        $oldno = intval(substr($oldegov_id, 9));
        $no = str_pad($oldno + 1, 5, '0', STR_PAD_LEFT);
    }

    return ($year . $month . "PUB" . $no);
}

}
