<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Repository\TeacherRepository;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $model;

    public function __construct(Teacher $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $teachers = $this->model;
        $teacherRepository = new TeacherRepository($teachers);
        if($request->has('campos'))
        {
            $teachers = $teacherRepository->filterFields($request);
        }
                
        return response()->json($teachers->paginate(10));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        if(!$teacher){
            return response()->json(['message' => 'Professor nao encontrado'], 404);
        }
        return response()->json($teacher);
    }

}
