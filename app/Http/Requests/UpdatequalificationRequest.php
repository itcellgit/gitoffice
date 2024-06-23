<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatequalificationRequest extends FormRequest
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
            
            'edit_qual_name'=>['required', 'regex:/^[a-zA-Z0-9\s\W]+$/'],
            'edit_qual_shortname'=>['required'],
            'status'=>['sometimes'],
            
        ];
 
    }
    public function messages():array
    {
        return
        [
            'edit_qual_name.required'=>'Qualification Name is required field',
            'edit_qual_name.regex'=>'Qualification Name should be letters and spaces only',
            'edit_qual_shortname.required'=>'Qualification Shortname is required filed',
            // 'status.required'=>'status is required field',
           
        ];
    }
}
