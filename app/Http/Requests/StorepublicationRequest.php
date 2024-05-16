<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorepublicationRequest extends FormRequest
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
            'level'=>['required', Rule::in(['Q1', 'Q2', 'Q3','Q4','SCI','Web of Science','Scopus Indexed','UGC General','Other'])],
            'other_level'=>['sometimes'],
            // 'title' => ['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'date'=>['required','date'],
            'journal'=>[''],
            'publication_type'=>['required', Rule::in(['Journal','Conference Proceeding'])],
            'doi_number'=>[''],
            // 'link'=>['url'],
            'role'=>['required', Rule::in(['Author','Co-Author','Corresponding-Author'])],
            'document'=>['required','file','mimes:pdf'],
            //
        ];
    }
    public function messages():array
    {
        return
        [
            'level.required'=>'level is required field',
            'level.in'=>'Please select a valid option from the provided choices',
           // 'other_level'=>'other level field should contain letters and spaces',
            
            'date.required'=>'date is required field',
            // 'journal.required'=>'journal is required filed',
            // 'journal.regex'=>'The journal field should contain only letters and spaces.',
          
            'role.required'=>'role is required field',
            'role.in'=>'Please select a valid option from the provided choices',
            'document'=>'document is required field',
        ];
    }
}
