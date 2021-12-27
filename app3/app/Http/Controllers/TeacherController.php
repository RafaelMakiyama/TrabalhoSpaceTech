<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use App\Models\User;
use App\Services\GenerateStandardPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::with('User')->paginate(8);
        return view ('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {   
        DB::beginTransaction();        
        try{
            $teacher = new Teacher();
            $teacher = $teacher->cadastrarProfessor($request);
            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();
            Log::channel('teacher')->warning('Falha na criação do professor', [$e]);
            return view('teacher.create')->with('message');
        }

        return redirect()->route('professor.index')->with('message',"O professor $teacher->name foi criado com sucesso!");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::where('id', $id)->with('user')->first();
        return view('teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::where('id', $id)->with('user')->first();
        return view('teacher.update', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        DB::beginTransaction();        
        try{
            $teacher = new Teacher();
            echo('aqui');
            $teacher = $teacher->updateTeacher($request);

            if(!$teacher):
                return redirect()->back();
            endif;

            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();
            Log::channel('teacher')->warning('Falha na atualização do professor', [$e]);
            return view('teacher.update')->with('message');
        }
        return redirect()->route('professor.index')->with('message', "Professor {$request->fullname} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);

        if(!$teacher):
            return redirect()->back();
        endif;

        $teacher->delete();
        return redirect()->route('professor.index')->with('message', "Professor {$teacher->name} deletado com sucesso");
    }
}
