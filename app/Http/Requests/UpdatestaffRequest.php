<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatestaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return
        [
            //
            'fname'=>['required','string','max:30'],
            'mname'=>['required','string','max:30'],
            'lname'=>['required','string','max:30'],
            'local_address'=>['required','string'],
            'permanent_address'=>['required','string'],
            'dob'=>['required','date'],
            'doj'=>['required','date'],
            // 'contactno'=>['required','numeric'],
            'religion_id'=>['required',Rule::exists('religions', 'id')],
            'castecategory_id'=>['required',Rule::exists('castecategories', 'id')],
             //'date_of_superanuation'=>['required','date'],
             'bloodgroup'=>['required','string','max:5'],
            //   'pan_card'=>['required','string','max:20'],
            //   'adhar_card'=>['required','string','max:20'],
            // 'emergency_no'=>['required','numeric'],
            //     'emergency_name'=>['required','string','max:30'],
            //  'employee_type'=>['required','string'],

        ];
    }
}
