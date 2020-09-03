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
            'email' => 'required|email',
            'NumDoc' => 'required|unique:usuario,NumDoc'
        ];
    }


    public function messages()
    {
        return[
            
            'NumDoc.required' => 'El campo Numero Documento es requerido',
            'NumDoc.unique' => 'Este numero de documento ya está tomado',
            'email.email' => 'El correo debe contener un "@" '
            
        ];
    }
}
