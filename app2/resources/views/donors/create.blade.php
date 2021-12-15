@extends('layouts.layout')
@section('pageTitle', 'Doadores')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('doadores.store')}}">
    @include('donors.form')

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

  <br>
  <a href="{{route('doadores.index')}}" class="btn btn-secondary">Voltar</a>

@endsection