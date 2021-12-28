@extends('layouts.layout')
@section('pageTitle', 'Cursos - '.$course->name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$course->name.' '.$course->name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$course->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Qntd Máxima de Cursos:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$course->quantities_max_students}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Descrição:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$course->description}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Categoria:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$course->category}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Mensal:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$course->monthly}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Status:</p>
            </div>
            <div class="col">
                <h5 class="card-title">{{$course->status}}</h5>
            </div>
        </div>

         <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Número</th>
                        <th scope="col">Duração</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->id }} </td>
                            <td>{{ $lesson->theme }}</td>
                            <td>{{ $lesson->num_lesson }} </td>
                            <td>{{ $lesson->duration }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      <br>
      <a href="{{route('cursos.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection
