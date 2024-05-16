<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreconsultancyRequest extends FormRequest
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
            //'c_consultancy_title'=> ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'c_agency'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'c_from_date'=>['required','date'],
            'c_to_date'=>['required','date'],
            'c_amount'=>['numeric'],
            'c_consultancy_type'=>['required', Rule::in(['consultancy','testing'])],
            
            
        ];
    }
    public function messages():array
    {
        return
        [
            // 'c_consultancy_title.required'=>'consultancy title is required field',
            // 'c_consultancy_title.regex' => 'The consultancy title field should contain only letters and spaces.',
            'c_agency.required'=>'agency is required filed',
            'c_agency.regex' => 'The agency field should contain only letters and spaces.',
            'c_from_date.required'=>'from_date is required field',
            'c_to_date.required'=>'to_date is required field',
            //'c_amount.required'=>'amount is required field',
            'c_amount.numeric'=>'Amount can be numbers only',
            'c_consultancy_type.required'=>'onsultancy_type is required field',
            'c_consultancy_type.in'=>'Please select a valid option from the provided choices',
        ];
    }
}
