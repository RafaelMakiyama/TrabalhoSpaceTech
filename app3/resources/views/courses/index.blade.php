@extends('layouts.layout')
@section('pageTitle', 'Cursos')
@section('body')
@include('layouts.alerts')
<a href={{route('cursos.create')}}> <button type="button" class="btn btn-primary">Adicionar Curso</button></a><br><br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Qntd Máxima de Estudantes</th>
        <th scope="col">Descrição</th>
        <th scope="col">Categoria</th>
        <th scope="col">Mensal</th>
        <th scope="col">Status</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
    <tr>
        <td>{{ $course->id }} </td>
        <td>{{ $course->name }}</td>
        <td>{{ $course->quantities_max_students }} </td>
        <td>{{ $course->description }} </td>
        <td>{{ $course->category }} </td>
        <td>{{ $course->monthly }} </td>
        <td>{{ $course->status }} </td>
        <td>
        <a href="{{route("cursos.show", $course->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button></a>
        <a href="{{route("cursos.edit", $course->id ) }}"><button type="button" class="btn btn-primary"><i class="far fa-edit"></i></button></a>
        <form action="{{route('cursos.destroy', $course->id)}}" method="post">
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
    {{ $courses->links() }}
</div>
@endsection
