<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StorepatentRequest extends FormRequest
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
            'p_appl_no'=>['required','numeric'],
            'p_appl_date'=>['required','date'],
            // 'p_title'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            //'p_stream_domain'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'p_status'=>['required', Rule::in(['Granted','Pending','Rejected','Awarded','Published'])],
            'p_patent_no'=>['required','numeric'],
            'p_publication_no'=>['required','numeric'],
            'p_publication_date'=>['required','date'],
            'document'=>['required','file','mimes:pdf'],
        ];
    }
    public function messages():array
    {
        return
        [
            'p_appl_no.required'=>'application number is required field',
            'p_appl_no.numeric' => 'The application number field should contain only numbers',
            'p_appl_date.required'=>'application date is required field',
            // 'p_title.required'=>'title is required filed',
            // 'p_title.regex'=>'The title field should contain only letters and spaces.',
            // 'p_stream_domain.required'=>'stream_domain is required filed',
            // 'p_stream_domain.regex'=>'The stream_domain field should contain only letters and spaces.',
            'p_status.required'=>'status is required field',
            'p_status.in'=>'Please select a valid option from the provided choices',
            'p_patent_no.required'=>'patentnumber is required field',
            'p_patent_no.numeric' => 'The patent number field should contain only numbers',
            'p_publication_no.required'=>'publication number is required field',
            'p_publication_no.numeric' => 'The publication number field should contain only numbers',
            'p_publication_date.required'=>'publication_date is required field',
        ];
    }
}
