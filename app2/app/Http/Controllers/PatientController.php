<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertUpdatePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::latest()->paginate(5);
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\InsertUpdatePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertUpdatePatientRequest $request)
    {
        $patient = Patient::create($request->all());
        if ($patient) {
            return redirect()->route('pacientes.index')->with('message', "Paciente {$patient->name} cadastrado com sucesso!");
        }
        return redirect()->back()->with('error', 'Erro ao cadastrar paciente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        if($patient) {
            return view('patients.show', compact('patient'));
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
        $patient = Patient::find($id);
        if($patient) {
            return view('patients.update', compact('patient'));
        }
        return redirect()->back()->with('error', 'Paciente não encontrado!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\InsertUpdatePatientRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertUpdatePatientRequest $request, $id)
    {
        $patient = Patient::find($id);
        if($patient) {
            $patient->update($request->all());
            return redirect()->route('pacientes.index')->with('message', "Paciente {$patient->name} atualizado com sucesso!");
        }
        return redirect()->back()->with('error', 'Erro ao atualizar paciente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        if($patient) {
            $patient->delete();
            return redirect()->route('pacientes.index')->with('message', "Paciente {$patient->name} excluído com sucesso!");
        }
        return redirect()->back()->with('error', 'Erro ao excluir paciente!');
    }
}
