<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends GlobalRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->id,
            'password' => 'required|min:8|confirmed',
        ];

    }

    public function messages(): array
    {
        return [
            'required' => 'O :attribute é obrigatório.',
            'unique' => 'Este :attribute já está cadastrado.',
            'email' => 'O :attribute precisa ser um endereço válido.',

            'name.required' => 'O nome é obrigatório.',

            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha precisa conter pelo menos :min caracteres.',
            'password.confirmed' => 'A confirmação da senha não está igual a senha.',
        ];
    }
}
