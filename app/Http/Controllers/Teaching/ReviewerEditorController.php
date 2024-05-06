<?php

namespace App\Http\Controllers\Teaching;

use App\Models\reviewer_editor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storereviewer_editorRequest;
use App\Http\Requests\Updatereviewer_editorRequest;
use Illuminate\Support\Facades\File;
use Auth;
use App\Models\staff;

class ReviewerEditorController extends Controller
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
    public function store(Storereviewer_editorRequest $request)
    {
        $user = Auth::user();
        //dd($request);
        $staff=staff::where('user_id','=',$user->id)->first();
         $reviewer_editor = new reviewer_editor();
         $reviewer_editor->egov_id=$this->gen_egov_id($request->reviewed_date);
         $reviewer_editor->staff_id=$staff->id;
         $reviewer_editor->title=$request->title;
         $reviewer_editor->journal_name=$request->journal_name;
         $reviewer_editor->publisher_name=$request->publisher_name;
         $reviewer_editor->reviewed_date=$request->reviewed_date;
         $reviewer_editor->category=$request->category;

         if($request->level=="Other")
         {
            $reviewer_editor->level = $request->level;
             $reviewer_editor->other_level=$request->other_level;
         }
         else{
             $reviewer_editor->level=$request->level;
         }

        // $reviewer_editorId = $reviewer_editor->save();


        //file upload
        $file=$request->file("document");
        //$final_file_upload_name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
        //$reviewer_editor->document= $final_file_upload_name;
        //$destination = public_path().'Uploads/Research/Review_Editor';
        //$destination =;


        $file_size = $file->getSize();
        $file_upload_status = 0;
        $reviewer_editorId = 0;
        $file_size_status = 0;
        $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
           // Storage::disk('local')->put('example.txt', 'Contents');
            if($file->store('public/Uploads/Research/Review_Editor/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $reviewer_editor->document= $file->hashName();
               $reviewer_editorId =  $reviewer_editor->save(); // insert the row and upload the file only when all the conditions are met.

            }
            else
            {
                //dd( "Failed to upload file");
                $file_upload_status = 0;
            }
        }
         if($reviewer_editorId && $file_upload_status && $file_size_status){
            $status = 1;
        }else{
            $status = 0;
        }
        //dd($reviewer_editorId.'-'.$file_upload_status.'-'.$file_size_status.'-'.$result);
        $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];
         return redirect('/Teaching/research/revieweditor')->with('return_data', $return_data);
    }


    /**
     * Display the specified resource.
     */
    public function show(reviewer_editor $reviewer_editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reviewer_editor $reviewer_editor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatereviewer_editorRequest $request, reviewer_editor $reviewer_editor)
    {

        //dd($request);
        $reviewer_editor->title=$request->title;
        $reviewer_editor->journal_name=$request->journal_name;
        $reviewer_editor->publisher_name=$request->publisher_name;
        $reviewer_editor->reviewed_date=$request->reviewed_date;
        $reviewer_editor->egov_id=$this->gen_egov_id($request->reviewed_date);
        $reviewer_editor->level=$request->level;
        $reviewer_editor->other_level=$request->other_level;
        $reviewer_editor->category=$request->category;



        if($request->level=="Other")
        {
           $reviewer_editor->level = $request->level;
            $reviewer_editor->other_level=$request->other_level;
        }
        else{
            $reviewer_editor->level=$request->level;
        }



        // Update validation status

        //$reviewer_editor->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;



        //file upload
         $file=$request->file("document");
        //dd($file);

         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $file_size_status = 0;

         if($file_size <= 500000)
         {
             $file_size_status = 1;
                 //for deleting the existing file and replacing it with the new one.
                 File::delete('public/Uploads/Research/Review_Editor/'.$reviewer_editor->document);

                 if($file->store('public/Uploads/Research/Review_Editor/'))
                 {
                     //dd("File upload Sucess");
                    $file_upload_status = 1;
                    $reviewer_editor->document= $file->hashName();
                    $result=  $reviewer_editor->update(); // insert the row and upload the file only when all the conditions are met.

                 }
                 else{
                     //dd( "Failed to upload file");
                     $file_upload_status = 0;
                 }

         }else{
             $file_size_status = 0;
         }

        //dd($result);
         if( $result && $file_upload_status == 1 &&  $file_size_status == 1){
             $status = 1;
         }else{
             $status = 0;
         }

         $return_data = [
             'status' => $status,
             'file_size_status' => $file_size_status
         ];



        // if($result){
        //     $status = 1;
        // }else{
        //     $status = 0;
        // }
        return redirect('/Teaching/research/revieweditor')->with('return_data', $return_data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(reviewer_editor $reviewer_editor)
    {
        $result =$reviewer_editor->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/Teaching/research/revieweditor')->with('status', $status);
    }

    public function gen_egov_id($editors_date)
    {
        $year = date('Y', strtotime($editors_date));
        $month = date('M',strtotime($editors_date));
        $no="";
        $reviewer_editor=reviewer_editor::whereYear('reviewed_date',$year)->orderBy('id','desc')->first();
        if($reviewer_editor==null){
            $no="00001";
        }
        else
        {


                $oldegov_id=$reviewer_editor->egov_id;
                //dd(substr($oldegov_id,9,10));
                $oldno=intval(substr($oldegov_id,9,10));

                $no=$oldno+1;

                $no = str_pad($oldno + 1, 5, '0', STR_PAD_LEFT);


        }
        return ($year.$month."RE".$no);
    }



    public function reviewer_editor(Request $request , reviewer_editor $reviewer_editor)
{
    $id = $request->route('id');
    $reviewer_editor = reviewer_editor::findOrFail($id);

    $reviewer_editor->validation_status = $request->validation_status;

    if($request->validation_status == "invalid")
    {
        $reviewer_editor->reason = $request->reason;
        // Update color to yellow
        $reviewer_editor->color = 'yellow';
    }

    $result = $reviewer_editor->update();

    // if($result)
    // {
    //     $status = 1;
    // }
    // else
    // {
    //     $status = 0;
    // }

   // return redirect('/egov/Teaching/research/reviewer_editor')->with('status', $status);
    return redirect('/Teaching/research/revieweditor')->with('return_data', $return_data);

}




}
