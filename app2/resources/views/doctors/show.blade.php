@extends('layouts.layout')
@section('pageTitle', 'Médicos - '.$doctor->name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$doctor->name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$doctor->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">CRM:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$doctor->crm}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Área de atuação:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$doctor->work_ocupattion}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Idade:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$doctor->age}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Telefone:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$doctor->telephone}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Email:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$doctor->email}}</h5>
            </div>
        </div>        
      <br>
      <a href="{{route('medicos.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection