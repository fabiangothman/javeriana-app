@extends('layouts.app')

@section('title', 'Crear nuevo consejero')

@section('content')

	{!! Form::open([
		'route'=>'tutores.store', 
		'method'=>'POST', 
		'files'=>true
	]) !!}

		<div class="form-group">
			{!! Form::label('nombre_consejero', 'Nombre consejero') !!}
			{!! Form::text('nombre_consejero', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el nombre del tutor/consejero'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico') !!}
			{!! Form::email('correo', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'ejemplo@email.com'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('horario', 'Horario') !!}
			{!! Form::text('horario', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el horario de atención'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::file('imagen', ['class' => '']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', [
				'class'=>'btn btn-primary'
			]) !!}
		</div>

	{!! Form::close() !!}
	
@endsection