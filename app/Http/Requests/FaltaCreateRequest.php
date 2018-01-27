<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FaltaCreateRequest extends Request
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
            'id_empleado'=>'required|min:6',
            'fecha_falta'=>'required',
            'hora_falta'=>'required',
            'id_aula'=>'required',    
            'tipo_incidencia'=>'required',
            'id_semana'=>'required',
        ];
    }
}
