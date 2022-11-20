@extends('layouts.app')

@section('title', 'Aluno')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $student->nome }}</div>

<p>User: {{ $user->name }}</p>

<h5>Cursos Matriculados: </h5>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">CURSOS</th>
            <th scope="col">NOTA</th>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($courses as $course)
        <tr>
            <td>{{ $course->nome }}</td>
            <td>{{ $student->nota }}</td>
            <td>
                <form action="/course/leave/{{ $course->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        Sair do Curso
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('admin') }}" class="btn btn-primary">Voltar</a>

@endsection