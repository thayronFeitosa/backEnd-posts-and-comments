<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends GlobalRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required',
        ];

    }

    public function messages(): array
    {
        return [
            'required' => 'O :attribute é obrigatório.',

            'description.required' => 'A descrição é obrigatória.',
        ];
    }
}
