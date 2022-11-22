@extends('layouts.app')

@section('title', 'Cursos')

@section('content')


<div class="h2 pb-3 mb-4 text-dark border-bottom border-2 border-dark">{{ $course->nome }}</div>

<h5> Professor: </h5> 

@if($course->professor_id === NULL)
    <p>Sem atribuição de professor até o momento!</p>
@else
    <p> {{ $professor->nome }}</p>
@endif

<h5> Sobre: </h5> 

<p>Maximo de Inscritos: {{ $course->maximo }}</p>
<p>Mínimo de Inscritos: {{ $course->minimo }}</p>

<h5> Descrição: </h5>
<p>{{ $course->descricao }}</p> 

<h5> Status: </h5>
@if ($course->status == 1)
    <p>Matrículas Abertas - Mínimo de alunos não atingido!</p>
@elseif ($course->status == 2)
    <p>Matrículas Abertas - Curso acontecerá!</p>
@else ($course->status == 3)
    <p>Matrículas Encerradas</p>
@endif
 

@auth
    @if(Auth::user()->email === 'secretaria@gmail.com')
        <h5>Informações: </h5>
        <p>Total de Inscritos: {{ count($students) }}</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ALUNOS MATRICULADOS</th>
                    <th scope="col">NOTA</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->nome }}</td>
                    <td>{{ $student->nota }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    @elseif(Auth::user()->id === $professor?->user_id)

        <h5>Informações: </h5>
        <p>Total de Inscritos: {{ count($students) }}</p>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ALUNOS MATRICULADOS</th>
                    <th scope="col">NOTA</th>
                    <th scope="col">EDITAR NOTA</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->nome }}</td>
                    <td>{{ $student->nota }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalNota">
                            Atribuir Nota
                        </button>

                        <div class="modal fade" id="ModalNota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nota de {{ $student->nome }} </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form class="row g-3" action="{{ route('nota.edit.do', ['student' => $student->id ]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="nota" class="form-label">Nota</label>
                                        <input type="text" name="nota" class="form-control" id="nota">
                                    </div>

                                    <input type="submit" class="btn btn-primary" value="Atribuir">
                                        
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    @else
        @if($course->status != 3)
        <br>
        <form action="/course/join/{{ $course->id }}" method="POST">
            @csrf
            <a href="/course/join/{{ $course->id }}" class="btn btn-primary" id="course-submit" onclick="course.preventDefault; this.closest('form').submit();">Inscrever-se</a>
        </form>
        @endif
    @endif

@endauth


@endsection