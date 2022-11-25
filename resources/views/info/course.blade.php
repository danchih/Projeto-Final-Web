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

        <br><br>

        <a href="/all/permissoes/{{ $course->id }}" class="btn btn-primary">Matricular Alunos e Professor</a>

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
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->nome }}</td>
                    @foreach($notas as $nota)
                        @if($nota?->student_id === $student?->id)
                            <td>{{ $nota->nota }}</td>
                        @endif
                    @endforeach
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('nota.edit', [$student, $course]) }}" class="btn btn-primary">Atribuir Nota</a>
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

    @else
        @if($course->status != 3)
        <br>
        <form action="/course/join/{{ $course->id }}" method="POST">
            @csrf
            <a href="/course/join/{{ $course->id }}" class="btn btn-primary" id="course-submit" onclick="course.preventDefault; this.closest('form').submit();">Inscrever-se</a>
        </form>

        <br><br>

        <a  href="{{ url()->previous() }}">
            <i class="fa fa-arrow-circle-o-left"></i>
            <span class="btn btn-primary">Voltar</span>
        </a>

        @endif
    @endif

@endauth


@endsection