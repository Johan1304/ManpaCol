<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Mail\Mensaje;
use App\Models\Admin\TipoDocumento;
use App\Models\Admin\Tipousuario;
use App\Models\Admin\Usuario;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class UsuarioController extends Controller
{


    public function __construct()
    {
        // $this->middleware('checkrole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::orderBy('id')->get();
        return view('admin.usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        
        return view('admin.usuario.crear');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $pass= Str::random(9);
        if($request->get('IdTipoUsuario')=="administrador"){
            $tipousuario=1;
        }else{
            $tipousuario=2;
        }

        $msg = Usuario::create([
            'tipousuario_id' => $tipousuario,
            'name'=> $request->get('name'),
            'Apellidos'=>$request->get('Apellidos'),
            'IdTipoDocumento'=>$request->get('IdTipoDocumento'),
            'NumDoc'=>$request->get('NumDoc'),
            'email'=>$request->get('email'),           
            'password'=>Hash::make($pass),      
        ]);
       
        Mail::to($request->get('email'))->send(new Mensaje($msg,$pass));

        

        return redirect(route('usuario'))->with('mensaje','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $usuario=Usuario::findOrFail($id);
        $tiposusuario=Tipousuario::orderBy('id')->get();
        $documentos=TipoDocumento::orderBy('Descripcion')->get();   
        return view('admin.usuario.editar', compact('usuario','usuarios','documentos','tiposusuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar (Request $request, $id)
    {

        

        if($request->get('IdTipoUsuario')=="administrador"){
            $tipousuario=1;
        }else{
            $tipousuario=2;
        }
        $user=Usuario::findOrFail($id);

        // $this->validate($request,
        // ['NumDoc' => ['required|unique:usuario,NumDoc,'.$id],
        // 'email' => ['required|email']] );

        $validacion=$request->validate([
            
            'NumDoc' => 'required|unique:usuario,NumDoc,'.$id,
            'Email'  => 'required'
        ]);

        $user->update(
            ['tipousuario_id' => $tipousuario,
            'name'=> $request->get('name'),
            'Apellidos'=>$request->get('Apellidos'),
            'IdTipoDocumento'=>$request->get('IdTipoDocumento'),
            'NumDoc'=>$request->get('NumDoc'),
            'email'=>$request->get('Email'),
            'Estado'=>$request->get('Estado')]  );
            
        return redirect(route('usuario'))->with('mensaje','Usuario actualizado correctamente');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}
/*
                    
                    
                    
                    
