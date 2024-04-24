<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatepublicationRequest extends FormRequest
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
            'e_level'=>['required', Rule::in(['Q1', 'Q2', 'Q3','Q4','SCI','Web of Science','Scopus Indexed','UGC General','Other'])],
            //'e_other_level'=>['regex:/^[a-zA-Z\s]+$/'],
            'e_title' => ['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'e_date'=>['required','date'],
            'e_journal'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'e_publication_type'=>['required', Rule::in(['Journal','Conference Proceeding'])],

            'e_doi_number'=>['required'],
            'e_link'=>['url'],
            'e_role'=>['required',Rule::in(['Author', 'Co-Author','Corresponding-Author'])],

            'document'=>['required','file','mimes:pdf'],



        ];
    }
    public function messages():array
    {
        return
        [
            'e_level.required'=>'level is required field',
            'e_level.in'=>'Please select a valid option from the provided choices',
            'e_title.required'=>'title is required field',
            'e_title.regex' => 'The title field should contain only letters and spaces.',
            'e_date.required'=>'date is required field',
            'e_journal.required'=>'journal is required filed',
            'e_journal.regex'=>'The journal field should contain only letters and spaces.',
            'e_publication_type.required'=>'publication type is required field',
            'e_publication_type.in'=>'Please select a valid option from the provided choices',
            'e_link.url'=>'The link should be valid url',
            'e_role.required'=>'role is required field',
            'e_role.in'=>'Please select a valid option from the provided choices',
            'document'=>'document is required field',


        ];
    }
}
