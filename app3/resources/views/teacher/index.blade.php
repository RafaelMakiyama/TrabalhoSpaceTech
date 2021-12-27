@extends('layouts.layout')
@section('pageTitle', 'Professor')
@section('body')
    @include('layouts.alerts')

    <a href={{ route('professor.create') }}> <button type="button" class="btn btn-primary">Adicionar
            Professor</button></a><br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome de usuário</th>
                <th scope="col">Email</th>
                <th scope="col">Nome completo</th>
                <th scope="col">Numero da matrícula</th>
                <th scope="col">Competência</th>
                <th scope="col">Escolaridade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->user->name }} </td>
                    <td>{{ $teacher->user->email }}</td>
                    <td>{{ $teacher->fullname }} </td>
                    <td>{{ $teacher->registration }} </td>
                    <td>{{ $teacher->competence }} </td>
                    <td>{{ $teacher->scholarity }} </td>
                    <td>
                        <a href="{{ route('professor.show', $teacher->id) }}"><button type="button" class="btn btn-primary"><i
                                    class="far fa-eye"></i></button></a>
                        <a href="{{ route('professor.edit', $teacher->id) }}"><button type="button" class="btn btn-primary"><i
                                    class="far fa-edit"></i></button></a>
                        <form action="{{ route('professor.destroy', $teacher->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12 d-flex justify-content-center">
        {{ $teachers->links() }}
    </div>
@endsection
