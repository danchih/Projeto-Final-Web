@extends('layouts.app')

@section('title', 'Professores')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Professores Matriculados</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">CURSOS</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($professors as $professor)
        <tr>
            <th scope="row">{{ $professor->id }}</th>
            <td>{{ $professor->nome }}</td>
            <td><a class="btn btn-primary" href="/professor/{{ $professor->id }}">Mais Informações</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection