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
                <p class="card-text">Seu nome de usuário:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->user->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Seu Email: <p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$teacher->user->email}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Seu Nome:</p>
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
      
      <a href={{ route('criar.aula') }}> <button type="button" class="btn btn-primary">Adicionar
        Aula</button></a>
      <div class="row mt-5">
        <h4 class="card-text">Aulas ministradas</h4>
        <div class="col">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Número</th>
                    <th scope="col">Duração</th> 
                    <th scope="col">Nome do curso</th>                    
                </tr>
                </thead>
                <tbody>
                    @foreach($lessons as $lesson)
                    <tr>
                        <td>{{ $lesson->id }} </td>
                        <td>{{ $lesson->theme }}</td>
                        <td>{{ $lesson->num_lesson }} </td>
                        <td>{{ $lesson->duration }} </td> 
                        <td>{{ $lesson->course->name }}                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>   
      <a href="{{route('professor.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection