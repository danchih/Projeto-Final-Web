@extends('layouts.app')

@section('title', 'Admin')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ Auth::user()->name }}</div>

<br>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">Cadastro</div>
            <div class="card-body">
                <h5 class="card-title">Cadastrar Novo Usuário</h5>
                <p class="card-text">Cadastro de um novo usuário de login para um aluno ou professor, junto a sua matricula</p>
                <a class="btn btn-primary" href="/user" role="button">Cadastrar</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">Cadastro</div>
            <div class="card-body">
                <h5 class="card-title">Cadastrar Novo Curso</h5>
                <p class="card-text">Cadastro de um novo curso para o site</p>
                <a class="btn btn-primary" href="/m_course" role="button">Cadastrar</a>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="row">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Professores</h5>
                <p class="card-text">Veja a lista de todos os professores existentes no sistema</p>
                <a class="btn btn-primary" href="/professors" role="button">Professores</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Alunos</h5>
                <p class="card-text">Veja a lista de todos os alunos existentes no sistema</p>
                <a class="btn btn-primary" href="/students" role="button">Alunos</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Cursos</h5>
                <p class="card-text">Veja a lista de todos os cursos existentes no sistema</p>
                <a class="btn btn-primary" href="/" role="button">Cursos</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Editar Login</h5>
                <p class="card-text">Altere a senha de login da Secretaria</p>
                <a class="btn btn-primary" href="/usuario/editar/{{ Auth::user()->id }}" role="button">Alterar Senha</a>
            </div>
        </div>
    </div>
</div>











@endsection