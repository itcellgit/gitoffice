<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;


class UpdateticketRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'description'=>['required','string'],
            'attachment.*'=>['sometimes','file','mimes:jpg,jpeg,png,pdf'],
            //'status'=>['required', Rule::in(['Open', 'Pending','Resolved'])],
            
        ];
    }
    public function messages():array
    {
        return
        [
            'title.required'=>'title is required field',
            'title.string' => 'The title must be string',
            'description.required'=>'description is required filed',
            'description.regex'=>'The description must be string',
            //'status.in'=>'Please select a valid option from the provided choices',
            
        ];
    }
}
