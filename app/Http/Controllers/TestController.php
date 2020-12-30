<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;

class TestController extends Controller
{
    //
    public function view($nombre){
    	//
    	$tutor = Tutor::find($nombre);
    	//dd($tutor);
    	return view('test.index', [
    		'tutor' => $tutor
    		]);
    }
}
