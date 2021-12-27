<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFinancialPlan;
use App\Models\FinancialPlan;
use Illuminate\Http\Request;

class FinancialPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financialPlan = FinancialPlan::paginate(8);
        return view('planosFinanceiros.index', compact('financialPlan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planosFinanceiros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StoreUpdateFinancialPlan  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFinancialPlan $request)
    {
        $financialPlan = financialPlan::create($request->all());
        if($financialPlan){
            return redirect()->route('planos-financeiro.index')->with('message', "Plano {$financialPlan->name} cadastrado com sucesso!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinancialPlan  $FinancialPlan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $financialPlan = FinancialPlan::find($id);
        return view('planosFinanceiros.show', compact('financialPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinancialPlan  $financialPlan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $financialPlan = FinancialPlan::find($id);
        return view('planosFinanceiros.update', compact('financialPlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StoreUpdateFinancialPlan  $request
     * @param  \App\Models\FinancialPlan  $financialPlan
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateFinancialPlan $request, $id)
    {
        $financialPlan = FinancialPlan::find($id);
        $financialPlan->update($request->all());
        if($financialPlan){
            return redirect()->route('planos-financeiro.index')->with('message', "Plano {$financialPlan->name} atualizado com sucesso!");
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialPlan  $financialPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financialPlan = FinancialPlan::find($id);
        $financialPlan->delete();
        if($financialPlan){
            return redirect()->route('planos-financeiro.index')->with('message', "Plano {$id} excluído com sucesso!");
        }
    }
}
