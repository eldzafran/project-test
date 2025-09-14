<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'company_id' => ['required', 'exists:companies,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ];

        if ($this->isMethod('POST')) {
            $rules['email'][] = 'unique:employees,email';
        }
        if ($this->isMethod('PUT')) {
            $rules['email'][] = Rule::unique('employees', 'email')->ignore($this->route('employee'));
        }

        return $rules;
    }
}