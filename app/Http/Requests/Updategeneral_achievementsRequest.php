<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updategeneral_achievementsRequest extends FormRequest
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

            'gae_year'=>['required','numeric'],
            'document'=>['required','file','mimes:pdf'],
            //'gae_awarding_body'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
        ];
    }
    public function messages():array
    {
        return[
            // 'gae_award.required'=>'awar,d is required field',
            // 'gae_award.regex' => 'The award field should contain only letters and spaces.',
            'gae_year.required'=>'year is required filed',
            'gae_year.numeric'=>'year can be numbers only',
            // 'gae_details.required'=>'details is required field',
            // 'gae_details.regex'=>'The details field should contain only letters and spaces.',
            // 'gae_awarding_body.required'=>'award is required field',
            // 'gae_awarding_body.regex' => 'The award field should contain only letters and spaces.',
            // 'gae_validation_status.required'=>'validation_status is required field',
            // 'gae_valeidation_status.in'=>'Please select a valid option from the provided choices',

     ];
    }
}


