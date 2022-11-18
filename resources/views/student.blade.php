@extends('layouts.app')

@section('title', 'Aluno')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">Alunos</div>

<div id="students-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($students as $student)
        <div class="card col-md-4">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nome }}</h5>
                <p class="card-text"> {{ $student->CPF }}</p>

                <a href="#" class="btn btn-dark">Mais Informações</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection