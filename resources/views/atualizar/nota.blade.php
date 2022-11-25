@extends('layouts.app')

@section('title', 'nota')

@section('content')

<h2>Editar Nota de {{ $student->nome }}</h2>

<form class="row g-3" action="{{ route('nota.edit.do', [$student, $course]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-12">
        <label for="nome" class="form-label">Nota</label>
        <input type="text" name="nota" class="form-control" id="nota">
    </div>

    <input type="submit" class="btn btn-primary" value="Aplicar Nota">

</form>

@endsection