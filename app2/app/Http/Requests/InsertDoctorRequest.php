<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertDoctorRequest extends FormRequest
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
            'crm' => 'required|min:2',
            'age'=> 'required|numeric|min:2',
            'work_ocupattion' => 'required|string|min:2',
            'telephone' => 'required|string|min:2|max:255',
            'email' => 'required|email|min:2|max:255'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O nome deve ter no mínimo 2 caracteres',            
            'crm.required' => 'O CRM é obrigatório',
            'crm.min' => 'O CRM deve ter no mínimo 2 caracteres',
            'age.required' => 'A idade é obrigatória',
            'age.numeric' => 'A idade deve ser um número',
            'work_ocupattion.required' => 'A área de atuação é obrigatória',
            'work_ocupattion.string' => 'A área de atuação deve ser uma string',
            'work_ocupattion.min' => 'A área de atuação deve ter no mínimo 2 caracteres',
            'telephone.required' => 'O telefone é obrigatório',
            'telephone.min' => 'O telefone deve ter no mínimo 2 caracteres',
            'telephone.max' => 'O telefone deve ter no máximo 255 caracteres',            
            'email.required' => 'O email é obrigatório',
            'email.min' => 'O email deve ter no mínimo 2 caracteres',
            'email.max' => 'O email deve ter no máximo 255 caracteres',
            'email.email' => 'O email deve ser válido'
        ];
    }

}
