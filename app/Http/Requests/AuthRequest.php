<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends GlobalRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|',
            'password' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O :attribute é obrigatório.',
            'email' => 'O :attribute precisa ser um endereço válido.',

            'password.required' => 'A senha é obrigatória.',
        ];
    }
}
