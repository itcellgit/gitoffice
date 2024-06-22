<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Storestaff_tdsheadRequest;
use App\Http\Requests\Updatestaff_tdsheadRequest;
use App\Models\staff;
use App\Models\staff_tdshead;
use App\Models\ESTB\tdshead;
use Illuminate\Support\Facades\Validator;
use Auth;

class StafftdsheadController extends Controller
{
    
    public function index()
    {
        $staff_investments = staff_tdshead::all();
        $staff = staff::all();
        $tdsheads = tdshead::all();
        return view('Staff.Teaching.staff_investments.staffinvestment',compact('staff_investments','$staff','tdsheads'));
    }

    public function show()
    {

    }
    
    public function store(Storestaff_tdsheadRequest $request )
    {
        $validator = Validator::make($request->all(), [
            // 'staff_id' => 'required|exists:staff,id',
            // 'tdshead_id' => 'required|exists:tdsheads,id',
            'amount' => 'required|numeric|min:0',
            'document' => 'required|file|mimes:pdf|max:5120', // PDF file up to 5MB
        ]);

        // If validation fails, return error response
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Handle file upload
        $document = $request->file('document');
        $documentPath = $document->store('public/documents'); // Store file in storage/app/public/documents

        // Create new StaffTdshead instance
        $staffTdshead = new staff_tdshead();
        $staffTdshead->staff_id = $request->staff_id;
        $staffTdshead->tdshead_id = $request->tdshead_id;
        $staffTdshead->amount = $request->amount;
        $staffTdshead->document = $documentPath;
        $staffTdshead->status = 'active'; // Assuming you set a default status or provide it in the form

        // Save the record
        $staffTdshead->save();

        // Redirect back with success message
        return redirect()->route('Teaching.staff_investments.staffinvestment.index')->with('success', 'Staff TDS head record created successfully.');

    }
    
    public function update(Updatestaff_tdsheadRequest $request,$id)
    {
        // dd($request->all());
        // $validated = $request->validate([
        //     'Staff_investments' => 'required|string|max:255',
        //     'amount' => 'required|numeric',
        //     'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:512',
            
        // ]);
        
        $staff = Auth::user()->staff;
        // $tdshead = $staff->tdsheads()->wherePivot('tdshead_id', $id)->first();
        $tdsheadPivot = DB::table('staff_tdsheads')
        ->where('staff_id', $staff->id)
        ->where('tdshead_id', $id)
        ->first();
        dd($tdsheadPivot);
        if ($tdsheadPivot) {
            $$tdsheadPivot->amount = $validated['amount'];
    
            if ($request->hasFile('document')) {
                // Delete old file if exists
                if ($tdsheadPivot->document) {
                    Storage::delete($tdsheadPivot->document);
                }
                // Store new file
                $path = $request->file('document')->store('documents');
                $tdsheadPivot->document = $path;
            }
    
            $tdshead->pivot->save();
        }
    
        return redirect()->back()->with('status', 'Investment updated successfully!');
    }

    public function destroy()
    {

    }
}
