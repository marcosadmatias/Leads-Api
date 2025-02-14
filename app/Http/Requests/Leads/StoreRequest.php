<?php

namespace App\Http\Requests\Leads;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:45',
            'email' => 'nullable|email|max:45',
            'telefone' => 'nullable|string|max:45',
            'usuario_atribuido' => 'nullable|integer',
            'lead_ganho' => 'nullable|boolean',
            'interesses' => 'nullable|string|max:45',
            'anotacoes' => 'nullable|string',
            'id_cliente' => 'nullable|integer',
            'id_origem' => 'required|integer|exists:origens,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.string' => 'O nome deve ser uma string.',
            'nome.max' => 'O nome deve ter no máximo 45 caracteres.',

            'email.email' => 'O e-mail deve ser um endereço válido.',
            'email.max' => 'O e-mail deve ter no máximo 45 caracteres.',

            'telefone.string' => 'O telefone deve ser uma string.',
            'telefone.max' => 'O telefone deve ter no máximo 45 caracteres.',

            'usuario_atribuido.integer' => 'O usuário atribuído deve ser um número inteiro.',

            'lead_ganho.boolean' => 'O campo lead ganho deve ser verdadeiro ou falso.',

            'interesses.string' => 'Os interesses devem ser uma string.',
            'interesses.max' => 'Os interesses devem ter no máximo 45 caracteres.',

            'anotacoes.string' => 'As anotações devem ser um texto válido.',

            'id_cliente.integer' => 'O ID do cliente deve ser um número inteiro.',

            'id_origem.required' => 'O ID da origem é obrigatório.',
            'id_origem.integer' => 'O ID da origem deve ser um número inteiro.',
            'id_origem.exists' => 'A origem informada não existe.',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Erro de validação.',
            'errors' => $validator->errors()
        ], 422));
    }
}