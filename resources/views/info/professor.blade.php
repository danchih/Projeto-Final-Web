@extends('layouts.app')

@section('title', 'Professor')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Cursos Matriculados</div>

<a href="/" class="btn btn-primary">Increver-se em um Curso</a>

<br>

<h5>Cursos dando Aula: </h5>

<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($courses as $course)
    <div class="col">
        <div class="card h-100">
            <img src="/img/alunos.webp" class="card-img-top h-75" alt="curso">
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
        
                <a href="/course/{{ $course->id }}" class="btn btn-primary">Mais Informações</a>

            </div>
        </div>
    </div>
    @endforeach 
</div>

<br><br>

<a href="#" class="btn btn-primary">Voltar</a>

@endsection