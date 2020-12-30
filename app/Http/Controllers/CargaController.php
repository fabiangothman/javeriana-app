<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Tutor;
use Laracasts\Flash\Flash;

class CargaController extends Controller
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
        /**/
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('csv');
        $filePath = $file->getRealPath();
        $fileExten = $file->getClientOriginalExtension();
        

        if($request->file('csv')){

            $csvFile = fopen($filePath, 'r');
            $header = fgetcsv($csvFile);

            while($columns=fgetcsv($csvFile)){

                foreach ($columns as $key => &$value) {
                    $valoresFila = explode(';', $value);
                    $tutor = new Tutor();
                    $tutor->nombre_consejero = $valoresFila[0];
                    $tutor->correo = $valoresFila[1];
                    $tutor->horario = $valoresFila[2];
                    $tutor->imagen = $valoresFila[3];
                    $tutor->save();
                    echo "El tutor ".$tutor->nombre_consejero." ha sido creado con éxito.<br />";

                    $estudiante = new Estudiante();
                    $estudiante->id = $valoresFila[4];
                    $estudiante->nombre = $valoresFila[5];
                    $estudiante->apellido1 = $valoresFila[6];
                    $estudiante->apellido2 = $valoresFila[7];
                    $estudiante->correo = $valoresFila[8];
                    $estudiante->documento = $valoresFila[9];
                    $estudiante->estado = $valoresFila[10];
                    $estudiante->semestre = $valoresFila[11];
                    $estudiante->jornada = $valoresFila[12];
                    $estudiante->pilo_paga = $valoresFila[13];
                    $estudiante->save();
                    echo "El estudiante ".$estudiante->nombre." ".$estudiante->apellido1." ".$estudiante->apellido2." ha sido creado con éxito.<br />";

                    $estudiante->tutor()->sync($tutor);
                    echo "Se ha realizado la creación de la relación entre estudiante y tutor.<br /><br />";
                    
                }
            }

            fclose($csvFile);
            echo "<a href='".url('/')."'>Continuar</a>";
            exit();
        }

    }


    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('carga.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**/
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**/
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
        /**/
    }
}
