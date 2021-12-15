@extends('layouts.layout')
@section('pageTitle', 'Pacientes - Inserindo')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('pacientes.store')}}">
    @include('patients.form')
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
<br>
<a href="{{route('pacientes.index')}}" class="btn btn-secondary">Voltar</a>
@endsection