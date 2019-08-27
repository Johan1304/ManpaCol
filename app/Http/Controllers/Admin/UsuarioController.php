<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::orderBy('Id')->get();
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
    public function guardar(ValidacionUsuario $request)
    {
        Usuario::create($request->all());
        return redirect('admin/usuario')->with('mensaje','TipoMaterial creado correctamente');
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
        $data=Usuario::findOrFail($id);
        return view('admin.usuario.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar (ValidacionUsuario $request, $id)
    {
        Usuario::findOrFail($id)->update($request->all());
        return redirect('admin/usuario')->with('mensaje','Usuario actualizado correctamente');  

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