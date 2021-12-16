@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('estagiarios.store')}}">
@include('trainees.form')
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

@endsection
