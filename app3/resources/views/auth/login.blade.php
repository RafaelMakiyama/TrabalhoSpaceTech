@extends('layouts.layout')
@section('pageTitle', 'Aulas')
@section('body')


<form method="POST" class="form-contact contact_form" action="{{ route('login') }}">
   @csrf
    
   @if ($errors->any())
   @foreach ($errors->all() as $error)
   <div class="alert alert-danger" role="alert">
       <p>{{ $error }}</p>
     </div>
     @endforeach
   @endif

 
   <div class="form-group">
     <label for="exampleInputEmail1">Email</label>
     <input class="form-control" placeholder="Email" type="email" id="email"
     name="email" :value="old('email')" required autofocus>
     <small id="emailHelp" class="form-text text-muted">Não compartilhe nenhuma informação pessoal.</small>
   </div>
   <div class="form-group">
     <label for="exampleInputPassword1">Senha</label>
     <input class="form-control"  placeholder="Senha" type="password"  id="password" name="password">
   </div><br>
   <div class="form-group mt-3 float-right">
           <button type="submit" class="btn btn-primary"">Entrar</button>
   </div>
 </form>
 @endsection