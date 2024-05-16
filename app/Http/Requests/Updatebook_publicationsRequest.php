<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Updatebook_publicationsRequest extends FormRequest
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

            //'ebc_title' => ['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'ebc_book_level' => ['required', Rule::in(['National', 'International'])],
            'ebc_publisher_name'=>['required'],
            'ebc_edition'=>[],
            'ebc_doi'=>[],
            'ebc_date'=>['required','date'],
            //'ebc_issue'=>[],
            'ebc_type'=>['required', Rule::in(['Book', 'Chapter'])],
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
            // 'ebc_title.required'=>'title is required field',
            // 'ebc_title.regex' => 'The title field should contain only letters and spaces.',
            'ebc_book_level.required'=>'Book_level is required field',
            'ebc_book_level.regex'=>'Book_level field should contain only letters and spaces',
            'ebc_publisher_name.required'=>'Publisher name is required filed',
            'ebc_publisher_name.regex'=>'The Publisher name field should contain only letters and spaces.',
            'ebc_edition.regex'=>'The edition field should contain only letters and spaces.',
            'ebc_date.required'=>'date is required field',
            'ebc_type.required'=>'type is required field',
            'ebc_type.in'=>'Please select a valid option from the provided choices',
            // 'ebc_chapter_title.required'=>'chapter_title is required field',
            // 'ebc_chapter_title.regex' => 'The chapter_title field should contain only letters and spaces.',
            // 'ebc_start_page_no.numeric'=>'Start page no should contain only numbers',
            // 'ebc_end_page_no.numeric'=>'End page no should contain only numbers',



        ];
    }
}
