@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Alunos Matriculados</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">NOTAS</th>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($students as $student)
        <tr>
            <td>{{ $student->nome }}</td>
            <td>{{ $student->nota }}</td>
            <td><a class="btn btn-primary" href="/student/{{ $student->id }}">Mais Informações</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection