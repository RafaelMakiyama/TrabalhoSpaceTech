<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Repository\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    // public function lesson_course($course_id)
    // {     
    //     $course = Course::find($course_id);        
    //     if(!$course){
    //         return response()->json(['message' => 'Curso não existe'], 404); 
    //     }

    //     $lessons = Lesson::where('course_id', '=', $course_id)->get();        
    //     if(count($lessons) == 0 ){
    //         return response()->json(['message' => 'Não existe aulas para o curso'], 404);
    //     }
    //     return response()->json($lessons);
    // }

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
        $lessons = $lessons->where("course_id", '=', $curso)->get();
        return response()->json($lessons);

    }

    public function index(Request $request)
    {
        $lessons = $this->model;
        if($request->has('campos'))
        {
            $lessonsRepository = new LessonRepository($lessons);
            $lessons = $lessonsRepository->filterFields($request);
        }
                
        return response()->json($lessons->paginate(10));
    }

}
