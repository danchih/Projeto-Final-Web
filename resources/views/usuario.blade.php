@extends('layouts.app')

@section('title', 'User')

@section('content')


@foreach($professors as $professor)

    <img src="/img/{{ $professor->avatar }}" class="rounded-circle ms-2" style="width: 100px; height:100px; float:left" alt="avatar">
    <div class="h1">{{ $professor->nome }}</div>

@endforeach

@endsection