<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updatequalification_staffRequest extends FormRequest
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
            
            'qualification_name'=>['required','string', 'max:255'],
            'board_university'=>['required','string', 'max:255'],
            'grade'=>['string', 'max:255'],
            'yop'=>['date']
         ];
    }
}
