@extends('layouts.layout')
@section('pageTitle', 'Página Inicial')
@section('body')
<br>
<h1 class="title text-center">Sistema de Gerenciamento</h1>
@auth
<p class="text-center">Clique em um item no menu acima para ver os detalhes</p>
@else
<p class="text-center">Entre no sistema para continuar</p>
@endauth
@endsection
