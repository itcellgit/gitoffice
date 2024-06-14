<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreeventRequest extends FormRequest
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
           
            'event_name' => ['required',],
            'start_date'=>['required','date'],
            'to_date'=>['required','date'],
            'location'=>['required',],
            'organizers'=>['required',], 
            'event_website'=>['url'],
            'staff_type'=>['required',Rule::in(['Teaching','Non-Teaching','All'])],
        ];
    }
    public function messages():array
    {
        return[
            // 'event_name.required'=>'Event name is required field',
            // 'event_name.regex' => 'The Event Name field should contain only letters and spaces.',
            'start_date.required'=>'start date is required filed',
            'to_date.required'=>'To date is required field',
            // 'location.required'=>'location is required field',
            // 'location.regex' => 'The Location field should contain only letters and spaces.',
            // 'organizers.required'=>'organizers is required field',
            // 'organizers.regex' => 'The organizers field should contain only letters and spaces.',
            'event_website'=>'Event website must be valid url',
            'staff_type.required'=>'staff type is required field',
            'staff_type.in'=>'Staff type must be either Teaching,Non-Teaching or All',

     ];
    }
}
