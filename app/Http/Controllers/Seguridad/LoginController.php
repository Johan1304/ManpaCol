<?php

namespace App\Http\Controllers\Seguridad;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/admin/usuario';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('seguridad.index');
    }

    public function username()
    {
        return 'usuario';
    }

    
}
