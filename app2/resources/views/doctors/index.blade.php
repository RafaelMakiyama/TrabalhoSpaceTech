@extends('layouts.layout')
@section('pageTitle', 'Médicos')
@section('body')
    @include('layouts.alerts')

    <a href={{ route('medicos.create') }}> <button type="button" class="btn btn-primary">Adicionar
            Médico</button></a><br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CRM</th>
                <th scope="col">Nome</th>
                <th scope="col">Área de atuação</th>
                <th scope="col">Idade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->id }} </td>
                    <td>{{ $doctor->crm }}</td>
                    <td>{{ $doctor->name }} </td>
                    <td>{{ $doctor->work_ocupattion }} </td>
                    <td>{{ $doctor->age }} </td>
                    <td>{{ $doctor->telephone }} </td>
                    <td>{{ $doctor->email }} </td>
                    <td>
                        <a href="{{ route('medicos.show', $doctor->id) }}"><button type="button" class="btn btn-primary"><i
                                    class="far fa-eye"></i></button></a>
                        <a href="{{ route('medicos.edit', $doctor->id) }}"><button type="button" class="btn btn-primary"><i
                                    class="far fa-edit"></i></button></a>
                        <form action="{{ route('medicos.destroy', $doctor->id) }}" method="post">
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
        {{ $doctors->links() }}
    </div>
@endsection
