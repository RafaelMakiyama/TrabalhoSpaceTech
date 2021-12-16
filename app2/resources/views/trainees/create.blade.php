@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('estagiarios.store')}}">

    

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

@endsection
