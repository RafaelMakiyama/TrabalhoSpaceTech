@extends('layouts.layout')
@section('pageTitle', 'Doadores')
@section('body')
@include('layouts.alerts')

        <a href={{route('doadores.create')}}> <button type="button" class="btn btn-primary">Adicionar Doadores</button></a><br><br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">CRM</th>
              <th scope="col">Telefone</th>
              <th scope="col">Email</th>
              <th scope="col">Peso</th>
              <th scope="col">Fumante</th>
              <th scope="col">Doenças</th>
              <th scope="col">Comentários</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach($donors as $donor)
            <tr>
              <td>{{ $donor->id }} </td>
              <td>{{ $donor->name }} </td>
              <td>{{ $donor->telephone }} </td>
              <td>{{ $donor->email }} </td>
              <td>{{ $donor->weight }}</td>
              <td>{{ $donor->smoker ? 'Sim' : 'Não' }}</td>
              <td>{{ $donor->disease ? 'Sim' : 'Não' }}</td>
              <td>{{ $donor->comments }} </td>
              <td>
                <a href="{{route("doadores.edit", $donor->id ) }}"><button type="submit" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <form action="{{route('doadores.destroy', $donor->id)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                 </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>

@endsection