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

<h5>Alunos Matriculados: </h5>

@foreach($students as $student)
    <p> -> {{ $student->nome }} </p>
@endforeach

<a href="/" class="btn btn-primary">Voltar</a>


@endsection