<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentResourceCollection;
use App\Models\{ Lesson, Student };
use App\Repository\StudentRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function students_by_course(Request $request, $curso)
    {
        $students = new Student; 
        if($request->has('campos'))
        {
            $studentRepository = new StudentRepository($students);
            $students = $studentRepository->filterFields($request);
        }
        $students = $students->where('course_id', '=', $curso);
        return new StudentResourceCollection($students->paginate(10));
    }

    public function lessons_by_student($student)
    {
        $student = Student::where('id', $student)->with('course')->with('financialPlan')->first();
        $result = [
            'id' => $student->id,
            'fullname' => $student->fullname,
            'course' => $student->course->name,
            'financialPlan' => $student->financialPlan->name,
            'monthly_value' => ($student->course->monthly-($student->course->monthly*$student->financialPlan->discount/100)),
            'lessons' => Lesson::where('course_id', $student->course_id)->paginate(10),
            'extra_information' => "Essa API não está em produção, é apenas de homologação e testes"
        ];
        return response()->json($result);
    }
}
