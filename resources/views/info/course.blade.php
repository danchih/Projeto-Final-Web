@extends('layouts.app')

@section('title', 'Cursos')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $course->nome }}</div>

<h5> Professor: </h5> 

@if($course->professor_id === NULL)
    <p>Sem atribuição de professor até o momento!</p>
@else
    <p> {{ $professor->nome }}</p>
@endif

<h5> Sobre: </h5> 

<p>Maximo de Inscritos: {{ $course->maximo }}</p>
<p>Mínimo de Inscritos: {{ $course->minimo }}</p>

<h5> Descrição: </h5>
<p>{{ $course->descricao }}</p> 

@auth
    @if(Auth::user()->email === 'secretaria@gmail.com')
        <h5>Alunos Matriculados: </h5>
        <p>Total de Inscritos: {{ count($students) }}</p>
        
            @foreach($students as $student)
                <p> -> {{ $student->nome }} </p>
            @endforeach

    @elseif(Auth::user()->id == $professor?->user_id)

        <h5>Alunos Matriculados: </h5>
        <p>Total de Inscritos: {{ count($students) }}</p>
        
            @foreach($students as $student)
                <p> -> {{ $student->nome }} </p>
            @endforeach

    @else
        <br>
        <form action="/course/join/{{ $course->id }}" method="POST">
            @csrf
            <a href="/course/join/{{ $course->id }}" class="btn btn-primary" id="course-submit" onclick="course.preventDefault; this.closest('form').submit();">Inscrever-se</a>
        </form>
    @endif

@endauth

<br>

<a href="#" class="btn btn-primary">Voltar</a>


@endsection