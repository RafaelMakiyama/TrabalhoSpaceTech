<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            "num_lesson"                    => "required|numeric",
            "theme"                    => "required",
            "duration"                    => "required",
            "obs"                    => "required",
            "teacher_id"                    => "required",
            "course_id"                    => "required"
        ];
    }

    public function messages(){
        return [
            "num_lesson.required"                   => "Campo 'Aula de numero' é obrigatório!",
            "theme.required"                        => "Campo 'Tema' é obrigatório!",
            "duration.required"                     => "Campo 'Duracão' é obrigatório!",
            "obs.required"                          => "Campo 'Observação' é obrigatório!",           
            "teacher_id.required"                   => "Selecione um  Professor!",
            "course_id.required"                   => "Selecione um Curso!",

        ];
    }
}
