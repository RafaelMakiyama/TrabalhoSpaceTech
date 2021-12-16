@extends('layouts.layout')
@section('pageTitle', 'Doação - '.$donation->donor_name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$donation->donor_name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome Doador:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$donation->donor_name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Telefone:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$donation->cell}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Email:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$donation->email}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Qtd de Litros Doado:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$donation->amnt_donor_liters}}</h5>
            </div>
        </div>
      <br>
      <a href="{{route('doacoes.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection
