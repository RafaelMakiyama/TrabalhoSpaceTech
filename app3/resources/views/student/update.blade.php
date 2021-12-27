@extends('layouts.layout')
@section('pageTitle', 'Alunos - Alterando')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('alunos.update', $student->id)}}">
    @method('PUT')
    @include('student.form')
    <button type="submit" class="btn btn-primary">Atualizar Aluno</button>
</form>
<br>
<a href="{{route('alunos.index')}}" class="btn btn-secondary">Voltar</a>
@endsection