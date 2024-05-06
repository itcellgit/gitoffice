<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatecopyrightRequest extends FormRequest
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
            'ce_copyright_title'=>['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'ce_copyright_date'=>['required','date'],
            'ce_author_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'ce_status'=>['required', Rule::in(['Applied', 'Awarded'])],
            'ce_description'=>['required', 'regex:/^[a-zA-Z\s]+$/'],

        ];
    }
    public function messages():array
    {
        return
        [
            'ce_copyright_title.required'=>'copyright_title is required field',
            'ce_copyright_title.regex' => 'The copyright_title field should contain only letters and spaces.',
            'ce_copyright_date.required'=> 'The copyright date is required field',
            'ce_author_name.required'=>'author name is required filed',
            'ce_author_name.regex'=>'The author name field should contain only letters and spaces.',
            'ce_status.required'=>'status is required field',
            'ce_status.in'=>'Please select a valid option from the provided choices',
            'ce_description.required'=>'description is required field',
            'ce_description.regex'=>'The description field should contain only letters and spaces',



     ];
    }
}
