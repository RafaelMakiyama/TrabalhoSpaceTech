@extends('layouts.layout')
@section('pageTitle', 'Doações')
@section('body')
@include('layouts.alerts')


<form method="POST" action="{{ route('doacoes.store')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome do Doador</label>
      <input type="text" class="form-control" id="crm" name="donor_name" value="{{ old ('donor_name')}}" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Celular</label>
      <input type="text" class="form-control" name="cell" id="exampleInputPassword1" value="{{ old('cell') }}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Qntd Litros Doados</label>
        <input type="number" class="form-control" name="amnt_donor_liters" id="exampleInputPassword1" value="{{ old('amnt_donor_liters') }}" >
    </div>


    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

  @endsection
