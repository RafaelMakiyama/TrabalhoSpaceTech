@extends('layouts.layout')
@section('pageTitle', 'Estagiarios - '.$trainee->name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$trainee->name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$trainee->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Escolaridade:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$trainee->scholarity}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <p class="card-text">Telefone:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$trainee->telephone}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <p class="card-text">Email:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$trainee->email}}</h5>
            </div>
        </div>

      <br>
      <a href="{{route('estagiarios.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection