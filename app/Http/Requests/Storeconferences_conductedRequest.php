<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storeconferences_conductedRequest extends FormRequest
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
            'cc_conference_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            // 
            'cc_no_of_participants'=>['required','numeric'],
            'cc_sponsored' => ['required', Rule::in(['Yes', 'No'])],
            //'cc_sponsoring_agency'=>['sometimes', Rule::in(['Yes', 'No'])],
            'cc_from_date'=>['required','date'],
            'cc_to_date'=>['required','date'],
            'cc_no_of_days'=>['required','numeric','min:1','max:365'],
            'cc_place'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            //'cc_publisher'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'cc_role' => ['required', Rule::in(['Convener', 'Co-convener','Team Member','Coordinator'])],
           
            'cc_type_of_level' => [Rule::in(['National', 'International'])],
            'cc_ISSN_NO'=>[],

        ];
    }
    public function messages():array
    {
        return[
            'cc_conference_name.required'=>'conference name is required field',
            'cc_conference_name.regex' => 'The conference name field should contain only letters and spaces.',
            //'cc_co_organizer.regex'=>'The co organizer field should contain only letters and spaces.',
            'cc_no_of_participants.required'=>'No of participants is required field',
            'cc_sponsored.required'=>'sponsored is required field',
            'cc_sponsored.in'=>'Please select a valid option from the provided choices',
            //'cc_sponsoring_agency.sometimes'=>'sponsoring agency name is required field',
            //'cc_sponsoring_agency.in' => 'Please select a valid option from the provided choices.',
            'cc_from_date.required'=>'from_date is required field',
            'cc_to_date.required'=>'to_date is required field',
            'cc_no_of_days.required'=>'no_of_days is required field',
            'cc_no_of_days.numeric'=>'no_of_days should be numbers only',
            'cc_no_of_days.min'=>'no_of_days should be min 1 day',
            'cc_no_of_days.max'=>'no_of_days should be max 365 days',
            'cc_place.required'=>'place name is require field',
            'cc_place.regex'=>'place field should contain only letters and spaces',
            // 'cc_publisher.required'=>'publisher is require field',
            // 'cc_publisher.regex'=>'publisher field should contain only letters and spaces',
            'cc_role.required'=>'role is required field',
            'cc_role.in'=>'Please select a valid option from the provided choices',
            //'cc_weblink.url'=>'The weblink must be valid url',
            'cc_type_of_level.required'=>'level is required field',
            'cc_type_of_level.in'=>'Please select a valid option from the provided choices',


     ];
    }
}
