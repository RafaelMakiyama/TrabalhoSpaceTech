<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    public function courses_status($status)
    {
        if($status=='Ativado')
            $courses = Course::where('status', '=', 'Ativado')->get();
        else if($status=='Desativado')
            $courses = Course::where('status', '=', 'Desativado')->get();
        else
            return response()->json(['message' => 'Status nao encontrado'], 404);
        return response()->json($courses);
    }

    public function courses_students($curso)
    {
        $course = Course::find($curso);
        if(!$course){
            return response()->json(['message' => 'Curso nao encontrado'], 404);
        }
        $students = Student::where('course_id', '=', $curso)->get();
        return response()->json($students);
    }
}
