@extends('layouts.layout')
@section('pageTitle', 'Alunos')
@section('body')
@include('layouts.alerts')
<a href={{route('alunos.create')}}> <button type="button" class="btn btn-primary">Adicionar Aluno</button></a><br><br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Matrícula</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Responsável</th>
        <th scope="col">CPF</th>        
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
    <tr>
        <td>{{ $student->id }} </td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->registration }} </td>
        <td>{{ date('d/m/Y', strtotime($student->birthday)); }} </td>
        <td>{{ $student->financial_responsable }} </td>
        <td>{{ $student->cpf }} </td>
        <td>
        <a href="{{route("alunos.show", $student->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
        <a href="{{route("alunos.edit", $student->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
        <form action="{{route('alunos.destroy', $student->id)}}" method="post">
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
    {{ $students->links() }}
</div>
@endsection