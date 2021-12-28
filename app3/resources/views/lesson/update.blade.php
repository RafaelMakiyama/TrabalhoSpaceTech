@extends('layouts.layout')
@section('pageTitle', 'Aulas')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('aulas.update', $lesson->id )}}">
  @method('PUT')
  @csrf
  @include('lesson.form')
  <button type="submit" class="btn btn-primary">Atualizar aula</button>
</form>
<br>
<a href="{{route('aulas.index')}}" class="btn btn-secondary">Voltar</a>
@endsection