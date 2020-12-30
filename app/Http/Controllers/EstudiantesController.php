<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use Laracasts\Flash\Flash;
use App\Tutor;

/*	Vamor a insertar la validación de campos	*/
use App\Http\Requests\EstudianteRequest;

class EstudiantesController extends Controller
{
    //
    /**
     * Show the form for creating a new resource..
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutores = Tutor::orderBy('nombre_consejero', 'ASC')->pluck('nombre_consejero', 'id');
        //dd($tutores);
        return view('admin.estudiantes.create')->with('tutores', $tutores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudianteRequest $request)
    {
    	//dd($request->all());
        $estudiante = new Estudiante($request->all());
        $estudiante->save();

        $estudiante->tutor()->sync($request->nombre_consejero);

        Flash::success("Se ha registrado a ".$estudiante->nombre." de forma exitosa.");

        return redirect()->route('estudiantes.index');
    }

    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::orderBy('id', 'ASC')->paginate(5);
        //dd($estudiantes);
        return view('admin.estudiantes.index')->with('estudiantes', $estudiantes);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        Flash::error('El estudiante '.$estudiante->nombre.' ha sido borrado de forma exitosa.');
        return redirect()->route('estudiantes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        $tutores = Tutor::orderBy('nombre_consejero', 'ASC')->pluck('nombre_consejero', 'id');
        //dd($estudiante);
        return view('admin.estudiantes.edit')->with('estudiante', $estudiante)->with('tutores', $tutores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        /*
        $estudiante->id = $request->id;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido1 = $request->apellido1;
        $estudiante->apellido2 = $request->apellido2;
        $estudiante->correo = $request->correo;
        $estudiante->documento = $request->documento;
        $estudiante->estado = $request->estado;
        $estudiante->semestre = $request->semestre;
        $estudiante->jornada = $request->jornada;
        $estudiante->pilo_paga = $request->pilo_paga;
        */
        $estudiante->tutor()->sync($request->tutor_id);

        $estudiante->fill($request->all());
        $estudiante->save();

        Flash::warning('El usuario '.$request->nombre.' ha sido editado con éxito.');
        return redirect()->route('estudiantes.index');
    }
}
