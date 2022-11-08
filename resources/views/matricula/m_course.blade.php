@extends('layouts.main')

@section('title', 'CadastrarCurso')

@section('content')

<h2>Cadastro de Curso</h2>

<form class="row g-3" action="/m_course" method="POST">
    @csrf
    <div class="col-12">
        <label for="nome" class="form-label">Nome do Curso</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="col-md-6">
        <label for="maximo" class="form-label">Máximo de Alunos Permitidos</label>
        <input type="text" name="maximo" class="form-control" id="maximo">
    </div>
    <div class="col-md-6">
        <label for="minimo" class="form-label">Mínimo de Alunos Permitidos</label>
        <input type="text" name="minimo" class="form-control" id="minimo">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição do Curso</label>
        <textarea name="descricao" class="form-control" id="descricao" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="des_simplificada" class="form-label">Descrição Simplificada do Curso</label>
        <textarea name="des_simplificada" class="form-control" id="des_simplificada" rows="3"></textarea>
    </div>
    <select name="status" class="form-select" aria-label="Default select example">
        <option selected>Status do Curso</option>
        <option value="1">Matrículas Abertas - Mínimo de alunos não atingido!</option>
        <option value="2">Matrículas Abertas - Curso acontecerá!</option>
        <option value="3">Matrículas Encerradas</option>
    </select>
    <div class="col-12">
        <input type="submit" class="btn btn-primary" value="Cadastrar Curso">
    </div>
</form>

@endsection