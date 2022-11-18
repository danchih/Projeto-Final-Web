@extends('layouts.app')

@section('title', 'Admin')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ Auth::user()->name }}</div>

<br>

<div class="card">
    <div class="card-header">Cadastro</div>
    <div class="card-body">
        <h5 class="card-title">Cadastrar Novo Usuário</h5>
        <p class="card-text">Cadastro de um novo usuário de login para um aluno ou professor, junto a sua matricula</p>
        <a class="btn btn-primary" href="/user" role="button">Cadastrar</a>
    </div>
</div>

<br>

<a class="btn btn-primary" href="/usuario/editar/{{ Auth::user()->id }}" role="button">Trocar de Senha</a>


<a class="btn btn-primary" href="/professors" role="button">Professores</a>

<br><br>

<a class="btn btn-primary" href="/m_course" role="button">Cadastrar Curso</a>


@endsection