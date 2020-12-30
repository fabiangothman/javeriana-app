@extends('layouts.app')

@section('title', 'Crear nuevo estudiante')

@section('content')

	{!! Form::open([
		'route'=>'estudiantes.store', 
		'method'=>'POST', 
		'files'=>false
	]) !!}

		<div class="form-group">
			{!! Form::label('id', 'Javeriana id') !!}
			{!! Form::text('id', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'00000000000'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre', 'Nombres') !!}
			{!! Form::text('nombre', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese los nombres'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellido1', 'Primer apellido') !!}
			{!! Form::text('apellido1', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el primer apellido'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellido2', 'Segundo apellido') !!}
			{!! Form::text('apellido2', null, [
				'class'=>'form-control', 
				'required'=>'false',
				'placeholder'=>'Ingrese el segundo apellido'
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
			{!! Form::label('documento', 'Documento de identidad') !!}
			{!! Form::text('documento', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el documento de identidad'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('estado', 'Estado') !!}
			{!! Form::text('estado', null, [
				'class'=>'form-control', 
				'required'=>'false',
				'placeholder'=>'Ingrese el estado'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('semestre', 'Semestre') !!}
			{!! Form::text('semestre', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el semestre'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('jornada', 'Jornada') !!}
			{!! Form::text('jornada', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese la jornada'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('pilo_paga', 'Pilo paga') !!}
			{!! Form::text('pilo_paga', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Es pilo paga'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre_consejero', 'Consejero') !!}
			{!! Form::select('nombre_consejero', $tutores, null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Seleccione una opción'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', [
				'class'=>'btn btn-primary'
			]) !!}
		</div>

	{!! Form::close() !!}

@endsection