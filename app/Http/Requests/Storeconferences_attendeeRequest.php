<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storeconferences_attendeeRequest extends FormRequest
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

            'conference_name'=> ['required','regex:/^[a-zA-Z\s]+$/'],
            'attended_as' => ['required', Rule::in(['Resource Person', 'Paper Presenter', 'Participant','Session Chair'])],
            'from_date'=> ['required','date'],
            'to_date'=> ['required','date'],
            'no_of_days'=> ['required','numeric','min:1','max:365'],
            //'place'=> ['required', 'alpha'],
            'sponsored' => ['required', Rule::in(['Yes', 'No'])],
           'sponsored_by'=>['sometimes'],
            'amount'=> [''],
            
            'type_of_level' => ['required', Rule::in(['National', 'International'])],
            'ISSN_NO' =>[],
            'document'=>['required','file','mimes:pdf'],
        ];
    }
    public function messages():array
    {
        return
        [
            'conference_name.required'=>'conference name is required field',
            'conference_name.regex' => 'The conference name field should contain only letters and spaces.',
            'attended_as.required'=>'attended as is required filed',
            'attended_as.in'=>'Please select a valid option from the provided choices',
            'from_date.required'=>'from_date is required field',
            'to_date.required'=>'to_date is required field',
            'no_of_days.required'=>'no_of_days is required field',
            'no_of_days.numeric'=>'no_of_days should be numbers only',
            'no_of_days.min'=>'no_of_days should be min 1 day',
            'no_of_days.max'=>'no_of_days should be max 365 days',
            'place.required'=>'place is required field',
           
            'sponsored.required'=>'sponsored is required field',
            'sponsored.in'=>'Please select a valid option from the provided choices',
       
            'amount.numeric'=>'amount can be numbers only',
          

     ];
    }

}
