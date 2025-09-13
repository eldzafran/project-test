<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $rules = [
            'company_id' => ['required', 'exists:companies,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ];

        // Aturan unik hanya berlaku saat menambahkan karyawan baru
        if ($this->isMethod('POST')) {
            $rules['email'][] = 'unique:employees,email';
        }
        // Saat mengedit, email harus unik kecuali untuk karyawan itu sendiri
        if ($this->isMethod('PUT')) {
            $rules['email'][] = Rule::unique('employees', 'email')->ignore($this->route('employee'));
        }

        return $rules;
    }
}