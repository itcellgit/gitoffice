<?php

namespace App\Http\Controllers\ESTB;

use Illuminate\Http\Request;
use App\Models\religion;
use App\Http\Requests\StorereligionRequest;
use App\Http\Requests\UpdatereligionRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\castecategory;
use App\Http\Controllers\Controller;

class ReligionController extends Controller
{
    
    public function index(){
        $religions = DB::table('religions')->orderBy('religion_name')->paginate(15);
        return view('ESTB.religion.index',compact('religions'));
    }

    public function create(){
        //
    }
    
    public function store(StorereligionRequest $request)
    {
        //dd($request);
        $religion = new Religion();
        $religion->religion_name = $request->religion_name;
        $religion->created_at=Carbon::now();
        $religion->status='active';
        $religion->save(['timestamps'=>false]);

        //for generating alert notification.
        
        if( $religion->id){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('ESTB.religion.index')->with('status', $status);
    }
    public function show(religion $religion)
    {
        //dd($religion);
        $filter = ''; // for searching  purpose
        $castes =  castecategory::sortable()->where('religion_id', '=', $religion->id)
            ->orderBy('caste_name')->get();
        
        return view('ESTB.castecategory.index', compact(['castes', 'religion','filter']));
    }
    public function edit(religion $religion)
    {
        //
    }

    
    public function update(UpdatereligionRequest $request, religion $religion)
    {
        $religion->religion_name = $request->edit_religion_name;
        if($request->status=='active'){
            $religion->status='active';
        } 
        $result=$religion->update();
        //dd($result);
        if($result){
            $status=1;
        }
        else{
            $status=0;
        }
        return redirect('ESTB/religion/')->with('status',$status);
    }

    public function destroy(religion $religion)
    {
        
        $religion->status='inactive';
       $result= $religion->update();
       //dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/religion')->with('status', $status);
    }
}    

