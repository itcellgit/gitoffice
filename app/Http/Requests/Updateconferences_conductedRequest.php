<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Updateconferences_conductedRequest extends FormRequest
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
            'ce_conference_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'ce_co_organizer'=>['regex:/^[a-zA-Z\s]+$/'],
            'ce_no_of_participants'=>['required','numeric'],
            'ce_sponsored' => ['required', Rule::in(['Yes', 'No'])],
            //'ce_sponsoring_agency'=>['required', Rule::in(['Yes', 'No'])],
            'ce_from_date'=>['required','date'],
            'ce_to_date'=>['required','date'],
            'ce_no_of_days'=>['required','numeric','min:1','max:365'],
            'ce_place'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'ce_publisher'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'ce_role' => ['required', Rule::in(['Convener', 'Co-convener','Team Member','Coordinator'])],
            'ce_weblink'=>['url'],
            'cc_type_of_level' => [Rule::in(['National', 'International'])],
            'ce_ISSN_NO'=>[],

        ];
    }
    public function messages():array
    {
        return[
            'ce_conference_name.required'=>'conference name is required field',
            'ce_conference_name.regex' => 'The conference name field should contain only letters and spaces.',
            'ce_co_organizer.regex'=>'The co organizer field should contain only letters and spaces.',
            'ce_no_of_participants.required'=>'No of participants is required field',
            'ce_sponsored.required'=>'sponsored is required field',
            'ce_sponsored.in'=>'Please select a valid option from the provided choices',
            //'ce_sponsoring_agency.required'=>'sponsoring_agency field',
            //'ce_sponsoring_agency.in'=>'Please select a valid option from the provided choices',
            'ce_from_date.required'=>'from_date is required field',
            'ce_to_date.required'=>'to_date is required field',
            'ce_no_of_days.required'=>'no_of_days is required field',
            'ce_no_of_days.numeric'=>'no_of_days should be numbers only',
            'ce_no_of_days.min'=>'no_of_days should be min 1 day',
            'ce_no_of_days.max'=>'no_of_days should be max 365 days',
            'ce_place.required'=>'place name is require field',
            'ce_place.regex'=>'place field should contain only letters and spaces',
            'ce_publisher.required'=>'publisher is require field',
            'ce_publisher.regex'=>'publisher field should contain only letters and spaces',
            'ce_role.required'=>'role is required field',
            'ce_role.in'=>'Please select a valid option from the provided choices',
            'ce_weblink.url'=>'The weblink must be valid url',
            'ce_type_of_level.required'=>'level is required field',
            'ce_type_of_level.in'=>'Please select a valid option from the provided choices',
            //'ce_ISSN_NO'=>'',



     ];
    }
}
