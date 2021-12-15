@extends('layouts.layout')
@section('pageTitle', 'Médicos')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('medicos.update', $doctor->id )}}">
  @method('PUT')
  @include('doctors.form')
  <button type="submit" class="btn btn-primary">Atualizar médico</button>
</form>
<br>
<a href="{{route('medicos.index')}}" class="btn btn-secondary">Voltar</a>
@endsection