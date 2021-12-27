@extends('layouts.layout')
@section('pageTitle', 'Professor - '.$teacher->fullname)
@section('body')
<div class="card">
    <div class="card-header">
      {{$teacher->fullname }}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome de usuário:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->user->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Email: <p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->user->email}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->fullname}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Matrícula:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->registration}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Competence:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->competence}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Escolaridade:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->scholarity}}</h5>
            </div>
        </div>
      
      <br>
      <a href="{{route('professor.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection