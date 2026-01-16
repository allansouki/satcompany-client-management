<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
    public function rules()
{
    return [
        'name'          => 'required|string|max:255',
        'cpf'           => 'required|string|size:11|unique:clients,cpf',
        'email'         => 'required|email|unique:clients,email',
        'phone'         => 'required|string|max:20',
        'cep'           => 'required|string|size:8',
        'street'        => 'required|string|max:255',
        'neighborhood'  => 'required|string|max:255',
        'number'        => 'required|string|max:10',
        'complement'    => 'nullable|string|max:255',
        'city'          => 'required|string|max:255',
        'state'         => 'required|string|size:2',
        'status'        => 'required|in:ativo,inativo',
    ];
}

}
