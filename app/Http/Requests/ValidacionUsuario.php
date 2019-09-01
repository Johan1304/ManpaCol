<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
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
            'Nombres' => 'required|max:50',
            'Apellidos' => 'required|max:50',
            'NumDoc' => 'required|max:14',
            'Email' => 'required|max:60'. $this->route('id'),
            'usuario'=>'required|max:50|unique:usuario,usuario' . $this->route('id'),
            'password'=>'required|max:500'

        ];
    }


    public function messages()
    {
        return[
            'Nombres.required' => 'El campo Nombre es requerido',
            'Apellidos.required' => 'El campo Apellido es requerido',
            'NumDoc.required' => 'El campo Numer Documento es requerido',
            'Email.required' => 'El campo Email es requerido',
            'usuario.required' => 'El campo usuario es requerido',
            'password.required' => 'El campo password es requerido'
        ];
    }
}
