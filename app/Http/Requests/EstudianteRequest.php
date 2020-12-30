<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'            =>  'integer|unique:estudiante|required',
            'nombre'        =>  'min:4|max:100|required',
            'apellido1'     =>  'min:4|max:100|required',
            'correo'        =>  'min:4|max:250|unique:estudiante|required',
            'documento'     =>  'integer|required',
            'estado'        =>  'min:1|max:100|required',
            'semestre'      =>  'min:1|max:100|required',
            'jornada'       =>  'min:1|max:100|required',
            'pilo_paga'     =>  'min:1|max:100|required',
            'nombre_consejero'  =>  'min:1|required'
        ];
    }
}
