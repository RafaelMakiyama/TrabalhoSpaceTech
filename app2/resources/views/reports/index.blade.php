@extends('layouts.layout')
@section('pageTitle', 'Relatórios')
@section('body')
    <a href="{{route('relatorio.administrativo')}}"><button type="button" class="btn btn-primary">Relatório Administrativo</button></a>
    <br><br>
    <a href="{{route('relatorio.doacao')}}"><button type="button" class="btn btn-primary">Relatório de Doações</button></a>
@endsection
