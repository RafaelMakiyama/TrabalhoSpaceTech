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
        // dd($this->user_id);
        $rules = [
            'username' => 'required|min:3|max:255',
            // 'email' => 'required|email|max:255|unique:users,email',
            // 'email' => 'required|email|unique:users,email' . ($exists ? ',' . $user->id : ''),
            'registration' => 'required|string|max:45',
            'name' => 'required|string|max:45',
            'birthday' => 'required|date|age:financial_responsable,name',
            // 'financial_responsable' => 'required|string|max:45',
            'cpf' => 'required|string|max:15|cpf',
            'course_id' => 'required|integer',
            'financial_plan_id' => 'required|integer'
        ];

        switch($this->method())
        {
            case 'POST':
            {
                return $rules[] =  ['email' => 'required|email|unique:users,email'];
            }
            case 'PUT' : {
                // dd($this->user_id);
                return $rules[] = ['email' => 'required|email|'.Rule::unique('users', 'email')->ignore($this->user_id),];
                // dd($rules);
            }
            default:break;
        }
        // dd($this->method);
        return $rules;
    }

    public function messages()
    {
        return [
            'username.required' => 'O campo nome de usuário é obrigatório',
            'username.min' => 'O campo nome de usuário deve ter no mínimo 3 caracteres',
            'username.max' => 'O campo nome de usuário deve ter no máximo 255 caracteres',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O campo e-mail deve ser um e-mail válido',
            'email.max' => 'O campo e-mail deve ter no máximo 255 caracteres',
            'email.unique' => 'O e-mail informado já está cadastrado',
            'registration.required' => 'O campo matrícula é obrigatório.',
            'name.required' => 'O campo nome é obrigatório.',
            'name.max' => 'O campo nome deve ter no máximo 45 caracteres.',
            'birthday.required' => 'O campo data de nascimento é obrigatório.',
            'birthday.date' => 'O campo data de nascimento deve ser uma data válida.',
            'birthday.age' => 'Quando menor de 18, deve ser informado o Responsável Financeiro.',
            // 'financial_responsable.required' => 'O campo responsável financeiro é obrigatório.',
            // 'financial_responsable.string' => 'O campo responsável financeiro deve ser uma string.',
            // 'financial_responsable.max' => 'O campo responsável financeiro deve ter no máximo 45 caracteres.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.max' => 'O campo CPF deve ter no máximo 15 caracteres.',
            'cpf.cpf' => 'O campo CPF deve ser um CPF válido.',            
            'course_id.required' => 'O campo curso é obrigatório.',
            'financial_plan_id.required' => 'O campo plano financeiro é obrigatório.'
        ];
    }
}
