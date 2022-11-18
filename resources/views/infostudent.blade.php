@extends('layouts.app')

@section('title', 'Cursos')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $student->nome }}</div>

<p>User: {{ $user->name }}</p>

<h5>Cursos Matriculados: </h5>

@foreach($courses as $course)
    <p> -> {{ $course->nome }} </p>
@endforeach

<a href="#" class="btn btn-primary">Voltar</a>

@endsection