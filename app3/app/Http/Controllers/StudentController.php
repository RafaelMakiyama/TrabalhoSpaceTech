<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStudent;
use App\Models\Course;
use App\Models\FinancialPlan;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $birthday = \DateTime::createFromFormat('d/m/Y', $request->birthday);
        // $now = new \DateTime();
        // $age = $now->diff($birthday);
        // if($age->y < 18){
        //     if(($request->name == $request->financial_responsable)||($request->financial_responsable == null)){
        //         return redirect()->back()->with('error', 'O responsável financeiro deve ser diferente do aluno!');
        //     }
        // }else{
        //     if($request->financial_responsable == null){
        //         $request->financial_responsable = $request->name;
        //     }
        // }

        DB::beginTransaction();
        try{
            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->username.'123')            
            ]);

            $course = Course::find($request->course_id);
            $studentsInCurse = Student::where('course_id', '=' , $request->course_id)->count();
            // dd($studentsInCurse);
            if($course->quanties_max_students <= $studentsInCurse){
                return redirect()->back()->with('error', "Quantidade máxima de alunos no curso {$course->name} atingida!");
            }
        
            $student = Student::create([
                'registration' => $request->registration,
                'name' => $request->name,
                'birthday' => $request->birthday,
                'financial_responsable' => $request->financial_responsable,
                'cpf' => $request->cpf,
                'course_id' => $request->course_id,
                'financial_plan_id' => $request->financial_plan_id,
                'user_id' => $user->id
            ]);

            DB::commit();
            return redirect()->route('alunos.index')->with('message', "Aluno {$student->name} cadastrado com sucesso!");
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());            
        }            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id)->join('users', 'students.user_id', '=', 'users.id')->first();        
        // dd($student->toArray());
        $lessons = Lesson::where('course_id', $student->course_id)->get();
        $course = Course::find($student->course_id);
        $financialPlan = FinancialPlan::find($student->financial_plan_id);
        return view('alunos.show', compact('student', 'lessons', 'course', 'financialPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $student = Student::find($id)->join('users', 'students.user_id', '=', 'users.id')->first();        
        $student = Student::find($id);
        $user = User::find($student->user_id);
        $courses = Course::all();
        $financialPlans = FinancialPlan::all();
        return view('alunos.update', compact('student', 'user', 'courses', 'financialPlans'));
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
        $student = Student::find($id);
        $user = User::find($student->user_id);
        DB::beginTransaction();
        try{
            $user = $user->update([
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->username.'123')            
            ]);
            if($student->course_id != $request->course_id){
                $course = Course::find($request->course_id);
                $studentsInCurse = Student::where('course_id', $request->course_id)->count();
                if($course->quanties_max_students <= $studentsInCurse){
                    return redirect()->back()->with('error', "Quantidade máxima de alunos no curso {$course->name} atingida!");
                }
            }
            $student->update([
                'registration' => $request->registration,
                'name' => $request->name,
                'birthday' => $request->birthday,
                'financial_responsable' => $request->financial_responsable,
                'cpf' => $request->cpf,
                'course_id' => $request->course_id,
                'financial_plan_id' => $request->financial_plan_id
            ]);

            DB::commit();
            return redirect()->route('alunos.index')->with('message', "Aluno {$student->name} atualizado com sucesso!");
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
            return redirect()->route('alunos.index')->with('message', "Aluno {$id} excluído com sucesso!");
        }
    }
}
