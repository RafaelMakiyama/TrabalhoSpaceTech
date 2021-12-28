<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateStudent;
use App\Models\Student;
use Illuminate\Http\Request;
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
        $students = Student::all();
        return response()->json($students);
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
            return response()->json(['message' => 'Falha na criação do aluno'], 500);
        }

        return response()->json($student, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        if(!$student){
            return response()->json(['message' => 'Aluno nao encontrado'], 404);
        }
        return response()->json($student);
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
        }catch(\Exception $e){
            DB::rollback();
            Log::channel('single')->warning('Falha na atualização do aluno', [$e]);
            return response()->json(['message' => 'Falha na atualização do aluno'], 500);
        }          
        if($student){
            return response()->json(['message' => 'Aluno atualizado com sucesso'], 200);
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
        if(!$student){
            return response()->json(['message' => 'Aluno nao encontrado'], 404);
        }
        $student->delete();
        return response()->json(['message' => 'Aluno removido com sucesso'], 200);
    }
}
