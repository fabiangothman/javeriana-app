<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $table = "estudiante";

    protected $fillable = ['id', 'nombre', 'apellido1', 'apellido2', 'correo', 'documento', 'estado', 'semestre', 'jornada', 'pilo_paga'];

     public function tutor()
    {
        return $this->belongsToMany('App\Tutor');
    }
}
