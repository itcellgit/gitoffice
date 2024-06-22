<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorecastecategoryRequest extends FormRequest
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
            'caste_name'=>['required','regex:/^[a-zA-Z0-9\s\W]+$/'],
            'religion_id' => ['required', Rule::exists('religions', 'id')],
            'subcastes_name'=>['required','regex:/^[a-zA-Z0-9\s\W]+$/'],
            'category'=>['required','regex:/^[a-zA-Z0-9\s\W]+$/'],
            'category_no'=>['required','regex:/^[a-zA-Z0-9\s\W]+$/'],
           
        ];
    }
    public function messages():array
    {
        return[
            'caste_name.required'=>'Caste Name is required field',
            'caste_name.regex'=>'Caste Name can be letters and spaces only',
            'subcastes_name.required'=>'Subcastes name is required filed',
            'subcaste_name.regex'=>'SubCaste Name can be letters and spaces only',
            'category.required'=>'Category Name is required',
            'category.regex'=>'Category Name can be letters and spaces only',
            'category_no'=>'Category number can be  letters numbers and spaces',
            
        ];
    }
   
}
