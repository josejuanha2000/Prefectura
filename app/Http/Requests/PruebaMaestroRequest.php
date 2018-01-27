<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PruebaMaestroRequest extends Request
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
            'id_empleado'=>'required|unique:maestros|min:6',
            'titulo'=>'required',
            'nombre_empleado'=>'required|unique:maestros',
            'frecuencia'=>'required',    
            'act'=>'required',
            'published_at'=>'required|date',
        ];
    }
}
