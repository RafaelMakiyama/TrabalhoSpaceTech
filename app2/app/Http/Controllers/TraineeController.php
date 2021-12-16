<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertTraineeRequest;
use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = Trainee::all();
        return view('trainees.index', compact('trainees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertTraineeRequest $request)
    {
        $trainee = Trainee::create($request->all());
        return redirect()->route('estagiarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainee = Trainee::find($id);
        if($trainee) {
            return view('trainees.show', compact('trainee'));
        }
        return redirect()->back()->with('error', 'Paciente não encontrado!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainee = Trainee::find($id);
        return view('trainees.update', compact('trainee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trainee = Trainee::find($id);
        
        if(!$trainee):
            return redirect()->back();
        endif;

        $trainee->update($request->all());
        return redirect()->route('estagiarios.index')->with('message', "Estagiario {$id} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainee = Trainee::find($id);

        if(!$trainee):
            return redirect()->back();
        endif;

        $trainee->delete();
        return redirect()->route('estagiarios.index')->with('message', "Estagiario {$id} deletado com sucesso");
    }
}
