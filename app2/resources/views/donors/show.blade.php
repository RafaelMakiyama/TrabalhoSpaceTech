@extends('layouts.layout')
@section('pageTitle', 'Doadores - '.$donor->name)
@section('body')
<div class="card">
    <div class="card-header">
      {{$donor->name}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <p class="card-text">Nome:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$donor->name}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Telefone:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$donor->telephone}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Email:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$donor->email}}</h5>
            </div>
        </div>  
        <div class="row">
            <div class="col-2">
                <p class="card-text">Peso:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{$donor->weight}}</h5>
            </div>
        </div>  
        <div class="row">
            <div class="col-2">
                <p class="card-text">Fumante?:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{ $donor->smoker ? 'Sim' : 'Não' }}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="card-text">Doença?:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{ $donor->disease ? 'Sim' : 'Não' }}</h5>
            </div>
        </div>  
        <div class="row">
            <div class="col-2">
                <p class="card-text">Comentário:</p>
            </div>
            <div class="col">                
                <h5 class="card-title">{{ $donor->comments }}</h5>
            </div>
        </div>        
      <br>
      <a href="{{route('doadores.index')}}" class="btn btn-secondary">Voltar</a>
    </div>
  </div>
@endsection