<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdatecastecategoryRequest extends FormRequest
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
        'e_caste_name' => ['regex:/^[a-zA-Z0-9\s\W]+$/'],
        'e_religion_id' => ['required', Rule::exists('religions', 'id')],
        'e_subcastes_name' => ['regex:/^[a-zA-Z0-9\s\W]+$/'],
        'e_category' => ['regex:/^[a-zA-Z0-9\s\W]+$/'],
        'e_category_no' => ['regex:/^[a-zA-Z0-9\s\W]+$/'],
        'status' => ['sometimes'],
    ];
    // return [
    //     'e_caste_name' => ['required', 'regex:/^[a-zA-Z0-9\s\W]+$/'],
    //     'e_religion_id' => ['required', Rule::exists('religions', 'id')],
    //     'e_subcastes_name' => ['required', 'regex:/^[a-zA-Z0-9\s\W]+$/'],
    //     'e_category' => ['required', 'regex:/^[a-zA-Z0-9\s\W]+$/'],
    //     'e_category_no' => ['required', 'regex:/^[0-9]+$/'],
    //     'status' => ['sometimes'],
    // ];
        
    }
     public function messages():array
     {
        //  return[
           
        //     'e_caste_name.required'=>'Caste Name is required field',
        //     'e_subcastes_name.required'=>'Subcastes name is required filed',
        //      'e_subcaste_name.regex'=>'SubCaste Name can be letters and spaces only',
        //      'e_category.required'=>'Category Name is required',
        //      'e_category.regex'=>'Category Name can be letters and spaces only',
        //      'e_category_no'=>'Category number is required field',
        //     //   'e_status'=>'status is require  field',
        
            
        // ];
        return [
            'e_caste_name.required' => 'Caste Name is a required field',
            'e_subcastes_name.required' => 'Subcastes Name is a required field',
            'e_subcastes_name.regex' => 'Subcaste Name can contain letters and spaces only',
            'e_category.required' => 'Category Name is required',
            'e_category.regex' => 'Category Name can contain letters and spaces only',
            'e_category_no.required' => 'Category Number is a required field',
            'e_category_no.regex' => 'Category Number can contain numbers only',
        ];
       
     }
}
