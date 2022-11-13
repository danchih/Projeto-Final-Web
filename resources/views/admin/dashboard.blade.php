@extends('layouts.app')

@section('title', 'Teste')

@section('content')

<div class="h1 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Secretaria</div>

<a class="btn btn-primary" href="/m_professor" role="button">Cadastrar Professor</a>
<a class="btn btn-primary" href="/m_student" role="button">Cadastrar Aluno</a>
<a class="btn btn-primary" href="/m_course" role="button">Cadastrar Curso</a>

@endsection