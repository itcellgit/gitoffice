<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use App\Models\funded_project;
use App\Http\Requests\Storefunded_projectRequest;
use App\Http\Requests\Updatefunded_projectRequest;
use Illuminate\Support\Facades\File;
use Auth;
use App\Models\staff;

class FundedProjectController extends Controller
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
    public function store(Storefunded_projectRequest $request)
    {

        //dd($request);
        $user = Auth::user();

        $staff=staff::where('user_id','=',$user->id)->first();
        $funds = new funded_project();
        $funds->egov_id=$this->gen_egov_id($request->f_application_date);
        $funds->staff_id=$staff->id;
        $funds->proposal_title=$request->f_proposal_title;
        $funds->role=$request->f_role;
        $funds->type=$request->f_type;
        $funds->amount=$request->f_amount;
        $funds->proposal_status=$request->f_proposal_status;
        $funds->application_date=$request->f_application_date;
        $funds->fund_received=$request->f_fund_received;
        $funds->project_status=$request->f_project_status;


        $funds->completion_year=$request->f_completion_year;
        //  $fundsId = $funds->save();

        //file upload
        $file=$request->file("document");
        // $final_file_upload_name = $this->gen_egov_id($request->f_application_date).'.'.$file->getClientOriginalExtension();
        // $funds->document= $final_file_upload_name;
        // $destination = 'Uploads/Research/fundedproject';

        $file_size = $file->getSize();
        $file_upload_status = 0;
        $fundsId = 0;
        $file_size_status = 0;
        $result = 0;

        if($file_size <= 500000)
        {
            $file_size_status = 1;
            if($file->store('public/Uploads/Research/fundedproject/'))
            {
                //dd("File upload Sucess");
                $file_upload_status = 1;
                $funds->document= $file->hashName();
               $fundsId =  $funds->save(); // insert the row and upload the file only when all the conditions are met.

            }
            else
            {
                //dd( "Failed to upload file");
                $file_upload_status = 0;
            }
        }



        if($fundsId && $file_upload_status && $file_size_status){
            $status = 1;
        }else{
            $status = 0;
        }
        //dd($fundsId.'-'.$file_upload_status.'-'.$file_size_status.'-'.$result);
        $return_data = [
            'status' => $status,
            'file_size_status' => $file_size_status
        ];

         return redirect('/Teaching/research/fundingconsultancy')->with('return_data', $return_data);

        //return redirect('/Teaching/research/funding')->with('return_data', $return_data);

    }

    /**
     * Display the specified resource.
     */
    public function show(funded_project $funded_project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(funded_project $funded_project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatefunded_projectRequest $request, funded_project $funded_project)
    {
        //

        $funded_project->proposal_title=$request->fe_proposal_title;
        $funded_project->role=$request->fe_role;
        $funded_project->type=$request->fe_type;
        $funded_project->amount=$request->fe_amount;
        $funded_project->proposal_status=$request->fe_proposal_status;
        $funded_project->application_date=$request->fe_application_date;
        $funded_project->egov_id=$this->gen_egov_id($request->fe_application_date);
        $funded_project->fund_received=$request->fe_fund_received;
        $funded_project->project_status=$request->fe_project_status;
        $funded_project->completion_year=$request->fe_completion_year;

         // Update validation status
        //dd($request->validation_status);
        $funded_project->validation_status = ($request->validation_status == "invalid") ? "updated" : $request->validation_status;


         //file upload
         $file=$request->file("document");
         //dd($file);
        //  $final_file_upload_name = $funded_project->egov_id.'.'.$file->getClientOriginalExtension();
        //  $funded_project->document= $final_file_upload_name;
        //  $destination = 'Uploads/Research/fundedproject/';

         //to get the file size
         $file_size = $file->getSize();
         $file_upload_status = 0;
         $file_size_status = 0;
         if($file_size <= 500000)
         {
             $file_size_status = 1;
                 //for deleting the existing file and replacing it with the new one.
                 File::delete('public/Uploads/Research/fundedproject/'.$funded_project->document);

                 if($file->store('public/Uploads/Research/fundedproject/'))
                 {
                     //dd("File upload Sucess");
                     $file_upload_status = 1;
                     $funded_project->document= $file->hashName();
                    $result =  $funded_project->update(); // insert the row and upload the file only when all the conditions are met.

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

        // $result = $funded_project->update();
        // if($result){
        //     $status = 1;
        // }else{
        //     $status = 0;
        // }

         return redirect('/Teaching/research/fundingconsultancy')->with('return_data', $return_data);

        //return redirect('/Teaching/research/funding')->with('return_data', $return_data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(funded_project $funded_project)
    {
        //
         $result =$funded_project->delete();
        if($result)
        {
            $status = 1;
        }else{
            $status = 0;
        }
         return redirect('/Teaching/research/fundingconsultancy')->with('status', $status);

        //return redirect('/Teaching/research/funding')->with('return_data', $return_data);

    }
    public function gen_egov_id($application_date)
    {
        $year = date('Y', strtotime($application_date));
        $month = date('M',strtotime($application_date));
        $no="";
        $funded_project=funded_project::whereYear('application_date',$year)->orderBy('id','desc')->first();
        if($funded_project==null){
            $no="00001";
        }
        else
        {

            $oldegov_id=$funded_project->egov_id;
            //dd(substr($oldegov_id,9,10));
            $oldno=intval(substr($oldegov_id,9,10));

            $no=$oldno+1;
            $no = str_pad($no, 5, '0', STR_PAD_LEFT);

        }
        return ($year.$month."FP".$no);
    }

}
