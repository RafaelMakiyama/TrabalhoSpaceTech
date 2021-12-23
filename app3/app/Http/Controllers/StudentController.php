<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStudent;
use App\Models\Course;
use App\Models\FinancialPlan;
use App\Models\Lesson;
use App\Models\Student;
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
        $students = Student::paginate(8);
        return view('alunos.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $financialPlans = FinancialPlan::all();
        return view('alunos.create', compact('courses', 'financialPlans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StoreUpdateStudent  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateStudent $request)
    {
        $student = Student::create($request->all());
        if($student){
            return redirect()->route('alunos.index')->with('message', "Aluno {$student->name} cadastrado com sucesso!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $lessons = Lesson::where('course_id', $student->course_id)->get();
        $course = Course::find($student->course_id);
        $financialPlan = FinancialPlan::find($student->financial_plan_id);
        return view('alunos.show', compact('student', 'lessons', 'course', 'financialPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $courses = Course::all();
        $financialPlans = FinancialPlan::all();
        return view('alunos.update', compact('student', 'courses', 'financialPlans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StoreUpdateStudent  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateStudent $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        if($student){
            return redirect()->route('alunos.index')->with('message', "Aluno {$student->name} atualizado com sucesso!");
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        if($student){
            return redirect()->route('alunos.index')->with('message', "Aluno {$id} excluído com sucesso!");
        }
    }
}
