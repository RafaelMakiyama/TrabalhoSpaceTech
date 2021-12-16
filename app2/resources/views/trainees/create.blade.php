@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('estagiarios.store')}}">
@include('trainees.form')
    <button type="submit" class="btn btn-primary">Cadastrar Estagiário</button>
  </form>
  <br>
  <a href="{{route('estagiarios.index')}}" class="btn btn-secondary">Voltar</a>
@endsection
