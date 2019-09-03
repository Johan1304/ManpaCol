<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPresentacion extends FormRequest
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
            'Descripcion' => 'required|max:50',
            'Cantidad' => 'required|max:4',
            'UnidadMedida' => 'required|max:6'
        ];
    }

    public function messages()
    {
        return[
            'Descripcion.required' => 'El campo Descripcion es requerido',
            'Cantidad.required' => 'El campo Cantidad es requerido',
            'UnidadMedida.required' => 'El campo Unidad de Medida es requerido'
        ];
    }
}
