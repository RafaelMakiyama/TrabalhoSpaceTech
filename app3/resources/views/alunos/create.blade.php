@extends('layouts.layout')
@section('pageTitle', 'Alunos - Inserindo')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('alunos.store')}}">
    @include('alunos.form')
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<br>
<a href="{{route('alunos.index')}}" class="btn btn-secondary">Voltar</a>
@endsection