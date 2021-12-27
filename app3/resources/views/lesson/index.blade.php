@extends('layouts.layout')
@section('pageTitle', 'Aula')
@section('body')
    @include('layouts.alerts')

    <a href={{ route('aulas.create') }}> <button type="button" class="btn btn-primary">Adicionar
            Aula</button></a><br><br>
    <table class="table table-bordered">
        <thead>
            <tr>

                <th scope="col">Numero Aula</th>
                <th scope="col">Tema</th>
                <th scope="col">Duração</th>
                <th scope="col">Observação</th>
                <th scope="col">Professor</th>
                <th scope="col">Curso</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <td>{{ $lesson->num_lesson}} </td>
                    <td>{{ $lesson->theme}}</td>
                    <td>{{ $lesson->duration }} </td>
                    <td>{{ $lesson->obs}} </td>
                    <td>{{ $lesson->teacher->name}} </td>
                    <td>{{ $lesson->course->name}} </td>
                    
                    <td>
                        <a href="{{ route('aulas.show', $lesson->id) }}"><button type="button" class="btn btn-primary"><i
                                    class="far fa-eye"></i></button></a>
                        <a href="{{ route('aulas.edit', $lesson->id) }}"><button type="button" class="btn btn-primary"><i
                                    class="far fa-edit"></i></button></a>
                        <form action="{{ route('aulas.destroy', $lesson->id) }}" method="post">
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
        {{ $lessons->links() }}
    </div>
@endsection
