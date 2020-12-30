@extends('layouts.app')

@section('title', 'Buscar miembros')

@section('content')

	{!! Form::open([
		'route'=>'welcome.store', 
		'method'=>'POST', 
		'files'=>true
	]) !!}

		<div class="form-group">
			<img src="" />
			<img src="{{URL::asset('images/banner.png')}}" width="100%" />
		</div>
		<div class="form-group">
			{!! Form::label('tipo', 'Seleccione el tipo de usuario que desea buscar') !!}
			{!! Form::select('tipo', [
				'estudiante' => 'Estudiante',
				'consejero' => 'Consejero'
			], 'estudiante', [
				'class'=>'form-control', 
				'placeholder'=>'Seleccione una opción'
			]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('identificacion', 'Identificación/Correo tutor') !!}
			{!! Form::text('identificacion', null, [
				'class'=>'form-control', 
				'required'=>'true',
				'placeholder'=>'Ingrese el número de identificación'
			]) !!}
		</div>

		<div class="form-group">	
			{!! Form::submit('Registrar', [
				'class'=>'btn btn-primary'
			]) !!}
		</div>

	{!! Form::close() !!}

@endsection