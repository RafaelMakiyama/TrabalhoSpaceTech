@extends('layouts.layout')
@section('pageTitle', 'Relatório Administrativo')
@section('body')
@include('layouts.alerts')        
    <h4>Médicos: {{$doctors->count()}}</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CRM</th>
            <th scope="col">Nome</th>
            <th scope="col">Área de atuação</th>
            <th scope="col">Idade</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }} </td>
                <td>{{ $doctor->crm }}</td>
                <td>{{ $doctor->name }} </td>
                <td>{{ $doctor->work_ocupattion }} </td>
                <td>{{ $doctor->age }} </td>
                <td>{{ $doctor->telephone }} </td>
                <td>{{ $doctor->email }} </td>                
            </tr>
            @endforeach
        </tbody>
    </table>    
    <hr>
    <h4>Estagiários: {{$trainees->count()}}</h4>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Grau de Escolaridade</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach($trainees as $trainee)
          <tr>
            <td>{{ $trainee->id }} </td>
            <td>{{ $trainee->name }} </td>
            <td>{{ $trainee->scholarity}} </td>
            <td>{{ $trainee->telephone }} </td>
            <td>{{ $trainee->email }} </td>            
          </tr>
            @endforeach
        </tbody>
      </table>
      <br>
      <a href="{{route('relatorio.index')}}" class="btn btn-secondary">Voltar</a>
@endsection