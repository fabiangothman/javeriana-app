@extends('layouts.app')

@section('title', 'Datos de estudiantes para el consejero '.$tutor->nombre_consejero.'.')

@section('content')

    <div class="buscador_listar">
        <div class="panel panel-default">Consejero</div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <th></th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Horario</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="cent_vert cent_horz"><img src="@if(file_exists(public_path().'/images/profilepics/'.$tutor->imagen)){{URL::asset('images/profilepics/'.$tutor->imagen)}}@else{{URL::asset('images/profilepics/default.png')}}@endif" class="profilepic" /></td>
                        <td class="cent_vert">{{ $tutor->nombre_consejero }}</td>
                        <td class="cent_vert">{{ $tutor->correo }}</td>
                        <td class="cent_vert">{{ $tutor->horario }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <br />
        <div class="panel panel-default">Estudiantes</div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <th>Nombre</th>
                    <th>Identificación</th>
                    <th>Correo</th>
                    <th>Documento</th>
                    <th>Estado</th>
                    <th>Semestre</th>
                    <th>Jornada</th>
                    <th>Ser pilo paga</th>
                </thead>
                <tbody>
                    @foreach($tutor->estudiante as $estudiante)
                    <tr>
                        <td class="cent_vert">{{ $estudiante->nombre.' '.$estudiante->apellido1.' '.$estudiante->apellido2 }}</td>
                        <td class="cent_vert">{{ $estudiante->id }}</td>
                        <td class="cent_vert">{{ $estudiante->correo }}</td>
                        <td class="cent_vert">{{ $estudiante->documento }}</td>
                        <td class="cent_vert">{{ $estudiante->estado }}</td>
                        <td class="cent_vert">{{ $estudiante->semestre }}</td>
                        <td class="cent_vert">{{ $estudiante->jornada }}</td>
                        <td class="cent_vert">{{ $estudiante->pilo_paga }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection