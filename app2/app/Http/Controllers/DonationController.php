<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertDonationRequest;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donation::latest()->paginate(5);
        return view('donation.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertDonationRequest  $request)
    {
        $donation = Donation::create($request->all());
        return redirect()->route('doacoes.index')->with('message', "Doação {$donation->donor_name} cadastrado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation = Donation::find($id);
        if($donation) {
            return view('donation.show', compact('donation'));
        }
        return redirect()->back()->with('error', 'Doação não encontrado!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = Donation::find($id);
        return view('donation.update', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsertDonationRequest $request, $id)
    {
        $donation = Donation::find($id);

        if(!$donation):
            return redirect()->back();
        endif;

        $donation->update($request->all());
        return redirect()->route('doacoes.index')->with('message', "Doação {$donation->donor_name} atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = Donation::find($id);

        if(!$donation):
            return redirect()->back();
        endif;

        $donation->delete();
        return redirect()->route('doacoes.index')->with('message', "Doação {$donation->donor_name} deletado com sucesso");
    }
}
