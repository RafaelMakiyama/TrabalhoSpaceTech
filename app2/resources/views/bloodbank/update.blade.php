@extends('layouts.layout')
@section('pageTitle', 'Banco de sangue')
@section('body')

<form method="POST" action="{{ route('banco-de-sangue.update', $bloodBank->id )}}">
    @csrf
    @method('PUT')
    @include('bloodbank.form')
    <button type="submit" class="btn btn-primary">Atualizar banco de sangue</button>
</form>


  @endsection