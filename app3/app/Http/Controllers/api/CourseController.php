<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;

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

}
