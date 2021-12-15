@extends('layouts.layout')
@section('pageTitle', 'Doadores')
@section('body')

<form method="POST" action="{{ route('doadores.update', $donor->id )}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nome</label>
      <input type="text" class="form-control" name="name" id="exampleInputPassword1" value={{ $donor->name }}>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Telefone</label>
      <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" value={{ $donor->telephone }} >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="exampleInputPassword1" value={{ $donor->email }}>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Peso</label>
      <input type="text" class="form-control" name="weight" id="exampleInputPassword1" value={{ $donor->weight }}>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Comentário</label>
      <input type="text" class="form-control" name="comments" id="exampleInputPassword1" value={{ $donor->comments }}>
    </div>

      

    <button type="submit" class="btn btn-primary">Atualizar médico</button>
  </form>

  @endsection