<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePassword extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => 'required|password:api',
            'password' => 'required|min:8',
            'password_confirm' => 'requierd|same:password'
        ];
    }

    public function messages()
    {
        return[
            
            'old_password.required' => 'El campo contrasña actual es requerido',
            'old_password.confirmed' => 'El campo contrasña actual no coincide con su actual contraseña',
            'password_confirm.same' => 'Las contraseñas no coinciden',
            'email.email' => 'El correo debe contener un "@" '
            
        ];
    }
}
