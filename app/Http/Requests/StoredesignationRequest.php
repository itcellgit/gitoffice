<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoredesignationRequest extends FormRequest
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
        return [
            //
            'design_name' => ['required'],
            'isvacational' => ['required'],
            'isadditional' => ['required'],
            'emp_type' => ['required'],
        ];
    }
    public function messages():array
    {
        return
        [
            'design_name.required'=>'Designation Name is required field',
            //'design_name.regex'=>'Designation Name should contain  characters and letters only',
            'isvactional.required' => 'The isvactional field is required.',
            'isadditional.required' => 'The isadditional field is required.',
            'emp_type.required' => 'The employee type field is required.',
            
            
          
        ];
    }    
}
