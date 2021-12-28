<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function lesson_course($course_id)
    {     
        $course = Course::find($course_id);        
        if(!$course){
            return response()->json(['message' => 'Curso não existe'], 404); 
        }

        $lessons = Lesson::where('course_id', '=', $course_id)->get();        
        if(count($lessons) == 0 ){
            return response()->json(['message' => 'Não existe aulas para o curso'], 404);
        }
        return response()->json($lessons);
    }

}
