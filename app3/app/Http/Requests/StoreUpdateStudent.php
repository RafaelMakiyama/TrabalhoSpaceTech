<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateStudent extends FormRequest
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
        $rules = [
            'name' => 'required|min:3|max:255',
            'registration' => 'required|string|max:45',
            'fullname' => 'required|string|max:45',
            'birthday' => 'required|date|age:financial_responsable,fullname',
            'financial_responsable' => 'required|string|max:45',
            'cpf' => 'required|string|max:15|cpf',
            'course_id' => 'required|integer',
            'financial_plan_id' => 'required|integer'
        ];

        switch($this->method())
        {
            case 'POST':
            {
                $rules_plus = [
                    'email' => 'required|email|unique:users,email'
                ];                
                return $rules = array_merge($rules, $rules_plus);
            }
            case 'PUT' : {
                $rules_plus = [
                    'email' => 'required|email|'.Rule::unique('users', 'email')->ignore($this->user_id),
                    'name' => 'required|name|'.Rule::unique('users', 'name')->ignore($this->user_id)
                ];
                return $rules = array_merge($rules, $rules_plus);
            }
            default:break;
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome de usuário é obrigatório',
            'name.min' => 'O campo nome de usuário deve ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome de usuário deve ter no máximo 255 caracteres',
            'name.unique' => 'O nome de usuário informado já está em uso',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O campo e-mail deve ser um e-mail válido',
            'email.max' => 'O campo e-mail deve ter no máximo 255 caracteres',
            'email.unique' => 'O e-mail informado já está cadastrado',
            'registration.required' => 'O campo matrícula é obrigatório.',
            'fullname.required' => 'O campo nome é obrigatório.',
            'fullname.max' => 'O campo nome deve ter no máximo 45 caracteres.',
            'birthday.required' => 'O campo data de nascimento é obrigatório.',
            'birthday.date' => 'O campo data de nascimento deve ser uma data válida.',
            'birthday.age' => 'Quando menor de 18, deve ser informado o Responsável Financeiro.',
            'financial_responsable.required' => 'O campo responsável financeiro é obrigatório.',
            'financial_responsable.string' => 'O campo responsável financeiro deve ser uma string.',
            'financial_responsable.max' => 'O campo responsável financeiro deve ter no máximo 45 caracteres.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.max' => 'O campo CPF deve ter no máximo 15 caracteres.',
            'cpf.cpf' => 'O campo CPF deve ser um CPF válido.',            
            'course_id.required' => 'O campo curso é obrigatório.',
            'financial_plan_id.required' => 'O campo plano financeiro é obrigatório.'
        ];
    }
}
