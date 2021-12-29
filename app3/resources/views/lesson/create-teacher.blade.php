@extends('layouts.layout')
@section('pageTitle', 'Aulas')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{route('aulas.storeByTeacher')}}">
    @csrf
    @include('lesson.form-teacher')
    <button type="submit" class="btn btn-primary">Cadastrar Aula</button>
</form>
<br>
<a href="{{route('aulas.index')}}" class="btn btn-secondary">Voltar</a>

@endsection