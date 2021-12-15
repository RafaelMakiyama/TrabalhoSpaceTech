<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertUpdatePatientRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'surname' => 'required|string|min:2|max:255',
            'age' => 'required|integer|min:1|',
            'address' => 'required|string|min:2|max:255',
            'telephone' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|min:2|max:255'
            // 'is_donor' => 'required|boolean'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nome é obrigatório',
            'name.min' => 'Nome deve ter no mínimo 2 caracteres',
            'name.max' => 'Nome deve ter no máximo 255 caracteres',
            'surname.required' => 'Sobrenome é obrigatório',
            'surname.min' => 'Sobrenome deve ter no mínimo 2 caracteres',
            'surname.max' => 'Sobrenome deve ter no máximo 255 caracteres',
            'age.required' => 'Idade é obrigatório',
            'age.min' => 'Idade deve ter no mínimo 1 caracteres',
            'address.required' => 'Endereço é obrigatório',
            'address.min' => 'Endereço deve ter no mínimo 2 caracteres',
            'address.max' => 'Endereço deve ter no máximo 255 caracteres',
            'telephone.required' => 'Telefone é obrigatório',
            'telephone.min' => 'Telefone deve ter no mínimo 2 caracteres',
            'telephone.max' => 'Telefone deve ter no máximo 255 caracteres',
            'email.required' => 'Email é obrigatório',
            'email.min' => 'Email deve ter no mínimo 2 caracteres',
            'email.max' => 'Email deve ter no máximo 255 caracteres',
            'email.email' => 'Email inválido',
            'is_donor.required' => 'É obrigatório informar se é doador',
            'is_donor.boolean' => 'É obrigatório informar se é doador'
        ];
    }
}
