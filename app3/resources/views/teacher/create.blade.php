@extends('layouts.layout')
@section('pageTitle', 'Professor')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('professor.store')}}">
    @csrf
    @include('teacher.user')
    @include('teacher.form')
    <button type="submit" class="btn btn-primary">Cadastrar professor</button>
</form>
<br>
<a href="{{route('professor.index')}}" class="btn btn-secondary">Voltar</a>

@endsection