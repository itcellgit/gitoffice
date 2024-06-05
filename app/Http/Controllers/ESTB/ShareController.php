<?php

namespace App\Http\Controllers\ESTB;

use App\Models\share;
use App\Http\Requests\StoreshareRequest;
use App\Http\Requests\UpdateshareRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $share = share::get();
        $staff=staff::get();
        return view('ESTB.lics.index',compact('share','staff'));    }

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
    public function store(StoreshareRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(share $share)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(share $share)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateshareRequest $request, share $share)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(share $share)
    {
        //
    }
}
