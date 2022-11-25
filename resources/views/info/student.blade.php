@extends('layouts.app')

@section('title', 'Aluno')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $student->nome }}</div>

@if(Auth::user()->email != 'secretaria@gmail.com')
    <a href="/" class="btn btn-primary">Increver-se em um Curso</a>
@endif

<br><br>

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
            @foreach($notas as $nota)
                @if($nota?->course_id === $course?->id)
                    <td>{{ $nota->nota }}</td>
                @endif
            @endforeach
            <td>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="/course/leave/{{ $course->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        Sair do Curso
                    </button>
                </form>
            </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@if(Auth::user()->email != 'secretaria@gmail.com')
    <a href="{{ route('admin') }}" class="btn btn-primary">Voltar</a>
@endif

@endsection