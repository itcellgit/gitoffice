<?php

namespace App\Http\Controllers\ESTB;


use App\Models\designation;
use App\Http\Requests\StoredesignationRequest;
use App\Http\Requests\UpdatedesignationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;


class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $designation=designation::get();
 
        return view('ESTB.designations.index',compact(['designation']));
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
    public function store(StoredesignationRequest $request)
    {
        //
       // dd($request);
        $designation=new designation();
        $designation->design_name=$request->design_name;
        $designation->isadditional=$request->isadditional;
        $designation->emp_type=$request->emp_type;
        $designation->created_at = Carbon::now();
        $designation->isvacational=$request->isvacational;
        $designation->status='active';
        $designation->save();

        $DesigninsertedId = $designation->id;

        //dd($insertedId);
        if($DesigninsertedId > 0){
            $status = 1;
            return redirect('/ESTB/designations')->with('status', $status);
        }else{
            $status = 0;
            return redirect('/ESTB/designations')->with('status', $status);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(designation $designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedesignationRequest $request, designation $designation)
    {
        //
        // dd($request);
        $designation->design_name =$request->edit_design_name;
        $designation->isadditional=$request->edit_isadditional;
        $designation->emp_type=$request->edit_emp_type;
        $designation->isvacational = $request->edit_isvacational;
        if(isset($request->status)){
            $designation->status=$request->status;
        }  
        $result = $designation->update();  

        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/designations')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(designation $designation)
    {
        //
        $designation->status='inactive';
        $result = $designation->update();
        if($result){
            $status = 1;
        }else{
            $status = 0;
        }
        return redirect('/ESTB/designations')->with('status', $status);
    }

   
/*
public function designationsDataSource(Request $request) {

    $search = $request->query('search', array('value' => '', 'regex' => false));
    $draw = $request->query('draw', 0);
    $start = $request->query('start', 0);
    $length = $request->query('length', 25);
    $order = $request->query('order', array(1, 'asc'));        

    $filter = $search['value'];

    $sortColumns = array(
        0 => 'design_name',
        1 => 'isadditional',
        2 => 'emp_type',
        3 => 'status',
    );

    $query = designation::orderBy('design_name');

    if (!empty($filter)) {
        $query->where('designations.design_name', 'like', '%'.$filter.'%');
    }

    $recordsTotal = $query->count();

    $sortColumnName = $sortColumns[$order[0]['column']];

    $query->orderBy($sortColumnName, $order[0]['dir'])
            ->take($length)
            ->skip($start);

    $json = array(
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsTotal,
        'data' => [],
    );

    $designations = $query->get();

    foreach ($designations as $designation) {

        $json['data'][] = [
            $designation->design_name,
            $designation->isadditional,
            $designation->emp_type,
            $designation->status,
            view('designation.actions', ['designation' => $designation])->render(),
        ];
    }

    return $json;
}
*/
}
