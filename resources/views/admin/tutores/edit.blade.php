@extends('layouts.app')

@section('title', 'Editar consejero '.$tutor->nombre_consejero)

@section('content')
	
	{!! Form::open([
		'route'=>['tutores.update', $tutor], 
		'method'=>'PUT'
	]) !!}

		<div class="form-group">
			{!! Form::label('nombre_consejero', 'Nombre consejero') !!}
			{!! Form::text('nombre_consejero', $tutor->nombre_consejero, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el nombre del tutor/consejero'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico') !!}
			{!! Form::email('correo', $tutor->correo, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'ejemplo@email.com'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('horario', 'Horario') !!}
			{!! Form::text('horario', $tutor->horario, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el horario de atención'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar', [
				'class'=>'btn btn-primary'
			]) !!}
		</div>


	{!! Form::close() !!}

@endsection