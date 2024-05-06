<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storereviewer_editorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return
        [

            'journal_name'=>['required'],
            'publisher_name'=>['required'],
            'reviewed_date'=>['required','date'],
            'level'=>['required', Rule::in(['Q1', 'Q2', 'Q3','Q4','SCI','Web of Science','Scopus Indexed','UGC General','Other'])],
            'other_level'=>['sometimes'],
            'category'=>['required', Rule::in(['journal','conference proceeding'])],

        ];
    }

    public function messages():array
    {
        return
        [

            'journal_name.required'=>'journal name is required filed',
            'publisher_name.required'=>'publisher name is required filed',
            'reviewed_date.required'=>'date is required field',
            'level.required'=>'level is required field',
            'level.in'=>'Please select a valid option from the provided choices',
            'category.required'=>'category is required field',
            'category.in'=>'Please select a valid option from the provided choices',

        ];
    }
}
