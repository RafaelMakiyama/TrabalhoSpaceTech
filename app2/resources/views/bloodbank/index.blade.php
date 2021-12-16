@extends('layouts.layout')
@section('pageTitle', 'Banco de sangue')
@section('body')
@include('layouts.alerts')

        <a href={{route('banco-de-sangue.create')}}> <button type="button" class="btn btn-primary">Adicionar banco de sangue</button></a><br><br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tipo</th>
              <th scope="col">Compatibilidade</th>
            </tr>
          </thead>
          <tbody>
              @foreach($bloodBank as $blood)
            <tr>
              <td>{{ $blood->id }} </td>
              <td>{{ $blood->type }}</td>
              <td>{{ $blood->compatibility }} </td>
              <td>
                <a href="{{route("banco-de-sangue.show", $blood->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="{{route('banco-de-sangue.edit', $blood->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{ route('banco-de-sangue.destroy', $blood->id) }}" method="POST">
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