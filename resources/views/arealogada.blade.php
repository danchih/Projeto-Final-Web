@extends('layouts.app')

@section('title', 'Page')

@section('content')



<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Área Logada</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Perfil</h5>
            <p class="card-text">Visualize seu perfil, edite as informações nele e veja os cursos inscritos</p>
            <a href="/user/{{ Auth::user()->id }}" class="btn btn-primary">Ver Perfil</a>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cursos</h5>
            <p class="card-text">Veja os cursos disponíveis na nossa plataforma e increva-se</p>
            <a href="/" class="btn btn-primary">Ver Cursos</a>
        </div>
        </div>
    </div>
</div>

@endsection