<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedesignationRequest extends FormRequest
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
            // 'edit_design_name' => ['required'],
            // 'edit_isvactional' => ['required'],
            // 'edit_isadditional' => ['required'],
            // 'edit_emp_type' => ['required'],
           // 'status' => ['sometime'],
            
            
        ];
    }
    public function messages():array
    {
        return
        [
           'edit_design_name.required'=>'Designation Name is required field',
           'edit_design_name.regex'=>'Designation Name should contain characters and letters  only',
           'edit_isvactional.required' => 'The isvactional field is required.',
           'edit_isadditional.required' => 'The isadditional field is required.',
           'edit_emp_type.required' => 'The employee type field is required.',
           //'status'=>'status  is required field',

     
        ];
            
          
        
    } 
}   
