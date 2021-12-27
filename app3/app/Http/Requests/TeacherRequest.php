<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return booly
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
            'fullname' => 'required|min:5|max:60',
            'registration'=>'required',
            'competence'=> 'required|min:2|max:30',
            'scholarity' => 'required|min:5:max:30'
        ];


        switch($this->method())
        {
            case 'POST':
            {
              
                 $rules2 =  [
                    'email' => 'required|email|unique:users,email',
                    'name' =>'required|unique:users,name'
                ];

                return $rules = array_merge($rules, $rules2);
            }
            case 'PUT' : 
            {

                $rules2 = [
                    'email' => 'required|email|'.Rule::unique('users', 'email')->ignore($this->user_id),
                    'name' => 'required|min:3|max:255|' .Rule::unique('users', 'name')->ignore($this->name) ];

                 $rules = array_merge($rules, $rules2);
                 return $rules;
            }             

            default:break;
        }

        return $rules;
    }

    public function messages(){

        return [
            'name.required' => 'O campo nome de usuário é obrigatório',
            'name.unique' => 'O nome de usuário já existe',
            'name.min' => 'O campo nome de usuário deve ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome de usuário deve ter no máximo 255 caracteres',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O campo e-mail deve ser um e-mail válido',
            'email.max' => 'O campo e-mail deve ter no máximo 255 caracteres',
            'email.unique' => 'O e-mail informado já está cadastrado',
            'registration.required' => 'O campo matrícula é obrigatório.',
            'fullname.required' => 'O campo nome é obrigatório.',
            'fullname.max' => 'O campo nome deve ter no máximo 45 caracteres.',
            'competence.required'=> 'O campo competência é obrigatório',
            'competence.min'=> 'O campo competencência deve ter no  mínimo 3 caracteres',
            'competence.max' => 'O campo competencência deve ter no  máximo 30 caracteres',
            'scholarity.required'=> 'O campo escolaridade é obrigatório',
            'scholarity.min'=> 'O campo escolaridade deve ter no  mínimo 5 caracteres',
            'scholarity.max' => 'O campo escolaridade deve ter no  máximo 50 caracteres'
        ];
    }
}
