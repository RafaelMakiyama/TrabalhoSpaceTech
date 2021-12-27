@extends('layouts.layout')
@section('pageTitle', 'Planos Financeiros - Inserindo')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('planos-financeiro.store')}}">
    @include('planosFinanceiros.form')
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<br>
<a href="{{route('planos-financeiro.index')}}" class="btn btn-secondary">Voltar</a>
@endsection