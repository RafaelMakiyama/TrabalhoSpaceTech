@extends('layouts.layout')
@section('pageTitle', 'Doadores')
@section('body')

<form method="POST" action="{{ route('doadores.update', $donor->id )}}">
    @method('PUT')
    @include('donors.form')

      

    <button type="submit" class="btn btn-primary">Atualizar Doador</button>
  </form>

  <br>
  <a href="{{route('doadores.index')}}" class="btn btn-secondary">Voltar</a>

  @endsection