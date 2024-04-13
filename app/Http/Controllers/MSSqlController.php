<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MSSqlController extends Controller
{
    //
    public function index()
    {

        dd(DB::connection('sqlsrv')->table('employees')->get());

    }
}
