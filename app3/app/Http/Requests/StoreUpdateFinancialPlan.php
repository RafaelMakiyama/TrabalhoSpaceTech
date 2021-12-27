<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateFinancialPlan extends FormRequest
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
            'name' => 'required|string|max:45',
            'discount' => 'required|numeric|max:100',
            'observation' => 'required|string|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.max' => 'O campo nome deve ter no máximo 45 caracteres.',
            'discount.required' => 'O campo Desconto é obrigatório.',
            'discount.max' => 'O campo desconto não pode ser superior a 100%',
            'observation.required' => 'O campo Observação é obrigatório.',
            'observation.max' => 'O campo Oberservação deve ter no máximo 255 caracteres.'
        ];
    }
}
