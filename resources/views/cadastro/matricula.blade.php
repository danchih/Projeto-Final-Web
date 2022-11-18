@extends('layouts.app')

@section('title', 'Matricula')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Cadastro de Usuário</div>

<br>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastro de Professor
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Professor</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('m_professor.do') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" id="nome">
                </div>

                <div class="mb-3">
                    <label for="CPF" class="form-label">CPF</label>
                    <input type="text" name="CPF" class="form-control" id="CPF" placeholder="--- --- --- --">
                </div>

                <div class="mb-3">
                    <label for="CEP" class="form-label">CEP</label>
                    <input type="text" name="CEP" class="form-control" id="CEP" placeholder="----- ---">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Rua ...">
                </div>

                <div class="mb-3">
                    <label for="complemento" class="form-label">Complemento</label>
                    <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Apartamento, bloco, conjunto">
                </div>

                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro">
                </div>

                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade">
                </div>

                <input type="hidden" name="user_id" value="{{ $id_user }}">

                <input type="submit" class="btn btn-primary" value="Cadastrar">
                
            </form>
        </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastro de Aluno
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Aluno</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form class="row g-3" action="{{ route('m_student.do') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" name="nome" class="form-control" id="nome">
            </div>

            <div class="mb-3">
                <label for="CPF" class="form-label">CPF</label>
                <input type="text" name="CPF" class="form-control" id="CPF" placeholder="--- --- --- --">
            </div>

            <div class="mb-3">
                <label for="CEP" class="form-label">CEP</label>
                <input type="text" name="CEP" class="form-control" id="CEP" placeholder="----- ---">
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Rua ...">
            </div>

            <div class="mb-3">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Apartamento, bloco, conjunto">
            </div>

            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro">
            </div>

            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="cidade">
            </div>

            <div class="mb-3">
                <label for="filme" class="form-label">Filme</label>
                <input type="text" name="filme" class="form-control" id="filme">
            </div>

            <input type="hidden" name="user_id" value="{{ $id_user }}">

            <input type="submit" class="btn btn-primary" value="Cadastrar">
                
            </form>
        </div>
        </div>
    </div>
</div>


@endsection