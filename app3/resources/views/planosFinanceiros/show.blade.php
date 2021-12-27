@extends('layouts.layout')
@section('pageTitle', 'Planos Financeiros - '.$financialPlan->name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$financialPlan->name.' '.$financialPlan->name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$financialPlan->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Desconto:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$financialPlan->discount}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Observação:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$financialPlan->observation}}</h5>
            </div>
        </div>     
      <br>
      <a href="{{route('planos-financeiro.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection