<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Tutor;
use Laracasts\Flash\Flash;

class WelcomeController extends Controller
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
    	if(is_null($request->tipo)){

    		return redirect()->route('welcome.index');

    	}elseif($request->tipo == 'estudiante'){

    		//$estudiante = Estudiante::find($request->identificacion);
    		$estudiante = Estudiante::where('documento', '=' ,$request->identificacion)->orWhere('id', '=', $request->identificacion)->firstOrFail();
    		return view('buscador.estudiante')->with('estudiante', $estudiante);

    	}elseif($request->tipo == 'consejero'){

    		$tutor = Tutor::where('correo', '=' ,$request->identificacion)->firstOrFail();
    		if($tutor){
    			return view('buscador.consejero')->with('tutor', $tutor);
    		}else{
    			Flash::error("No existe un tutor con correo ".$request->identificacion." en el sistema.");
    			return redirect()->route('welcome.index');
    		}
    		
    	}else{

    		return redirect()->route('welcome.index');

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
    	return view('welcome');
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
