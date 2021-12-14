@extends('layouts.layout')
@section('pageTitle', 'Banco de sangue')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('banco-de-sangue.store')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ old ('type')}}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Compatibilidade</label>
      <input type="text" class="form-control" name="compatibility" value="{{ old('compatibility') }}" >
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar banco de sangue</button>

  </form>

  @endsection