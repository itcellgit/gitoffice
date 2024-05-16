<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storefunded_projectRequest extends FormRequest
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
            //'f_proposal_title'=>['required'],
            'f_role'=>['required', Rule::in(['Principle Investigator', 'Co-Investigator','Architect'])],
            'f_type'=>[Rule::in(['Govt-funded','Private funded'])],
            'f_amount'=>['required','numeric'],
            'f_proposal_status'=>['required', Rule::in(['Accepted', 'Pending', 'Rejected'])],
            'f_application_date'=>['required','date'],
            'f_fund_received'=>['numeric'],
            'f_project_status'=>['required', Rule::in(['On-Going', 'Completed'])],
            'f_completion_year'=>['required','numeric'],
            'document'=>['required','file','mimes:pdf'],
        ];
    }
        public function messages():array
        {
            return 
             [
                // 'f_proposal_title.required'=>'proposal title is required field',
                // 'f_proposal_title.regex' => 'The proposal title field should contain only letters and spaces.',
                'f_role.required'=>'role is required field',
                'f_proposal_title.regex' => 'The proposal title field should contain only letters and spaces.',
                // 'f_type.required'=>'type is required field',
                // 'f_type.in'=>'Please select a valid option from the provided choices',
                'f_amount.required'=>'Amount is required field',
                'f_amount.numeric'=>'Amount can be numbers only',
                'f_proposal_status.required'=>'proposal status is required field',
                'f_proposal_status.in'=>'Please select a valid option from the provided choices',
                'f_application_date.required'=>'application date is required field',
                //'f_fund_received.required'=>'fund received is required field',
                'f_fund_received.numeric'=>'fund received can be numbers only',
                'f_project_status.required'=>'project status is required field',
                'f_project_status.in'=>'Please select a valid option from the provided choices',
                'f_completion_year.required'=>'completion year is required field',
                'f_completion_year.numeric'=>'completion year can be numbers only',
                
            ];
        }
}
