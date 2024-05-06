<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class Updatepost_ticketRequest extends FormRequest
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
            // 'description'=>['required','string'],
            // 'attachment'=>['sometimes','file','mimes:jpg,jpeg,png,pdf'],
            'status'=>['required', Rule::in(['Open', 'Pending','Resolved'])],
            
        ];

    }
    public function messages():array
    {
        return
        [
         
            // 'description.required'=>'description is required filed',
            // 'description.regex'=>'The description must be string.',
            // 'attachment.mimes' => 'The attachment can be a JPG, JPEG, PNG, or PDF file.',
            'status.in'=>'Please select a valid option from the provided choices',
     
        ];
    }
}
