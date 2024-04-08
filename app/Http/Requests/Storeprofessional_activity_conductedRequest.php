<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storeprofessional_activity_conductedRequest extends FormRequest
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
            'con_title' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'con_level' => ['required', Rule::in(['Local', 'National', 'International'])],
            'con_organizer'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'con_co_organizer'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'con_category'=>['required', Rule::in(['Workshop', 'FDP', 'Seminar','Webinar','STTP','Certification Program','MDP/EDP'])],
            'con_sponsored'=>['required', Rule::in(['Yes', 'No'])],
            'con_sponsoring_agency_name_address' => ['sometimes'],
            'con_from_date'=>['required','date'],
            'con_to_date'=>['required','date'],
            'con_place'=>['required','regex:/^[a-zA-Z\s]+$/'],
            'con_no_of_days'=>['required','numeric','min:1','max:255'],
            'con_role'=>['required', Rule::in(['Coordinator', 'Convenor', 'Member'])],
            //'document'=>['required','file','mimes:pdf'],
           // 'conducted'=>'conducted',
           

        ];
    }
    public function messages():array
    {
        return[
            'con_title.required'=>'title is required field',
            'con_title.regex'=>'The title field should contain only letters and spaces', 
            'con_level.required'=>'level is required field',
            'con_level.in'=>'Please select a valid option from the provided choices',
            'con_organizer.required'=>'organizer is required filed',
            'con_organizer.regex'=>'The organizer field should contain only letters and spaces',
            'con_co_organizer.required'=>'co_organizer is required field',
            'con_co_organizer.regex'=>'The co organizer field should contain only letters and spaces',
            'con_category.required'=>'category is required field',
            'con_category.in'=>'Please select a valid option from the provided choices',
            'con_sponsored.required'=>'sponsored is required field',
            'con_sponsored.in'=>'Please select a valid option from the provided choices',
            //'con_sponsoring_agency_name_address.sometimes'=>'sponsoring agency name address is required field',
            //'con_sponsoring_agency_name_address.in'=>'The sponsoring agency name address field should contain only letters and spaces', 
            'con_from_date.required'=>'from_date is required field',
            'con_to_date.required'=>'to_date is required field',
            'con_place.required'=>'place is required field',
            //'con_place.alpha'=>'place should be characters only',
            //'con_place.max'=>'place should be max of 255 characters',
            'con_no_of_days.required'=>'no_of_days is required field',
            'con_no_of_days.numeric'=>'no_of_days should be numbers only',
            'con_no_of_days.min'=>'no_of_days should be min 1 day',
            'con_no_of_days.max'=>'no_of_days should be max 365 days',
            'con_role.required'=>'role is required field',
            'con_role.in'=>'Please select a valid option from the provided choices',
           // 'document'=>'document is required field',
            
            
            
            
          

     ];
    }
}
