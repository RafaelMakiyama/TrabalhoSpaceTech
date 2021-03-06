<?php

namespace App\Http\Controllers;


use App\Http\Requests\InsertDonorRequest;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donor::latest()->paginate(5);
        return view('donors.index', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertDonorRequest  $request)
    {
        $donor = Donor::create($request->all());
        return redirect()->route('doadores.index')->with('message', "Doador {$donor->name} cadastrado com sucesso!");;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = Donor::find($id);

        if(!$donor):
            return redirect()->back();
        endif;

        return view('donors.show', compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = Donor::find($id);
        return view('donors.update', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertDonorRequest $request, $id)
    {
        $donor = Donor::find($id);

        if(!$donor):
            return redirect()->back();
        endif;

        $donor->update($request->all());
        return redirect()->route('doadores.index')->with('message', "Doador {$donor->name} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::find($id);

        if(!$donor):
            return redirect()->back();
        endif;

        $donor->delete();
        return redirect()->route('doadores.index')->with('message', "Doador {$donor->name} deletado com sucesso");
    }
}
