@extends('layouts.app')

@section('title', 'MatriculaAluno')

@section('content')

<h2>Cadastrar Aluno</h2>

<form class="row g-3" action="/m_student" method="POST">
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
    <div class="col-md-12">
        <label for="filme" class="form-label">Filme</label>
        <input type="text" name="filme" class="form-control" id="filme">
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection