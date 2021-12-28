@extends('layouts.layout')
@section('pageTitle', 'Aulas - '.$lesson->theme)
@section('body')
<div class="card">
    <div class="card-header">
      {{$lesson->theme}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Tema:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$lesson->theme}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Duração:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$lesson->duration}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <p class="card-text">OBSl:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$lesson->obs}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <p class="card-text">Professor:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$lesson->teacher->fullname}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <p class="card-text">Curso:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$lesson->course->name}}</h5>
            </div>
        </div>

      <br>
      <a href="{{route('aulas.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection