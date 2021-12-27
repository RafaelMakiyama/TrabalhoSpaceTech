@extends('layouts.layout')
@section('pageTitle', 'Cursos - Alterando')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('cursos.update', $course->id)}}">
    @method('PUT')
    @include('courses.form')
    <button type="submit" class="btn btn-primary">Atualizar Curso</button>
</form>
<br>
<a href="{{route('cursos.index')}}" class="btn btn-secondary">Voltar</a>
@endsection
