<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:5',
            'email' => 'required|email',
            'telephone' => 'required|numeric|min:9',
            'message' => 'required|min:10'

        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo de preenchimento obrigatório',
            'min' => 'O tamanho minimo aceitável é :min',
            'email' => 'O Campo precisa ser um email válido',
            'numeric' => 'Verifique o tipo de dados inserido'
        ];
    }
}
