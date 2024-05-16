<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Updateconferences_attendeeRequest extends FormRequest
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


            'edit_conference_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'edit_attended_as' => ['required', Rule::in(['Resource Person', 'Paper Presenter', 'Participant','Session Chair'])],
            'edit_from_date'=>['required','date'],
            'edit_to_date'=>['required','date'],
            'edit_no_of_days'=>['required','numeric','min:1','max:255'],
           
            'edit_sponsored' => ['required', Rule::in(['Yes', 'No'])],
            'edit_sponsored_by'=>['sometimes'],
            'edit_amount'=>[],
          
            'edit_type_of_level' => [Rule::in(['National', 'International'])],
            'edit_ISSN_NO' =>[],
            'document'=>['required','file','mimes:pdf'],
        ];
    }
    public function messages():array
    {
        return
        [
            'edit_conference_name.required'=>'conference name is required field',
            'edit_conference_name.regex' => 'The conference name field should contain only letters and spaces.',
            'edit_attended_as.required'=>'attended as is required filed',
            'edit_attended_as.in'=>'Please select a valid option from the provided choices',
            'edit_from_date.required'=>'from_date is required field',
            'edit_to_date.required'=>'to_date is required field',
            'edit_no_of_days.required'=>'no_of_days is required field',
            'edit_no_of_days.numeric'=>'no_of_days should be numbers only',
            'edit_no_of_days.min'=>'no_of_days should be min 1 day',
            'edit_no_of_days.max'=>'no_of_days should be max 365 days',
            // 'edit_title.required'=>'title  is required field',
            // 'edit_title.regex' => 'The title field should contain only letters and spaces.',
            // 'edit_place.required'=>'place  is required field',
            'edit_sponsored.required'=>'sponsored is required field',
            'edit_sponsored.in'=>'Please select a valid option from the provided choices',
            //'edit_sponsored_by.required'=>'edit_sponsored by  is required field',
            //'edit_sponsored_by.regex' => 'The edit_sponsored by field should contain only letters and spaces.',
            'edit_amount.numeric'=>'amount can be numbers only',
            


     ];
    }
}
