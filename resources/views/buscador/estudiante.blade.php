@extends('layouts.app')

@section('title', 'Datos de consejero para el estudiante '.$estudiante->nombre.'.')

@section('content')

    <div class="buscador_listar">
        <div class="panel panel-default">Estudiante</div>
        <div><strong>Nombre: </strong>{{ $estudiante->nombre.' '.$estudiante->apellido1.' '.$estudiante->apellido2 }}</div>
        <div><strong>Identificación: </strong>{{ $estudiante->id }}</div>
        <div><strong>Correo: </strong>{{ $estudiante->correo }}</div>
        <div><strong>Documento: </strong>{{ $estudiante->documento }}</div>
        <div><strong>Estado: </strong>{{ $estudiante->estado }}</div>
        <div><strong>Semestre: </strong>{{ $estudiante->semestre }}</div>
        <div><strong>Jornada: </strong>{{ $estudiante->jornada }}</div>
        <div><strong>Ser pilo paga: </strong>{{ $estudiante->pilo_paga }}</div>
        <br />
        <br />
        <div class="panel panel-default">Consejeros</div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <th></th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Horario</th>
                </thead>
                <tbody>
                    @foreach($estudiante->tutor as $tutor)
                    <tr>
                        <td class="cent_vert cent_horz"><img src="@if(file_exists(public_path().'/images/profilepics/'.$tutor->imagen)){{ url('/').'/images/profilepics/'.$tutor->imagen }}@else{{ url('/').'/images/profilepics/default.png' }}@endif" class="profilepic" /></td>
                        <td class="cent_vert">{{ $tutor->nombre_consejero }}</td>
                        <td class="cent_vert">{{ $tutor->correo }}</td>
                        <td class="cent_vert">{{ $tutor->horario }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection