@extends('layouts.app')

@section('title', 'Editar estudiante '.$estudiante->nombre)

@section('content')

	{!! Form::open([
		'route'=>['estudiantes.update', $estudiante], 
		'method'=>'PUT'
	]) !!}

		<div class="form-group">
			{!! Form::label('id', 'Javeriana id') !!}
			{!! Form::text('id', $estudiante->id, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'00000000000'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre', 'Nombres') !!}
			{!! Form::text('nombre', $estudiante->nombre, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese los nombres'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellido1', 'Primer apellido') !!}
			{!! Form::text('apellido1', $estudiante->apellido1, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el primer apellido'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellido2', 'Segundo apellido') !!}
			{!! Form::text('apellido2', $estudiante->apellido2, [
				'class'=>'form-control', 
				'required'=>'false',
				'placeholder'=>'Ingrese el segundo apellido'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo', 'Correo electrónico') !!}
			{!! Form::email('correo', $estudiante->correo, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'ejemplo@email.com'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('documento', 'Documento de identidad') !!}
			{!! Form::text('documento', $estudiante->documento, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el documento de identidad'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('estado', 'Estado') !!}
			{!! Form::text('estado', $estudiante->estado, [
				'class'=>'form-control', 
				'required'=>'false',
				'placeholder'=>'Ingrese el estado'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('semestre', 'Semestre') !!}
			{!! Form::text('semestre', $estudiante->semestre, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el semestre'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('jornada', 'Jornada') !!}
			{!! Form::text('jornada', $estudiante->jornada, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese la jornada'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('pilo_paga', 'Pilo paga') !!}
			{!! Form::text('pilo_paga', $estudiante->pilo_paga, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Es pilo paga'
			]) !!}
		</div>

		@foreach($estudiante->tutor as $tutor)
		<div class="form-group">
			{!! Form::label('tutor_id', 'Consejero') !!}
			{!! Form::select('tutor_id', $tutores, $tutor->id, [
				'class'=>'form-control', 
				'placeholder'=>'Seleccione una opción'
			]) !!}
		</div>
		@endforeach

		<div class="form-group">
			{!! Form::submit('Actualizar', [
				'class'=>'btn btn-primary'
			]) !!}
		</div>

	{!! Form::close() !!}

@endsection