@extends('layouts.layout')
@section('pageTitle', 'Estagiarios')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('estagiarios.store')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old ('name')}}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Escolaridade</label>
      <input type="text" class="form-control" name="scholarity" id="exampleInputPassword1" value="{{ old('scholarity') }}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" value="{{ old('telephone') }}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{ old('email') }}" >
    </div>
      

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

@endsection