<?php

namespace App\Http\Controllers;

use App\Http\Requests\BloodBankRequest;
use App\Models\BloodBank;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodBank = BloodBank::all();
        return view('bloodbank.index', compact('bloodBank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bloodbank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BloodBankRequest $request)
    {
        $bloodBank = BloodBank::create($request->all());
        return redirect()->route('banco-de-sangue.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloodBank = BloodBank::find($id);
        return view('bloodbank.update', compact('bloodBank'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BloodBankRequest $request, $id)
    {
        $bloodBank = BloodBank::find($id);
        
        if(!$bloodBank):
            return redirect()->back();
        endif;

        $bloodBank->update($request->all());
        return redirect()->route('banco-de-sangue.index')->with('message', "Banco de sangue  {$id} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloodBank = BloodBank::find($id);

        if(!$bloodBank):
            return redirect()->back();
        endif;

        $bloodBank->delete();
        return redirect()->route('banco-de-sangue.index')->with('message', "Banco de sangue {$id} deletado com sucesso");
    }
}
