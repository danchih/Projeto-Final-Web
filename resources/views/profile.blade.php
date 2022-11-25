@extends('layouts.app')

@section('title', 'Profile')

@section('content')


@if($user->id === $student?->user_id)
    <div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Perfil</div>

    <div class="h1">{{ $student->nome }}</div>

    <br>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Alteração de Cadastro</h5>
                <p class="card-text">Altere suas informações de cadastro tais como nome, CPF, CEP, filme ...</p>
                <a class="btn btn-primary" href="/student/editar/{{ $student->id }}" role="button">Alterar Cadastro</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Alteração de Usuário</h5>
                <p class="card-text">Altere suas informações de login tais como usuário, email e senha</p>
                <a class="btn btn-primary" href="/usuario/editar/{{ Auth::user()->id }}" role="button">Alterar Usuário</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cursos Matriculados</h5>
                <p class="card-text">Veja os cursos que você se matriculou na plataforma</p>
                <a href="/student/{{ $student->id }}" class="btn btn-primary">Ver Cursos</a>
            </div>
            </div>
        </div>
    </div>

@elseif($user->id === $professor?->user_id)
    <div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Perfil</div>

    <img src="/img/{{ $professor->avatar }}" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left" alt="avatar">
    <br>
    <div class="h1">{{ $professor->nome }}</div>
    <br><br>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Alteração de Cadastro</h5>
                <p class="card-text">Altere suas informações de cadastro tais como nome, CPF, CEP, avatar ...</p>
                <a class="btn btn-primary" href="/professor/editar/{{ $professor->id }}" role="button">Alterar Cadastro</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Alteração de Usuário</h5>
                <p class="card-text">Altere suas informações de login tais como usuário, email e senha</p>
                <a class="btn btn-primary" href="/usuario/editar/{{ Auth::user()->id }}" role="button">Alterar Usuário</a>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cursos Matriculados</h5>
                <p class="card-text">Veja os cursos que você se matriculou na plataforma</p>
                <a href="/professor/{{ $professor->id }}" class="btn btn-primary">Ver Cursos</a>
            </div>
            </div>
        </div>
    </div>

@endif

<a  href="{{ url()->previous() }}">
    <i class="fa fa-arrow-circle-o-left"></i>
    <span class="btn btn-primary">Voltar</span>
</a>

@endsection