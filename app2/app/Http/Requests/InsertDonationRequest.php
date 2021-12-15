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
            "donor_name"        => "required",
            "cell"              => "required",
            "email"             => "required",
            "amnt_donor_liters" => "numeric",
        ];
    }
}
