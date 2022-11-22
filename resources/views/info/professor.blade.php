@extends('layouts.app')

@section('title', 'Professor')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Cursos Matriculados</div>

@if(Auth::user()->email != 'secretaria@gmail.com')
    <a href="/" class="btn btn-primary">Increver-se em um Curso</a>
@endif

<br><br>

<h5>Cursos dando Aula: </h5>

<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($courses as $course)
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $course->nome }}</h5>
                <p class="card-text">Descrição: {{ $course->des_simplificada }}</p>
                <p class="card-text">Status:</p>
                @if ($course->status == 1)
                    <p>Matrículas Abertas - Mínimo de alunos não atingido!</p>
                @elseif ($course->status == 2)
                    <p class="card-text">Matrículas Abertas - Curso acontecerá!</p>
                @else ($course->status == 3)
                    <p class="card-text">Matrículas Encerradas</p>
                @endif

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <form action="/course/leave/{{ $course->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        Sair do Curso
                    </button>
                </form>
                <br>
                <a href="/course/{{ $course->id }}" class="btn btn-primary">Mais Informações</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach 
</div>

@endsection