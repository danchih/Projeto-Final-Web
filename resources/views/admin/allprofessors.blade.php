@extends('layouts.app')

@section('title', 'Teste')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Professores Matriculados</div>

@foreach($professors as $professor)

<p> -> {{ $professor->nome }} </p>

@endforeach


@endsection