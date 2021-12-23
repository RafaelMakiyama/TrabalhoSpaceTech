@extends('layouts.layout')
@section('pageTitle', 'Relatório de Doacão')
@section('body')
@include('layouts.alerts')
<h4>Doadores: {{$donorsTotal}}</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Peso</th>
            <th scope="col">Altura</th>
            <th scope="col">Fumante ?</th>
            <th scope="col">Doença</th>
            <th scope="col">Comentarios</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donors as $donor)
        <tr>
            <td>{{ $donor->id }} </td>
            <td>{{ $donor->name }} </td>
            <td>{{ $donor->telephone }} </td>
            <td>{{ $donor->email }} </td>
            <td>{{ $donor->weight }} </td>
            <td>{{ $donor->height }} </td>
            <td>{{ $donor->smoker ? 'Sim' : 'Não' }}</td>
            <td>{{ $donor->disease ? 'Sim' : 'Não' }}</td>
            <td>{{ $donor->comments }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="col-12 d-flex justify-content-center">
    {{ $donors->appends(['bloodBanks' => $bloodBanks->currentPage(), 'donations' => $donations->currentPage()])->links() }}
</div>

<br>

<h4>Bancos de sangue: {{$bloodBanksTotal}}</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TIPO</th>
            <th scope="col">COMPATIBILIDADE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bloodBanks as $bloodBank)
        <tr>
            <td>{{ $bloodBank->id }} </td>
            <td>{{ $bloodBank->type }} </td>
            <td>{{ $bloodBank->compatibility}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="col-12 d-flex justify-content-center">
    {{ $bloodBanks->appends(['donors' => $donors->currentPage(), 'donations' => $donations->currentPage()])->links(), }}
</div>
<br>

<h4>Doações: {{$donationsTotal}}</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME DOADOR</th>
            <th scope="col">CELULAR</th>
            <th scope="col">EMAIL</th>
            <th scope="col">Qt. LITROS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($donations as $donation)
        <tr>
            <td>{{ $donation->id }} </td>
            <td>{{ $donation->donor_name }} </td>
            <td>{{ $donation->cell}} </td>
            <td>{{ $donation->email}} </td>
            <td>{{ $donation->amnt_donor_liters}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="col-12 d-flex justify-content-center">
    {{ $donations->appends(['bloodBanks' => $bloodBanks->currentPage(),'donors' => $donors->currentPage()])->links() }}
</div>

<a href="{{route('relatorio.index')}}" class="btn btn-secondary">Voltar</a>
@endsection