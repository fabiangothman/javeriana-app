@extends('layouts.app')

@section('title', 'Cargar archivo CSV')

@section('content')

    {!! Form::open([
        'route'=>'carga.store',
        'method'=>'POST', 
        'files'=>true
    ]) !!}

        <div class="form-group">
            {!! Form::file('csv', ['class' => '']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Cargar', [
                'class'=>'btn btn-primary'
            ]) !!}
        </div>

    {!! Form::close() !!}

@endsection