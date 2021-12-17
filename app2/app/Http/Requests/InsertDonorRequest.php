<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertDonorRequest extends FormRequest
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
            'name' => 'required|string|min:2',
            'telephone' => 'required|min:2',
            'email' => 'required|unique:donors,email|min:2|email',
            'weight' => 'required|string|min:2',
            'height' => 'required|string|min:2',
            'smoker' => 'required|boolean',
            'disease' => 'required|boolean',
            'comments' => 'required|string|min:2'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O nome é obrigatório',
            'name.min' => 'O nome deve ter no mínimo 2 caracteres',
            'telephone.required' => 'O telefone é obrigatório',
            'telephone.min' => 'O telefone deve ter no mínimo 2 caracteres',
            'email.min' => 'O email deve ter no mínimo 2 caracteres',
            'email.max' => 'O email deve ter no máximo 255 caracteres',
            'email.email' => 'O email deve ser válido',
            'email.unique' => 'Email já cadastrado!',
            'weight.required' => 'O peso é obrigatório',
            'weight.min' => 'O peso deve ter no mínimo 2 caracteres',
            'height.required' => 'A altura é obrigatória',
            'height.min' => 'A altura deve ter no mínimo 2 caracteres',
            'smoker.required' => 'O campo fumante deve ser preenchido',
            'smoker.bol' => 'O campo fumante deve ser preenchido',
            'disease.required' => 'O campo doença deve ser preenchido',
            'disease.bol' => 'O campo doença deve ser preenchido',
            'comments.required' => 'Os comentários devem ser preenchidos',
            'comments.min' => 'Os comentários devem ter no mínimo 2 caracteres'
        ];
    }


}
