@extends('layouts.layout')
@section('pageTitle', 'Banco de sangue')
@include('menu.menu')
@section('body')

<form method="POST" action="{{ route('banco-de-sangue.update', $bloodBank->id )}}">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tipo</label>
      <input type="text" class="form-control" id="type" name="type" value="{{ $bloodBank->type}}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Compatibilidade</label>
      <input type="text" class="form-control" name="compatibility" value="{{ $bloodBank->compatibility}}" >
    </div>
    <button type="submit" class="btn btn-primary">Atualizar banco de sangue</button>
</form>


  @endsection