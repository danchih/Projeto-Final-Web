@extends('layouts.app')

@section('title', 'MatriculaAluno')

@section('content')

<h2>Editar Cadastro do Professor</h2>

<form class="row g-3" action="{{ route('professor.edit.do', ['professor' => $professor->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-12">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nome" value="{{ $professor->nome }}">
    </div>

    <div class="col-md-6">
        <label for="CPF" class="form-label">CPF</label>
        <input type="text" name="CPF" class="form-control" id="CPF" value="{{ $professor->CPF }}">
    </div>

    <div class="col-md-6">
        <label for="CEP" class="form-label">CEP</label>
        <input type="text" name="CEP" class="form-control" id="CEP" value="{{ $professor->CEP }}">
    </div>

    <div class="col-12">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="endereco" value="{{ $professor->endereco }}">
    </div>

    <div class="col-12">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" name="complemento" class="form-control" id="complemento" value="{{ $professor->complemento }}">
    </div>

    <div class="col-md-6">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="bairro" value="{{ $professor->bairro }}">
    </div>

    <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade" value="{{ $professor->cidade }}">
    </div>

    <label for="imagem">Escolha um Avatar</label>
    
    <div class="col-12">
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="1" value="avatar1.png">
            <img src="/img/avatar1.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="2" value="avatar2.png">
            <img src="/img/avatar2.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="3" value="avatar3.png">
            <img src="/img/avatar3.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="4" value="avatar4.png">
            <img src="/img/avatar4.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="5" value="avatar5.png">
            <img src="/img/avatar5.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="6" value="avatar6.png">
            <img src="/img/avatar6.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input mt-0" type="radio" name="avatar" id="7" value="avatar7.png">
            <img src="/img/avatar7.png" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left">
        </div>
    </div>

    <input type="submit" class="btn btn-primary" value="Editar Cadastro">
    
</form>


@endsection