<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\{ Lesson, Student };

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

    public function students_by_course($curso)
    {
        $students = Student::where('course_id', '=', $curso)->get();
        return response()->json($students);
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
            'lessons' => Lesson::where('course_id', $student->course_id)->get()
        ];
        return response()->json($result);
    }
}
