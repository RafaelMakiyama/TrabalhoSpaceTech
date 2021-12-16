@extends('layouts.layout')
@section('pageTitle', 'Pacientes - Alterando')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('pacientes.update', $patient->id)}}">
    @method('PUT')
    @include('patients.form')
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
<br>
<a href="{{route('pacientes.index')}}" class="btn btn-secondary">Voltar</a>
@endsection