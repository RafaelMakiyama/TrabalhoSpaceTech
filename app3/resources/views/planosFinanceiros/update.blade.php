@extends('layouts.layout')
@section('pageTitle', 'Planos Financeiros - Alterando')
@section('body')
@include('layouts.alerts')

<form method="POST" action="{{ route('planos-financeiro.update', $financialPlan->id)}}">
    @method('PUT')
    @include('planosFinanceiros.form')
    <button type="submit" class="btn btn-primary">Atualizar Plano Financeiro</button>
</form>
<br>
<a href="{{route('planos-financeiro.index')}}" class="btn btn-secondary">Voltar</a>
@endsection