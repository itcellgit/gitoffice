<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateeventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
        [
           
            'e_event_name' => ['required',],
            'e_start_date'=>['required','date'],
            'e_to_date'=>['required','date'],
            'e_location'=>['required', ],
            'e_organizers'=>['required',], 
            'e_event_website'=>['url'],
            'e_staff_type'=>['required',Rule::in(['Teaching','Non-Teaching','All'])],
        ];
    }
    public function messages():array
    {
        return[
            // 'e_event_name.required'=>'Event name is required field',
            // 'e_event_name.regex' => 'The Event Name field should contain only letters and spaces.',
            'e_start_date.required'=>'start date is required filed',
            'e_to_date.required'=>'To date is required field',
            // 'e_location.required'=>'location is required field',
            // 'e_location.regex' => 'The Location field should contain only letters and spaces.',
            // 'e_organizers.required'=>'organizers is required field',
            // 'e_organizers.regex' => 'The organizers field should contain only letters and spaces.',
            'e_event_website'=>'Event website must be valid url',
            'e_staff_type.required'=>'staff type is required field',
            'e_staff_type.in'=>'Staff type must be either Teaching,Non-Teaching or All',
        ];
    }
}
