@extends('layouts.main')

@section('title', 'Home')

@section('content')


<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Trabalho Web</div>

<a class="btn btn-primary" href="/m_professor" role="button">Professor</a>
<a class="btn btn-primary" href="/m_student" role="button">Aluno</a>

@endsection