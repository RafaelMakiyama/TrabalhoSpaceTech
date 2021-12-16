@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')

<form method="POST" action="{{ route('estagiarios.update', $trainee->id )}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" value={{ $trainee->name }} >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Escolaridade</label>
      <input type="text" class="form-control" name="scholarity" id="exampleInputPassword1" value={{ $trainee->scholarity }} >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" value={{ $trainee->telephone }} >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value={{ $trainee->email }} >
    </div>
      

    <button type="submit" class="btn btn-primary">Atualizar estagiario</button>
  </form>
  <br>
  <a href="{{route('estagiarios.index')}}" class="btn btn-secondary">Voltar</a>

  @endsection