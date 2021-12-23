<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'registration' => 'required|string|max:45',
            'name' => 'required|string|max:45',
            'birthday' => 'required|date',
            'financial_responsable' => 'required|string|max:45',
            'cpf' => 'required|string|max:15|cpf',
            'course_id' => 'required|integer',
            'financial_plan_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'registration.required' => 'O campo matrícula é obrigatório.',
            'name.required' => 'O campo nome é obrigatório.',
            'name.max' => 'O campo nome deve ter no máximo 45 caracteres.',
            'birthday.required' => 'O campo data de nascimento é obrigatório.',
            'birthday.date' => 'O campo data de nascimento deve ser uma data válida.',
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
