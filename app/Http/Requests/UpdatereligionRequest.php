<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatereligionRequest extends FormRequest
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
          
            'edit_religion_name' => ['regex:/^[a-zA-Z\s]+$/'],

            'status' => ['sometimes'],
           
          
        ];
    }
    public function messages():array
    {
        return
        [
            'edit_religion_name.required'=>'Religion Name is required field',
            'edit_religion_name.regex'=>'Religion Name should be characters and spaces only',
            // 'status.required'=>'status is required field',
            
        ];
    }
}
