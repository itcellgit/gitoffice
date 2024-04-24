<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storegeneral_achievementsRequest extends FormRequest
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
            // 'ga_award'=>['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'ga_year'=>['required','numeric'],
            // 'ga_details'=> ['required', 'regex:/^[a-zA-Z\s0-9]+$/'],
            'document'=>['required','file','mimes:pdf'],
            'ga_awarding_body'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            // 'ga_validation_status'=>[Rule::in(['new','valid','invalid'])],
            // 'ga_reason'=>['sometimes'],
        ];
    }
    public function messages():array
    {
        return[
            // 'ga_award.required'=>'award is required field',
            // 'ga_award.regex' => 'The award field should contain only letters and spaces.',
            'ga_year.required'=>'year is required filed',
            'ga_year.numeric'=>'year can be numbers only',
            // 'ga_details.required'=>'details is required field',
            // 'ga_details.regex'=>'The details field should contain only letters and spaces.',
            'ga_awarding_body.required'=>'award is required field',
            'ga_awarding_body.regex' => 'The award field should contain only letters and spaces.',
            // 'ga_validation_status.required'=>'validation_status is required field',
            // 'ga_validation_status.in'=>'Please select a valid option from the provided choices',

     ];
    }
}
