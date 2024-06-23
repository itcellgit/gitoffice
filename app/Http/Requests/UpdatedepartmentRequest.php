<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedepartmentRequest extends FormRequest
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
            'edit_dept_name'=>['required', 'regex:/^[a-zA-Z0-9\s\W]+$/'],
            'edit_dept_shortname'=>['required'],
            'edit_yoe'=>['required','date'],
            'edit_status'=>['sometimes'],
          
        ];
    }
    public function messages():array
    {
        return
        [
            'edit_dept_name.required'=>'Dept Name is required field',
            'edit_dept_name.regex'=>'Dept Name should be contain characters and letters only',
            'edit_dept_shortname.required'=>'Dept Shortname is required filed',
            'edit_yoe.required'=>'Year of Establishment is required field',
            'edit_yoe.date'=>'Year of Establishment should be in date format',
            // 'status.required'=>'status is required field',
          
        ];
    }
}
