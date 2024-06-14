<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreallowancesRequest extends FormRequest
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
            'title'=>['required','string','max:255'],
            'value'=>['required','int'],
            'value_type'=>['required','string','max:255'],
            'employee_type'=>['required'],
           'designations_id'=>['sometimes'],
            'wef'=>['required','date']
        ];
    }
    public function messages():array
    {
        return[
            'title.required'=>'title is required field',
          
            'value.required'=>'value name is required filed',
            
            'deisgnations_id.sometimes'=>'designation Name is required',
          
        ];
    }
}
