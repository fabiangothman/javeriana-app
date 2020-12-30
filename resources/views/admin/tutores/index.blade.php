@extends('layouts.app')

@section('title', 'Listado de tutores')

@section('content')
	<div class="tutor_listar">
		<a href="{{ route('tutores.create') }}" class="btn btn-info">Registrar nuevo Consejero</a>
		<br />
		<hr />
		<table class="table table-striped">
			<thead class="thead-dark">
				<th></th>
				<th>ID</th>
				<th>Nombre Consejero</th>
				<th>Correo</th>
				<th>horario</th>
				<th>Accion</th>
			</thead>
			<tbody>
				@foreach($tutores as $tutor)
					<tr>
						<td class="cent_vert cent_horz"><img src="@if(file_exists(public_path().'/images/profilepics/'.$tutor->imagen)){{ url('/').'/images/profilepics/'.$tutor->imagen }}@else{{ url('/').'/images/profilepics/default.png' }}@endif" class="profilepic" /></td>
						<td class="cent_vert">{{ $tutor->id }}</td>
						<td class="cent_vert">{{ $tutor->nombre_consejero }}</td>
						<td class="cent_vert">{{ $tutor->correo }}</td>
						<td class="cent_vert">{{ $tutor->horario }}</td>
						<td class="cent_vert">
							<a href="{{ route('tutores.edit', $tutor->id) }}" class="btn btn-warning">
								<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
							</a>
							<a href="{{ route('admin.tutores.destroy', $tutor->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar?')">
								<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $tutores->render() !!}
		</div>
	</div>
@endsection