<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Http\Resources\LessonResourceCollection;
use App\Models\Course;
use App\Models\Lesson;
use App\Repository\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function __construct(Lesson $model)
    {
        $this->model = $model;
    }

    public function lesson_course(Request $request, $curso)
    {     
        $lessons = new Lesson;       
        if($request->has('campos')){
            $lessonsRepository = new LessonRepository($lessons);
            $lessons =$lessonsRepository->filterFields($request);
        }
        $lessons = $lessons->where("course_id", '=', $curso);
        return new LessonResourceCollection($lessons->paginate(10));

    }

    public function index(Request $request)
    {
        $lessons = $this->model;
        if($request->has('campos'))
        {
            $lessonsRepository = new LessonRepository($lessons);
            $lessons = $lessonsRepository->filterFields($request);
        }                
        return new LessonResourceCollection($lessons->paginate(10));
    }

}
