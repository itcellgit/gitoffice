<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Updatefunded_projectRequest extends FormRequest
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
            //
            //'fe_proposal_title'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'fe_role'=>['required', Rule::in(['Principle Investigator', 'Co-Investigator','Architect'])],
            'fe_type'=>[ Rule::in(['Govt-funded','Private funded'])],

            'fe_amount'=>['required','numeric'],
            'fe_proposal_status'=>['required', Rule::in(['Accepted', 'Pending', 'Rejected'])],
            'fe_application_date'=>['required','date'],
            'fe_fund_received'=>['numeric'],
            'fe_project_status'=>['required', Rule::in(['On-Going', 'Completed'])],
            'fe_completion_year'=>['required','numeric'],
            'document'=>['required','file','mimes:pdf'],
        ];
    }
    public function messages():array
    {
        return 
         [
            // 'fe_proposal_title.required'=>'proposal title is required field',
            // 'fe_proposal_title.regex' => 'The proposal title field should contain only letters and spaces.',
            'fe_role.required'=>'role is required field',
            'fe_role.in'=>'Please select a valid option from the provided choices',
            'fe_type.required'=>'type is required field',
            'fe_type.in'=>'Please select a valid option from the provided choices',
            'fe_amount.required'=>'Amount is required field',
            'fe_amount.numeric'=>'Amount can be numbers only',
            'fe_proposal_status.required'=>'proposal status is required field',
            'fe_proposal_status.in'=>'Please select a valid option from the provided choices',
            'fe_application_date.required'=>'application date is required field',
            //'fe_fund_received.required'=>'fund received is required field',
            'fe_fund_received.numeric'=>'fund received can be numbers only',
            'fe_project_status.required'=>'project status is required field',
            'fe_project_status.in'=>'Please select a valid option from the provided choices',
            'fe_completion_year.required'=>'completion year is required field',
            'fe_completion_year.numeric'=>'completion year can be numbers only',
            
        ];
    }
}
