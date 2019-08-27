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
            'Email' => 'required|max:60',
            'usuario'=>'required|max:50|unique:usuario,usuario' . $this->route('id')

        ];
    }
}
