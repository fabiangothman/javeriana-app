<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use Laracasts\Flash\Flash;

/*	Vamor a insertar la validación de campos	*/
use App\Http\Requests\TutorRequest;

class TutoresController extends Controller
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
        return view('admin.tutores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TutorRequest $request)
    {
        //Manipulación de imágenes
        $file = $request->imagen;
        $name = 'profile_pic'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'/images/profilepics/';
        $file->move($path, $name);
        //dd($file);

        //Se almacenan todos los datos en la BD
        $tutor = new Tutor($request->all());
        $tutor->imagen = $name;
        $tutor->save();
        Flash::success("Se ha registrado a ".$tutor->nombre." de forma exitosa.");
        return redirect()->route('tutores.index');
    }

    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutores = Tutor::orderBy('id', 'ASC')->paginate(5);
        return view('admin.tutores.index')->with('tutores', $tutores);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Tutor::find($id);
        $tutor->delete();

        Flash::error('El tutor '.$tutor->nombre_consejero.' ha sido borrado de forma exitosa.');
        return redirect()->route('tutores.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Tutor::find($id);
        //dd($tutor);
        return view('admin.tutores.edit')->with('tutor', $tutor);
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
        //
    }
}
