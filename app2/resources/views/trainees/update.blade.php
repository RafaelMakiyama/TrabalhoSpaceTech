@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')

<form method="POST" action="{{ route('estagiarios.update', $trainee->id )}}">
    @method('PUT')
    @include('trainees.form')

    <button type="submit" class="btn btn-primary">Atualizar Estagiário</button>
  </form>
  <br>
  <a href="{{route('estagiarios.index')}}" class="btn btn-secondary">Voltar</a>
  @endsection
