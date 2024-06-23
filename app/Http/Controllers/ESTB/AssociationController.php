<?php

namespace App\Http\Controllers\ESTB;

use App\Models\association;

use App\Http\Requests\StoreassociationRequest;
use App\Http\Requests\UpdateassociationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;


class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$associations = association::with('staff')->orderBy('asso_name')->get();
        $association=DB::table('associations')->orderBy('asso_name')->get();
        return view('ESTB.associations.index',compact('association'));

        //staff association
        // $user = Auth::user();
        // $staff=staff::with('association')->where('user_id','=',$user->id)->get();
        // return view('ESTB.associations.index',compact('staff'));

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
    public function store(StoreassociationRequest $request)
    {
        //
        // dd($request);
        $association=new association();
        $association->asso_name=$request->asso_name;
        $association->created_at = Carbon::now();
        $association->status='active';
        $result = $association->save();

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/associations')->with('status', $status);
    }

    /**
     * Display the specified resource.
     */
    public function show(association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateassociationRequest $request, association $association)
    {
        //
        // dd($request);
        $association->asso_name=$request->edit_asso_name;
        $association->updated_at = Carbon::now();
        if($request->status=='active'){
            $association->status='active';
        } 
        //dd($request->status);
        $result = $association->update();

         //dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/associations')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(association $association)
    {
        //
        //dd($association);
        $association->status='inactive';
        $result = $association->update();
       // dd($result);
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/associations')->with('status', $status);
    }
}
