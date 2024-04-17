<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Updateprofessional_activity_conductedRequest extends FormRequest
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
            'e_title' => ['required'],
            'e_level' => ['required', Rule::in(['Local', 'National', 'International'])],
            'e_organizer'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'e_co_organizer'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'e_category'=>['required', Rule::in(['Workshop', 'FDP', 'Seminar','Webinar','STTP','Certification Program','MDP/EDP','Hackathon','Space-Talk','Site Visit'])],
            'e_sponsored'=>['required', Rule::in(['Yes', 'No'])],
            'e_sponsoring_agency_name_address' => ['sometimes'],
            'e_from_date'=>['required','date'],
            'e_to_date'=>['required','date'],
            'e_place'=>['required','alpha','max:255'],
            'e_no_of_days'=>['required','numeric','min:1','max:255'],
            'e_role'=>['required', Rule::in(['Coordinator', 'Convenor', 'Member','Jury'])],
            //'document'=>['required','file','mimes:pdf'],

            ];
    }
    public function messages():array
    {
        return
        [
            'e_title.required'=>'title is required field',
            'e_title.regex'=>'The title field should contain only letters and spaces',
            'e_level.required'=>'level is required field',
            'e_level.in'=>'Please select a valid option from the provided choices',
            'e_organizer.required'=>'organizer is required filed',
            'e_organizer.regex'=>'The organizer field should contain only letters and spaces',
            'e_co_organizer.required'=>'co_organizer is required field',
            'e_co_organizer.regex'=>'The co organizer field should contain only letters and spaces',
            'e_category.required'=>'category is required field',
            'e_category.in'=>'Please select a valid option from the provided choices',
            'e_sponsored.required'=>'sponsored is required field',
            'e_sponsored.in'=>'Please select a valid option from the provided choices',

           // 'e_sponsoring_agency_name_address.regex'=>'The sponsoring_agency_name_address is required field',
            //'e_sponsoring_agency_name_address.in'=>'Please select a valid option from the provided choices',
            'e_from_date.required'=>'from_date is required field',
            'e_to_date.required'=>'to_date is required field',
            'e_place.required'=>'place is required field',
            'e_place.alpha'=>'place should be characters only',
            'e_place.max'=>'place should be max of 255 characters',
            'e_no_of_days.required'=>'no_of_days is required field',
            'e_no_of_days.numeric'=>'no_of_days should be numbers only',
            'e_no_of_days.min'=>'no_of_days should be min 1 day',
            'e_no_of_days.max'=>'no_of_days should be max 365 days',
            'e_role.required'=>'role is required field',
            'e_role.in'=>'Please select a valid option from the provided choices',
          //  'document'=>'document is required field'
        ];
    }
}
