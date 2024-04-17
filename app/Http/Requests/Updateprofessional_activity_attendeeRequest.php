<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Updateprofessional_activity_attendeeRequest extends FormRequest
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
            'edit_title' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'edit_organizer'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'edit_role'=>['required', Rule::in(['Participant', 'Resource Person','Jury'])],
            'edit_level' => ['required', Rule::in([ 'Local', 'National','International'])],
            'edit_category'=>['required', Rule::in(['Workshop', 'FDP', 'Seminar','Webinar','STTP','Certification Program','MDP/EDP','Hackathon'])],
            'edit_sponsored'=>['required', Rule::in(['Yes', 'No'])],
            //'edit_sponsored_by'=>['regex:/^[a-zA-Z\s]+$/'],
            'edit_from_date'=>['required','date'],
            'edit_to_date'=>['required','date'],
            'edit_no_of_days'=>['required','numeric','min:1','max:365'],
            'document'=>['required','file','mimes:pdf'],

        ];
    }
    public function messages():array
    {
        return
        [
            'edit_title.required'=>'title is required field',
            'edit_title.regex' => 'The title field should contain only letters and spaces.',
            'edit_organizer.required'=>'organizer is required filed',
            'edit_organizer.regex'=>'The organizer field should contain only letters and spaces.',
            'edit_role.required'=>'role is required field',
            'edit_role.in'=>'Please select a valid option from the provided choices',
            'edit_level.required'=>'level is required field',
            'edit_level.in'=>'Please select a valid option from the provided choices',
            'edit_category.required'=>'category is required field',
            'edit_category.in'=>'Please select a valid option from the provided choices',
            'edit_sponsored.required'=>'sponsored is required field',
            'edit_sponsored.in'=>'Please select a valid option from the provided choices',
           // 'edit_sponsored_by.required'=>'sponsored by is required field',
            //'edit_sponsored_by.regex' => 'The sponsored by field should contain only letters and spaces.',
            'edit_from_date.required'=>'from_date is required field',
            'edit_to_date.required'=>'to_date is required field',
            'edit_no_of_days.required'=>'no_of_days is required field',
            'edit_no_of_days.numeric'=>'no_of_days should be numbers only',
            'edit_no_of_days.min'=>'no_of_days should be min 1 day',
            'edit_no_of_days.max'=>'no_of_days should be max 365 days',
            //'attended_modal_no.alpha'=>'Modal number',

        ];
    }
}
