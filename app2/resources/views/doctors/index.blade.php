@extends('layouts.layout')
@section('pageTitle', 'Médicos')
@include('menu.menu')
@section('body')

        <a href={{route('medicos.create')}}> <button type="button" class="btn btn-primary">Adicionar médico</button></a><br><br>
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
              <th scope="col">Ações</th>
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
              <td>
                <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
              <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>

@endsection