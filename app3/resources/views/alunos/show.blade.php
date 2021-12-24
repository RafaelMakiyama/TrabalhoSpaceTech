@extends('layouts.layout')
@section('pageTitle', 'Aluno - '.$student->fullname)
@section('body')
<div class="card">
    <div class="card-header">
      {{$student->fullname.' '.$student->surname}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$student->fullname}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Matrícula:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$student->registration}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Data de Nascimento:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$student->birthday}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Responsável Financeiro:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$student->financial_responsable}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">CPF:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$student->cpf}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Curso:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$course->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Plano:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$financialPlan->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Mensalidade:</p>
            </div>
            <div class="col">                
                @if($financialPlan->discount>0)
                <h5 class="card-title" style="display: inline;text-decoration:line-through;opacity:70%;">R$ {{$course->monthly}}</h5>
                <h5 class="card-title" style="display: inline"> / R$ {{$course->monthly*(1-$financialPlan->discount/100)}}</h5>
                <h6 class="card-title" style="display: inline">({{$financialPlan->discount}}% de Desconto)</h6> 
                @else
                <h5 class="card-title">{{$course->monthly}}</h5>
                @endif
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
                        <th scope="col">Ações</th>
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
      <a href="{{route('alunos.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection