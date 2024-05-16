<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\book_publication;
use App\Http\Requests\Storebook_publicationsRequest;
use App\Http\Requests\Updatebook_publicationsRequest;
use Auth;
use App\Models\staff;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class BookPublicationController extends Controller
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
    public function store(Storebook_publicationsRequest $request)
    {

       // dd($request);

        $user = Auth::user();

        $staff=staff::where('user_id','=',$user->id)->first();
         $bookpub = new book_publication();
         $bookpub->staff_id=$staff->id;
         $bookpub->title=$request->bc_title;
         $bookpub->book_level=$request->bc_book_level;
         $bookpub->publisher_name=$request->bc_publisher_name;
         $bookpub->edition=$request->bc_edition;
         $bookpub->doi=$request->bc_doi;
         $bookpub->date=$request->bc_date;
         $bookpub->issue=$request->bc_issue;
         $bookpub->type=$request->bc_type;
         $bookpub->egov_id=$this->gen_egov_id($request->bc_date);
        //dd($bookpub->egov_id);
         if($request->bc_type=="Chapter"){
            $this->validate($request,
                [
                    'chapter_title'=>['string','max:255'],
                    'start_page_no'=>['numeric'],
                    'end_page_no'=>['numeric']
                ]);
            $bookpub->chapter_title=$request->bc_chapter_title;
            $bookpub->start_page_no=$request->bc_start_page_no;
            $bookpub->end_page_no=$request->bc_end_page_no;
         }




         //dd($bookpub);

         $file=$request->file("document");
        // $final_file_upload_name = $this->gen_egov_id($request->bc_date).'.'.$file->getClientOriginalExtension();
        // $bookpub->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Book_Chapters';

        $file_size = $file->getSize();
        $file_upload_status = 0;
        $bookpublicationId = 0;
        $file_size_status = 0;
        $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
            if($file->store('public/Uploads/Research/Book_Chapters/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $bookpub->document= $file->hashName();
               $bookpublicationId =  $bookpub->save(); // insert the row and upload the file only when all the conditions are met.

            }
            else
            {
                //dd( "Failed to upload file");
                $file_upload_status = 0;
            }
        }

            if($bookpublicationId && $file_upload_status && $file_size_status){
                $status = 1;
            }else{
                $status = 0;
            }

            $return_data = [
                'status' => $status,
                'file_size_status' => $file_size_status
            ];


            return redirect('/Teaching/research/bookchapaters')->with('return_data', $return_data);
    }

    /**
     * Display the specified resource.
     */
    public function show(book_publication $book_publications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book_publication $book_publications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebook_publicationsRequest $request, book_publication $book_publication)
    {
        //
        //dd($book_publication);
         $book_publication->title=$request->ebc_title;
         $book_publication->book_level=$request->ebc_book_level;
         $book_publication->publisher_name=$request->ebc_publisher_name;
         $book_publication->edition=$request->ebc_edition;
         $book_publication->doi=$request->ebc_doi;
         $book_publication->date=$request->ebc_date;
         $book_publication->issue=$request->ebc_issue;
         $book_publication->egov_id=$this->gen_egov_id($request->ebc_date);
         $book_publication->type=$request->ebc_type;
         if($request->ebc_type=="Chapter"){
                $this->validate($request,
                [
                'chapter_title'=>['string','max:255'],
                'start_page_no'=>['numeric'],
                'end_page_no'=>['numeric']
            ]);



            $book_publication->chapter_title=$request->ebc_chapter_title;
            $book_publication->start_page_no=$request->ebc_start_page_no;
            $book_publication->end_page_no=$request->ebc_end_page_no;
        }

        // Update validation status
        //dd($request->validation_status);

        //$book_publication->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


        //file upload
        $file=$request->file("document");
        //dd($file);
        // $final_file_upload_name = $book_publication->egov_id.'.'.$file->getClientOriginalExtension();
        // $book_publication->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/Book_Chapters/';

        //to get the file size
        $file_size = $file->getSize();
        $file_upload_status = 0;
        $file_size_status = 0;
            if($file_size <= 500000)
            {
                $file_size_status = 1;
                //for deleting the existing file and replacing it with the new one.
                File::delete('public/Uploads/Research/Book_Chapters/'.$book_publication->document);

                if($file->store('public/Uploads/Research/Book_Chapters/'))
                {
                    //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $book_publication->document= $file->hashName();
                   $result=  $book_publication->update(); // insert the row and upload the file only when all the conditions are met.

                }
                else{
                    //dd( "Failed to upload file");
                    $file_upload_status = 0;
                }

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
            //dd($return_data);
        return redirect('/Teaching/research/bookchapaters')->with('return_data', $return_data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book_publication $book_publication)
    {
        //
        $result =$book_publication->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/research/bookchapaters')->with('status', $status);
    }

    public function gen_egov_id($pub_date)
    {
        $year = date('Y', strtotime($pub_date));
        $month = date('M',strtotime($pub_date));
        $no="";
        $book_publication=book_publication::whereYear('date',$year)->orderBy('id','desc')->first();
        if($book_publication==null){
            $no="00001";
        }
        else
        {

            $oldegov_id=$book_publication->egov_id;
            //dd(substr($oldegov_id,9,10));
            $oldno=intval(substr($oldegov_id,9,10));

            $no=$oldno+1;

            $no = str_pad($no, 5, '0', STR_PAD_LEFT);


        }
        return ($year.$month."BP".$no);
    }
}
