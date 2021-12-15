@extends('layouts.layout')
@section('pageTitle', 'Pacientes - '.$patient->name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$patient->name.' '.$patient->surname}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$patient->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Sobrenome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$patient->surname}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Idade:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$patient->age}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Endereço:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$patient->address}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Telefone:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$patient->telephone}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Email:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$patient->email}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">É doador de sangue?</p>
            </div>
            <div class="col">                
                @if($patient->is_donor == 1)
                    <h5 class="card-title">Sim</h5>
                @else
                    <h5 class="card-title">Não</h5>
                @endif
            </div>
        </div>
      <br>
      <a href="{{route('pacientes.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection