<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertBloodBankRequest extends FormRequest
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
            'type' => 'required|min:2',
            'compatibility' => 'required|min:2'
        ];
    }

    public function messages(){
        return [
            'type.required'=> 'O campo tipo é obrigatório',
            'type.min' => 'O campo tipo deve ter no mínimo 2 caracteres',
            'compatibility.required' => 'O campo compatibilidade é obrigatório',
            'compatibility.min' => 'O campo compatibilidade deve ter no mínimo 2 caracteres'
        ];
    }
}
