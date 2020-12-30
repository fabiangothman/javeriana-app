@extends('layouts.app')

@section('title', 'Menú principal de administración | '.Auth::user()->nombre)

@section('content')

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="panel-heading">
        <a class="btn btn-link" href="{{ route('estudiantes.index') }}">
            Estudiantes
        </a>
    </div>
    <div class="panel-heading">
        <a class="btn btn-link" href="{{ route('tutores.index') }}">
            Tutores
        </a>
    </div>
</div>

@endsection