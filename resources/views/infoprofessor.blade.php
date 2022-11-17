@extends('layouts.app')

@section('title', 'Cursos')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $professor->nome }}</div>

<img src="/img/{{ $professor->avatar }}" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left" alt="avatar">
<div class="h1">{{ $professor->nome }}</div>

<h5>Cursos dando Aula: </h5>

@foreach($courses as $course)
    <p> -> {{ $course->nome }} </p>
@endforeach

<a href="#" class="btn btn-primary">Voltar</a>

@endsection