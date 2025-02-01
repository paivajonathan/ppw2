<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:6',
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'Necessário enviar email válido',
            'password.required' => 'Campo senha é obrigatório',
            'password.min' => 'Senha no minimo :min caractres!',
        ];
    }
}
