@extends('layouts.layout')
@section('pageTitle', 'Doações')
@section('body')
@include('layouts.alerts')


<form method="POST" action="{{ route('doacoes.update', $donation->id )}}">
    @method('PUT')
    @include('donation.form')
    <button type="submit" class="btn btn-primary">Atualizar Doação</button>

    <a href="{{route('doacoes.index')}}" class="btn btn-secondary">Voltar</a>

  </form>

  @endsection
