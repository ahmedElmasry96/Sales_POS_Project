<?php

namespace App\Http\Requests\Dashboard\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|exists:admins,email',
            'password' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'البريد الإلكترونى إلزامى',
            'email.exists' => 'البريد الالكترونى غير موجود',
            'password.required' => 'كلمة المرور إلزامية',
        ];
    }
}
