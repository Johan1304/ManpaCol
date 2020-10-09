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
        $this->middleware('checkrole');
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
                    
                    
                    
                    
<div class="mdl-grid">

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                            <input class="mdl-textfield__input" value="1" type="text" id="IdTipoUsuario" name="IdTipoUsuario" readonly tabIndex="-1"/>

                            <label class="mdl-textfield__label" for="" requerido>TipoUsuario</label>

                            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="IdTipoUsuario">
                                    @foreach ($tiposusuario as $tipo)

                                    <li class="mdl-menu__item">{{$tipo->Id}}</li>
                                    
                                    @endforeach    
                            </ul>

                            <label for="IdTipoUsuario" requerido>
                                <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                            </label>

                        </div>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="Nombres" value="" pattern="[A-Za-z]{1,45}"/>
                            <label class="mdl-textfield__label" for="firstName" requerido>Nombres</label>
                        </div>

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="Apellidos" value="" pattern="[A-Za-z]{1,45}"/>
                            <label class="mdl-textfield__label" for="secondName" requerido>Apellidos</label>
                        </div>
                    </div>

                    <div class="mdl-grid">

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                            <input class="mdl-textfield__input" value="" type="text" id="tdoc" name="IdTipoDocumento" readonly tabIndex="-1"/>

                            <label class="mdl-textfield__label" for="tdoc" requerido>TipoDoc</label>

                            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="tdoc">
                            @foreach ($documentos as $tipodocumento)
                            <li class="mdl-menu__item">{{$tipodocumento->Id}}</li>
                            
                            @endforeach
                            </ul>
                            <label for="tdoc" requerido>
                                <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                            </label>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="ndoc" name="NumDoc" value="" pattern="[0-9]{7,14}"/>
                            <label class="mdl-textfield__label" for="ndoc">Numero de documento</label>
                        </div>
                    </div>

                    

                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="firstName" name="Email" value=""/>
                        <label class="mdl-textfield__label" for="firstName">Email</label>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="user" name="usuario" value="" pattern="[A-Za-z0-9]{1,45}"/>
                            <label class="mdl-textfield__label" for="user">Usuario</label>
                        </div>

                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="pass" name="password" value="" pattern="[A-Za-z0-9]{1,45}"/>
                            <label class="mdl-textfield__label" for="pass">Contraseña</label>
                        </div>
                    </div>
                    
                    </div>

                



                    <div class="form__action">
                        
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red"
                        onclick = "this.form.action = '{{route('usuario')}}'">
                            Volver
                        </button>
                        <button  type="submit" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue"
                        >Crear</button>
                    
                </div>
                */