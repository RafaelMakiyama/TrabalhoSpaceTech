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
                    'email' => 'required|email|unique:users,email',
                    'name' => 'required|min:3|max:255'
                ];                
                return $rules = array_merge($rules, $rules_plus);
            }
            case 'PUT' : {
                $rules_plus = [
                    'email' => 'required|email|'.Rule::unique('users', 'email')->ignore($this->user_id),
                    'name' => 'required|string|'.Rule::unique('users', 'name')->ignore($this->user_id)
                ];
                return $rules = array_merge($rules, $rules_plus);
            }
            default:break;
        }
        return $rules;
    }

    public function prepareForValidation()
    {
        $birthday = \DateTime::createFromFormat('Y-m-d', $this->birthday);        
        $now = new \DateTime();
        $age = $now->diff($birthday);
        if(($age->y > 18)&&($this->financial_responsable == null)){
            $this->merge([
                'financial_responsable' => $this->fullname
            ]);
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome de usu??rio ?? obrigat??rio',
            'name.min' => 'O campo nome de usu??rio deve ter no m??nimo 3 caracteres',
            'name.max' => 'O campo nome de usu??rio deve ter no m??ximo 255 caracteres',
            'name.unique' => 'O nome de usu??rio informado j?? est?? em uso',
            'email.required' => 'O campo e-mail ?? obrigat??rio',
            'email.email' => 'O campo e-mail deve ser um e-mail v??lido',
            'email.max' => 'O campo e-mail deve ter no m??ximo 255 caracteres',
            'email.unique' => 'O e-mail informado j?? est?? cadastrado',
            'registration.required' => 'O campo matr??cula ?? obrigat??rio.',
            'fullname.required' => 'O campo nome ?? obrigat??rio.',
            'fullname.max' => 'O campo nome deve ter no m??ximo 45 caracteres.',
            'birthday.required' => 'O campo data de nascimento ?? obrigat??rio.',
            'birthday.date' => 'O campo data de nascimento deve ser uma data v??lida.',
            'birthday.age' => 'Quando menor de idade, deve ser informado um Respons??vel Financeiro.',
            'financial_responsable.required' => 'O campo respons??vel financeiro ?? obrigat??rio.',
            'financial_responsable.string' => 'O campo respons??vel financeiro deve ser uma string.',
            'financial_responsable.max' => 'O campo respons??vel financeiro deve ter no m??ximo 45 caracteres.',
            'cpf.required' => 'O campo CPF ?? obrigat??rio.',
            'cpf.max' => 'O campo CPF deve ter no m??ximo 15 caracteres.',
            'cpf.cpf' => 'O campo CPF deve ser um CPF v??lido.',            
            'course_id.required' => 'O campo curso ?? obrigat??rio.',
            'financial_plan_id.required' => 'O campo plano financeiro ?? obrigat??rio.'
        ];
    }
}
