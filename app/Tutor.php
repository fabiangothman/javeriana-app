<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    //
    protected $table = "tutor";

    protected $fillable = ['nombre_consejero', 'correo', 'horario', 'imagen'];

    public function estudiante()
    {
        return $this->belongsToMany('App\Estudiante');
    }
}
