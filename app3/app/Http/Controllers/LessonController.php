<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRequest;
use App\Models\{Lesson, Teacher, Course};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::paginate(8);
        return view ('lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('lesson.create', compact('teachers', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LessonRequest $request)
    {
        // $lesson = Lesson::create($request->all());
        // return redirect()->route('aulas.index');

        DB::beginTransaction();        
        try{
            $lesson = new Lesson();
            $lesson = $lesson->cadastrarAulas($request);
            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();
            Log::channel('lesson')->warning('Falha na criação da aula', [$e]);
            return view('lesson.create')->with('message');
        }        
        return redirect()->route('aulas.index')->with('message',"A aula $lesson->num_lesson  foi criada com sucesso!");       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        if($lesson) {
            return view('lesson.show', compact('lesson'));
        }
        return redirect()->back()->with('error', 'Aula não encontrada!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.update', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        if(!$lesson){
            return redirect()->back();
        }
        $lesson->update($request->all());
        return redirect()->route('aulas.index')->with('message', "Aula numero {$lesson->num_lesson} atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        if(!$lesson){
            return redirect()->back();
        }
        $lesson->delete();
        return redirect()->route('aulas.index')->with('message', "Aula numero {$lesson->num_lesson} deletada com sucesso!");
    }
}
