@extends('layouts.layout')
@section('pageTitle', 'Planos Financeiros')
@section('body')
@include('layouts.alerts')
<a href={{route('planos-financeiro.create')}}> <button type="button" class="btn btn-primary">Adicionar Plano Financeiro</button></a><br><br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Desconto</th>
        <th scope="col">Observação</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($financialPlan as $planoFinanceiro)
    <tr>
        <td>{{ $planoFinanceiro->id }} </td>
        <td>{{ $planoFinanceiro->name }}</td>
        <td>{{ $planoFinanceiro->discount }} </td>
        <td>{{ $planoFinanceiro->observation }} </td>
        <td>
        <a href="{{route("planos-financeiro.show", $planoFinanceiro->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
        <a href="{{route("planos-financeiro.edit", $planoFinanceiro->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
        <form action="{{route('planos-financeiro.destroy', $planoFinanceiro->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
<div class="col-12 d-flex justify-content-center">
    {{ $financialPlan->links() }}
</div>
@endsection