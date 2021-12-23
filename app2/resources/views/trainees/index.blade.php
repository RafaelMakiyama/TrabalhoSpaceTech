@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')
@include('layouts.alerts')

        <a href={{route('estagiarios.create')}}> <button type="button" class="btn btn-primary">Adicionar Estagiário</button></a><br><br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Grau de Escolaridade</th>
              <th scope="col">Telefone</th>
              <th scope="col">Email</th>
              <th scope="col">Ações</th>
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
              <td>
              <a href="{{route("estagiarios.show", $trainee->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="{{route("estagiarios.edit", $trainee->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{route('estagiarios.destroy', $trainee->id)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                 </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        <div class="col-12 d-flex justify-content-center">
            {{ $trainees->links() }}
        </div>

@endsection
