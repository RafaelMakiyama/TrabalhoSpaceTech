@extends('layouts.layout')
@section('pageTitle', 'Médicos')
@include('menu.menu')
@section('body')

<form method="POST" action="{{ route('medicos.store')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">CRM</label>
      <input type="text" class="form-control" id="crm" name="crm" value="{{ old ('crm')}}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nome</label>
      <input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{ old('name') }}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Área de atuação</label>
        <input type="text" class="form-control" name="work_ocupattion" id="exampleInputPassword1" value="{{ old('work_ocupattion') }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Idade</label>
        <input type="number" class="form-control" name="age" id="exampleInputPassword1" value="{{ old('age') }}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telephone" id="exampleInputPassword1" value="{{ old('telephone') }}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{ old('email') }}" >
    </div>
      

    <button type="submit" class="btn btn-primary">Cadastrar médico</button>
  </form>

  @endsection