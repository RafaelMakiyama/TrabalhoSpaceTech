@extends('layouts.layout')
@section('pageTitle', 'Cursos - Inserindo')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('cursos.store')}}">
    @include('courses.form')
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<br>
<a href="{{route('cursos.index')}}" class="btn btn-secondary">Voltar</a>
@endsection
