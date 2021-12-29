<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            "name"                    => "required|min:2",
            "quantities_max_students" => "required|numeric",
            "description"             => "required|min:2",
            "category"                => "required|min:2",
            "monthly"                 => "required|numeric",
        ];
    }

    public function messages(){
        return [
            "name.required"                     => "O campo nome é obrigatório!",
            "name.min:2"                        => "Nome deve ter no mínimo 2 caracteres!",
            "quantities_max_students.required"  => "O campo quantidade máxima de estudante é obrigatório!",
            "quantities_max_students.numeric"   => "Quantidade deve ser um número!",
            "description.required"              => "O campo descrição é obrigatório!",
            "description.min:2"                 => "Descrição deve ter no mínimo 2 caracteres!",
            "category.required"                 => "O campo categoria é obrigatório",
            "category.min:2"                    => "Categoria deve ter no mínimo 2 caracteres!",
            "monthly.required"                  => "O campo mensalidade é obrigatório!",
            "monthly.numeric"                   => "Mensal deve ser um número!",
        ];
    }
}
