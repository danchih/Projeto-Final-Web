@extends('layouts.app')

@section('title', 'MatriculaProfessor')

@section('content')

<h2>Cadastrar Professor</h2>

<form class="row g-3" action="/m_professor" method="POST">
    @csrf
    <div class="col-12">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="col-md-6">
        <label for="CPF" class="form-label">CPF</label>
        <input type="text" name="CPF" class="form-control" id="CPF" placeholder="--- --- --- --">
    </div>
    <div class="col-md-6">
        <label for="CEP" class="form-label">CEP</label>
        <input type="text" name="CEP" class="form-control" id="CEP" placeholder="----- ---">
    </div>
    <div class="col-12">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Rua ...">
    </div>
    <div class="col-12">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Apartamento, bloco, conjunto">
    </div>
    <div class="col-md-6">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="bairro">
    </div>
    <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade">
    </div>
    <div class="col-md-6">
        <label for="usuario" class="form-label">Usuário</label>
        <input type="text" name="usuario" class="form-control" id="usuario">
    </div>
    <div class="col-md-6">
        <label for="senha" class="form-label">Senha</label>
        <input type="text" name="senha" class="form-control" id="senha">
    </div>
    <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </div>
</form>

@endsection