<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStudent;
use App\Models\Course;
use App\Models\FinancialPlan;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        return view('student.index', compact('students'));
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
        return view('student.create', compact('courses', 'financialPlans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StoreUpdateStudent  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateStudent $request)
    {
        DB::beginTransaction();
        try{
            $student = new Student();
            $student = $student->createStudent($request);
            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();
            Log::channel('single')->warning('Falha na criação do aluno', [$e]);
            return redirect()->back()->with('message');
        }
        
        return redirect()->route('alunos.index')->with('message',"O aluno $request->fullname foi criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::where('id', $id)->with('user')->with('course')->with('financialPlan')->first();
        $lessons = Lesson::where('course_id', $student->course_id)->get();
        return view('student.show', compact('student', 'lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $user = User::find($student->user_id);
        $courses = Course::all();
        $financialPlans = FinancialPlan::all();
        return view('student.update', compact('student', 'user', 'courses', 'financialPlans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StoreUpdateStudent  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateStudent $request, $id)
    {
        DB::beginTransaction();
        try{
            $student = new Student();
            $student = $student->updateStudent($request, $id);        
            DB::commit();
            return redirect()->route('alunos.index')->with('message', "Aluno {$request->fullname} atualizado com sucesso!");
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());            
        }                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        if($student){
            return redirect()->route('student.index')->with('message', "Aluno {$id} excluído com sucesso!");
        }
    }

    public function profile(){
        $user_id = Auth::id();
        $student = Student::where('user_id', $user_id)->with('user')->with('course')->with('financialPlan')->first();
        $lessons = Lesson::where('course_id', $student->course_id)->get();
        return view('student.profile-student', compact('student', 'lessons'));
    }
}
