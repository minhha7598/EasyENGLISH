<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_name' => 'required|string|max:255',
            'password' => 'required|string|confirmed',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'is_admin' => 'required|int',
            'is_accountant' => 'required|int',
        ];
    }
}