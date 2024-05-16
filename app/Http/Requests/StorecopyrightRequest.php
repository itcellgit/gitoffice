<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StorecopyrightRequest extends FormRequest
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
            //'c_copyright_title'=>['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'c_copyright_date'=>['required','date'],
            'c_author_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'c_status'=>['required', Rule::in(['Applied', 'Awarded'])],
            //'c_description'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
        ];
    }
    public function messages():array
    {
        return[
            // 'c_copyright_title.required'=>'copyright_title is required field',
            // 'c_copyright_title.regex' => 'The copyright_title field should contain only letters and spaces.',
            'c_copyright_date.required'=> 'The copyright date is required field',
            'c_author_name.required'=>'author name is required filed',
            'c_author_name.regex'=>'The author name field should contain only letters and spaces.',
            'c_status.required'=>'status is required field',
            'c_status.in'=>'Please select a valid option from the provided choices',
            // 'c_description.required'=>'description is required field',
            // 'c_description.regex'=>'The description field should contain only letters and spaces',


     ];
    }
}
