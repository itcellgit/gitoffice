<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class Storeprofessional_activity_attendeeRequest extends FormRequest
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
            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'organizer'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'role'=>['required', Rule::in(['Participant', 'Resource Person','Jury'])],
            'level' => ['required', Rule::in([ 'Local', 'National','International'])],
            'category'=>['required', Rule::in(['Workshop', 'FDP', 'Seminar','Webinar','STTP','Certification Program','MDP/EDP','Hackathon'])],
            'sponsored'=>['required', Rule::in(['Yes', 'No'])],
            'sponsored_by'=>['sometimes'],

            //'sponsored_by'=>['required', Rule::in(['KLS GIT', 'Other'])],
            'from_date'=>['required','date'],
            'to_date'=>['required','date'],
            'no_of_days'=>['required','numeric','min:1','max:365'],

            'document'=>['required','file','mimes:pdf'],

        ];

    }
    public function messages():array
    {
        return[
            'title.required'=>'title is required field',
            'title.regex' => 'The title field should contain only letters and spaces.',
            'organizer.required'=>'organizer is required filed',
            'organizer.regex'=>'The organizer field should contain only letters and spaces.',
            'role.required'=>'role is required field',
            'role.in'=>'Please select a valid option from the provided choices',
            'level.required'=>'level is required field',
            'level.in'=>'Please select a valid option from the provided choices',
            'category.required'=>'category is required field',
            'category.in'=>'Please select a valid option from the provided choices',
            'sponsored.required'=>'sponsored is required field',
            'sponsored.in'=>'Please select a valid option from the provided choices',
            //'sponsored_by.required'=>'sponsored by is required field',
            //'sponsored_by.in'=>'Please select a valid option from the provided choices',
            'from_date.required'=>'from_date is required field',
            'to_date.required'=>'to_date is required field',
            'no_of_days.required'=>'no_of_days is required field',
            'no_of_days.numeric'=>'no_of_days should be numbers only',
            'no_of_days.min'=>'no_of_days should be min 1 day',
            'no_of_days.max'=>'no_of_days should be max 365 days',


     ];
    }
}
