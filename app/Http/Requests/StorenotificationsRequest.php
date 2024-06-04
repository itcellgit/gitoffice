<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorenotificationsRequest extends FormRequest
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
        return [
            'notification_title' => ['required','string', 'max:255'],
            'notification_type' => ['required','string', 'max:255'],
            
            'date'=>['date'],
            'description'=>['required','string','max:255']
        ];
    }
}
