@extends('layouts.app')

@section('title', 'MatriculaAluno')

@section('content')

<h2>Editar Cadastro do Aluno</h2>

<form class="row g-3" action="{{ route('student.edit.do', ['student' => $student->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-12">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="nome" value="{{ $student->nome }}">
    </div>

    <div class="col-md-6">
        <label for="CPF" class="form-label">CPF</label>
        <input type="text" name="CPF" class="form-control" id="CPF" value="{{ $student->CPF }}">
    </div>

    <div class="col-md-6">
        <label for="CEP" class="form-label">CEP</label>
        <input type="text" name="CEP" class="form-control" id="CEP" value="{{ $student->CEP }}">
    </div>

    <div class="col-12">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="endereco" value="{{ $student->endereco }}">
    </div>

    <div class="col-12">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" name="complemento" class="form-control" id="complemento" value="{{ $student->complemento }}">
    </div>

    <div class="col-md-6">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="bairro" value="{{ $student->bairro }}">
    </div>

    <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade" value="{{ $student->cidade }}">
    </div>

    <div class="col-12">
        <label for="filme" class="form-label">Filme</label>
        <input type="text" name="filme" class="form-control" id="filme" value="{{ $student->filme }}">
    </div>

    <input type="submit" class="btn btn-primary" value="Editar Cadastro">

</form>

@endsection