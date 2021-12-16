@extends('layouts.layout')
@section('pageTitle', 'Doações')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('doacoes.store')}}">
    @include('donation.form')
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
<br>
<a href="{{route('doacoes.index')}}" class="btn btn-secondary">Voltar</a>
@endsection
