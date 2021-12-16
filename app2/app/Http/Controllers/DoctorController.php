<?php

namespace App\Http\Controllers;


use App\Http\Requests\InsertDoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::latest()->paginate(5);
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertDoctorRequest  $request)
    {
        $doctor = Doctor::create($request->all());
        return redirect()->route('medicos.index')->with('message', "Médico {$doctor->name} cadastrado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor):
            return redirect()->back();
        endif;

        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.update', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertDoctorRequest $request, $id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor):
            return redirect()->back();
        endif;

        $doctor->update($request->all());
        return redirect()->route('medicos.index')->with('message', "Médico {$doctor->name} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor):
            return redirect()->back();
        endif;

        $doctor->delete();
        return redirect()->route('medicos.index')->with('message', "Médico {$doctor->id} deletado com sucesso");
    }
}
