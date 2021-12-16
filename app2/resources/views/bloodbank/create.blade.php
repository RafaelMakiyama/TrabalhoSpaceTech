@extends('layouts.layout')
@section('pageTitle', 'Banco de sangue')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('banco-de-sangue.store')}}">
    @csrf
    @include('bloodbank.form')
    <button type="submit" class="btn btn-primary">Cadastrar banco de sangue</button>

  </form>

  @endsection