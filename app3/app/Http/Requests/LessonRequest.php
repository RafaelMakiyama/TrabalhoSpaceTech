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
            "theme"                    => "required|min:2",
            "duration"                    => "required|min:2",
            "obs"                    => "required|min:2",
            "teacher_id"                    => "required",
            "course_id"                    => "required"
        ];
    }

    public function messages(){
        return [
            "num_lesson.required"                   => "Esse campo é obrigatório!",
            "num_lesson.min:2"                      => "Nome deve ter no mínimo 2 caracteres!",
            "theme.required"                        => "Esse campo é obrigatório!",
            "theme.min:2"                           => "Theme deve ter no mínimo 2 caracteres!",
            "duration.required"                     => "Esse campo é obrigatório",
            "obs.required"                          => "Esse campo é obrigatório!",
            "obs.min:2"                             => "obs deve ter no mínimo 2 caracteres!",            
            "teacher_id.required"                   => "Esse campo é obrigatório!",
            "teacher_id.required"                   => "Esse campo é obrigatório!",

        ];
    }
}
