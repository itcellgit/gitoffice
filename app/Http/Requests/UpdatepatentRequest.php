<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatepatentRequest extends FormRequest
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
            'pe_appl_no'=>['required','numeric'],
            'pe_appl_date'=>['required','date'],
            // 'pe_title'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'pe_stream_domain'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'pe_status'=>['required', Rule::in(['Granted','Pending','Rejected','Awarded','Published'])],
            'pe_patent_no'=>['required','numeric'],
            'pe_publication_no'=>['required','numeric'],
            'pe_publication_date'=>['required','date'],
            'document'=>['required','file','mimes:pdf'],


        ];
    }
    public function messages():array
    {
        return
        [
            'pe_appl_no.required'=>'application number is required field',
            'pe_appl_no.numeric' => 'application number field should contain only numbers',
            'pe_appl_date.required'=>'application date is required field',
            // 'pe_title.required'=>'title is required filed',
            // 'pe_title.regex'=>'The title field should contain only letters and spaces.',
            'pe_stream_domain.required'=>'stream domain is required filed',
            'pe_stream_domain.regex'=>'The stream domain field should contain only letters and spaces.',
            'pe_status.required'=>'status is required field',
            'pe_status.in'=>'Please select a valid option from the provided choices',
            'pe_patent_no.required'=>'patentnumber is required field',
            'pe_patent_no.numeric' => 'The patent number field should contain only numbers',
            'pe_publication_no.required'=>'publication number is required field',
            'pe_publication_no.numeric' => 'The publication number field should contain only numbers',
            'pe_publication_date.required'=>'publication_date is required field',

        ];
    }
}
