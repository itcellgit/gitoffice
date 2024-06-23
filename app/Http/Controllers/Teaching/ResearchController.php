<?php

namespace App\Http\Controllers\Teaching;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\staff;
use App\Models\ESTB\tdshead;
use DB;


class ResearchController extends Controller
{
    // public function index()
    // {
    //     $user = Auth::user();
    //     $staff=staff::with('conferences_attendee')->with('conferences_conducted')->with('publications')->with('book_publications')->with('funded_project')->with('consultancy')->with('general_achievements')->with('patent')->with('copyright')->with('reviewer_editor')->where('user_id','=',$user->id)->first();
    //     //$staff1=staff::with('professional_activity_conducted')->where('user_id','=',$user->id)->get();

    //     //dd($staff);
    //     //return view('Staff.Teaching.research',compact('staff'));

        
    //     return view('Staff.Teaching.research',compact('staff'));
    // }

    public function conferenceactivity()
    {
        $user = Auth::user();
        $staff = Staff::with('conferences_attendee')->with('conferences_conducted')->where('user_id', '=', $user->id)->first();

        return view('Staff.Teaching.research.conferenceactivities', compact('staff'));
    }


    public function pub()
    {
        $user = Auth::user();
        $staff=staff::with('publications')->where('user_id','=',$user->id)->first();
        
        return view('Staff.Teaching.research.publication',compact('staff'));
    }



    public function bookchap()
    {
        $user = Auth::user();
        $staff=staff::with('book_publications')->where('user_id','=',$user->id)->first();
        
        return view('Staff.Teaching.research.bookchapters',compact('staff'));
    }

    public function fund_consultancy()
    {
        $user = Auth::user();
        $staff=staff::with('funded_project')->with('consultancy')->where('user_id','=',$user->id)->first();
        
        return view('Staff.Teaching.research.fundingconsultancy',compact('staff'));
    }



    public function patent_copyright()
    {
        $user = Auth::user();
        $staff = Staff::with('patent')->with('copyright')->where('user_id', '=', $user->id)->first();

        return view('Staff.Teaching.research.patentcopyrights', compact('staff'));
    }

    public function general_achievement()
    {
        $user = Auth::user();
        $staff = Staff::with('general_achievements')->where('user_id', '=', $user->id)->first();

        return view('Staff.Teaching.research.achievement', compact('staff'));
    }

    public function review_editor()
    {
        $user = Auth::user();
        $staff = Staff::with('reviewer_editor')->where('user_id', '=', $user->id)->first();

        return view('Staff.Teaching.research.revieweditor', compact('staff'));
    }

    public function staff_tdsheads()
    {
        $user = Auth::user();
        $staff = Staff::with('tdsheads')->where('user_id', '=', $user->id)->first();
        $tdsheads = tdshead::all();
        $stafftdshead =DB::table('staff_tdsheads')->where('status','active')->get();
        return view('/staff/Teaching/staff_investments/staffinvestment', compact('staff','tdsheads','stafftdshead'));
    }


}

