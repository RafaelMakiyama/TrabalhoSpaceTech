@extends('layouts.layout')
@section('pageTitle', 'Pacientes')
@section('body')
@include('layouts.alerts')
        <a href={{route('pacientes.create')}}> <button type="button" class="btn btn-primary">Adicionar Paciente</button></a><br><br>
        <table class="table table-bordered">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Idade</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">É Doador?</th>
                <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }} </td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->surname }} </td>
                <td>{{ $patient->age }} </td>
                <td>{{ $patient->address }} </td>
                <td>{{ $patient->telephone }} </td>
                <td>{{ $patient->email }} </td>
                <td>{{ $patient ?? ''->is_donor ? 'Sim' : 'Não' }}</td>
              <td>
                <a href="{{route("pacientes.show", $patient->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="{{route("pacientes.edit", $patient->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{route('pacientes.destroy', $patient->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                 </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        <div class="col-12 d-flex justify-content-center">
            {{ $patients->links() }}
        </div>
@endsection