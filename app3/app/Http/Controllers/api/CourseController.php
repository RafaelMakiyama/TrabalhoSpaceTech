<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Repository\CourseRepository;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $model;

    public function __construct(Course $model)
    {
        $this->model = $model;
    }
    
    public function courses_status(Request $request, $status)
    {
        $courses = $this->model;
        if($request->has('campos'))
        {
            $courseRepository = new CourseRepository($courses);
            $courses = $courseRepository->filterFields($request);
        }
        if($status=='Ativado')
            $courses = $courses->where('status', '=', 'Ativado')->get();
        else if($status=='Desativado')
            $courses = $courses->where('status', '=', 'Desativado')->get();
        else
            return response()->json(['message' => 'Status nao encontrado'], 404);
        return response()->json($courses);
    }

}
