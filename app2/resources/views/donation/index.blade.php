@extends('layouts.layout')
@section('pageTitle', 'Doações')
@section('body')
@include('layouts.alerts')


        <a href={{route('doacoes.create')}}> <button type="button" class="btn btn-primary">Adicionar Doacao</button></a><br><br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome do Doador</th>
              <th scope="col">Celular</th>
              <th scope="col">Email</th>
              <th scope="col">Qntd de Litros Doados</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
              @foreach($donations as $donation)
            <tr>
              <td>{{ $donation->id }} </td>
              <td>{{ $donation->donor_name }}</td>
              <td>{{ $donation->cell }} </td>
              <td>{{ $donation->email }} </td>
              <td>{{ $donation->amnt_donor_liters }} </td>
              <td>
                  <a href="{{route("doacoes.show", $donation->id ) }}"><button type="submit" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
                <a href="{{route("doacoes.edit", $donation->id ) }}"><button type="submit" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
                <form action="{{route('doacoes.destroy', $donation->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                 </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>

@endsection
