<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storebook_publicationsRequest extends FormRequest
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

            //'bc_title' => ['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'bc_book_level' => ['required', Rule::in(['National', 'International'])],
            'bc_publisher_name'=>['required'],
            'bc_edition'=>[],
            'bc_doi'=>[],
            'bc_date'=>['required','date'],
            //'bc_issue'=>[],
            'bc_type'=>['required', Rule::in(['Book', 'Chapter'])],
            // 'bc_chapter_title'=>[''],
            // 'bc_start_page_no'=>['numeric'],
            // 'bc_end_page_no'=>['numeric'],

            'document'=>['required','file','mimes:pdf'],
        ];
    }
    public function messages():array
    {
        return
        [
            //'bc_title.required'=>'title is required field',
           //'bc_title.regex' => 'The title field should contain only letters and spaces.',
            'bc_book_level.required'=>'Book_level is required field',
            'bc_book_level.in'=>'Please select a valid option from the provided choices',
            'bc_publisher_name.required'=>'Publisher name is required filed',
            'bc_publisher_name.regex'=>'The Publisher name field should contain only letters and spaces.',
            'bc_edition.regex'=>'The edition field should contain only letters and spaces.',
            'bc_date.required'=>'date is required field',
            'bc_type.required'=>'type is required field',
            'bc_type.in'=>'Please select a valid option from the provided choices',
           


        ];
    }
}
