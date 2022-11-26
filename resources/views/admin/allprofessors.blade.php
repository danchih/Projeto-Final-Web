@extends('layouts.app')

@section('title', 'Professores')

@section('content')

<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Professores Matriculados</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NOME</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($professors as $professor)
        <tr>
            <td>{{ $professor->nome }}</td>
            <td>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="/professor/{{ $professor->id }}">Cursos Matriculados</a>
                <a class="btn btn-secondary" href="/professor/editar/{{ $professor->id }}" role="button">Editar Cadastro</a>
                <form action="/professor/delete/{{ $professor->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        Deletar Professor
                    </button>
                </form>
            </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a  href="{{ url()->previous() }}">
    <i class="fa fa-arrow-circle-o-left"></i>
    <span class="btn btn-primary">Voltar</span>
</a>

@endsection