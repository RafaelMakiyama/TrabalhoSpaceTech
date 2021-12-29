<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResourceCollection;
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
            $courses = $courses->where('status', '=', 'Ativado');
        else if($status=='Desativado')
            $courses = $courses->where('status', '=', 'Desativado');
        else
            return response()->json(['message' => 'Status nao encontrado'], 404);
        
        return new CourseResourceCollection($courses->paginate(10));
    }

}
