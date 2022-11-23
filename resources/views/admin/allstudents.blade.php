@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Alunos Matriculados</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($students as $student)
        <tr>
            <td>{{ $student->nome }}</td>
            <td>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="/student/{{ $student->id }}">Cursos Matriculados</a>
                <form action="/student/delete/{{ $student->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        Deletar Aluno
                    </button>
                </form>
            </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection