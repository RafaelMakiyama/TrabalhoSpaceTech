<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class InsertTraineeRequest extends FormRequest
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
            'name' => 'required|min:2',
            'scholarity' => 'required|min:2',
            'telephone' => 'required|min:2',
            "email" => "required|email|min:2",
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O nome deve ter no mínimo 2 caracteres',
            'scholarity.required' => 'A escolaridade é obrigatória',
            'scholarity.min' => 'A escolaridade deve ter no mínimo 2 caracteres',
            'telephone.required' => 'O telefone é obrigatório',
            'telephone.min' => 'O telefone deve ter no mínimo 2 caracteres',
            'email.required' => 'o email é obrigatório',
            'email.min' => 'O email deve ter no mínimo 2 caracteres',
            'email.max' => 'O email deve ter no máximo 255 caracteres',
            'email.email' => 'O email deve ser válido',
        ];
    }
}
