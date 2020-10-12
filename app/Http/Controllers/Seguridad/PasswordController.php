<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function index(Request $request)
    {
        // Infla la vista formulario de password
        return view('seguridad.reset');
    }

    public function update(ValidatePassword $request)
    {
       
        // Note la regla de validación "confirmed", que solicitará que usted agregue un campo extra llamado password_confirm

        $user = Auth::user(); // Obtenga la instancia del usuario en sesión

        $password = bcrypt($request->password); // Encripte el password


        $user->password = $password; // Rellene el usuario con el nuevo password ya encriptado
        $user->save(); // Guarde el usuario

        // Por ultimo, redirigir al usuario, por ejemplo al formulario anterior, con un mensaje de que el password fue actualizado
        return redirect(route('usuario'));

}
}