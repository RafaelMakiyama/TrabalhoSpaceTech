<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertDonationRequest extends FormRequest
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
            "donor_name"        => "required|min:2",
            "cell"              => "required|min:2",
            "email"             => "required|min:2|email",
            "amnt_donor_liters" => "required|numeric|min:2",
        ];
    }

    public function messages(){
        return [
            'donor_name.required' => 'O nome é obrigatório',
            'donor_name.min' => 'O nome deve ter no mínimo 2 caracteres',
            'cell.required' => 'O telefone é obrigatório',
            'cell.min' => 'O telefone deve ter no mínimo 2 caracteres',
            'email.required' => 'A email é obrigatória',
            'email.min' => 'A email deve ter no mínimo 2 caracteres',
            'email.max' => 'O email deve ter no máximo 255 caracteres',
            'email.email' => 'O email deve ser válido',
            'amnt_donor_liters.required' => 'A quantidade de litros é obrigatória',
            'amnt_donor_liters.numeric' => 'A quantidade de litros deve ser um número',
            'amnt_donor_liters.min' => 'A quantidade de litros deve ter no mínimo 2 caracteres'
        ];
    }
}
