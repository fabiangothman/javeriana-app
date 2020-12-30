@extends('layouts.app')

@section('title', 'Listado de estudiantes')

@section('content')
	<a href="{{ route('estudiantes.create') }}" class="btn btn-info">Registrar nuevo Estudiante</a>
	<br />
	<hr />

	<div class="table-responsive">
		<table class="table table-striped">
			<thead class="thead-dark">
				<th>ID</th>
				<th>Nombre</th>
				<th>Primer apellido</th>
				<th>Segundo apellido</th>
				<th>Correo</th>
				<th>Documento</th>
				<th>Estado</th>
				<th>Semestre</th>
				<th>Jornada</th>
				<th>Pilo paga</th>
				<th>Tutor/es</th>
				<th>Accion</th>
			</thead>
			<tbody>
				@foreach($estudiantes as $estudiante)
					<tr>
						<td>{{ $estudiante->id }}</td>
						<td>{{ $estudiante->nombre }}</td>
						<td>{{ $estudiante->apellido1 }}</td>
						<td>{{ $estudiante->apellido2 }}</td>
						<td>{{ $estudiante->correo }}</td>
						<td>{{ $estudiante->documento }}</td>
						<td>{{ $estudiante->estado }}</td>
						<td>{{ $estudiante->semestre }}</td>
						<td>{{ $estudiante->jornada }}</td>
						<td>{{ $estudiante->pilo_paga }}</td>
						<td>
							@foreach($estudiante->tutor as $num => $tutor)
								<span class="label label-primary">{{ $tutor->nombre_consejero }}</span>
								@if($num>0)
									{{ ', ' }}
								@endif
							@endforeach
						</td>
						<td>
							<a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning">
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
							</a>
							<a href="{{ route('admin.estudiantes.destroy', $estudiante->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar?')">
								<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	
	<div class="text-center">
		{!! $estudiantes->render() !!}
	</div>
@endsection