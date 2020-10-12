<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Color;
use App\Models\Admin\Material;
use App\Models\Admin\Proveedor;
use App\Models\Admin\Textura;
use App\Models\Admin\TipoMaterial;
use App\Models\Admin\TipoPresentacion;

class TipoMaterialController extends Controller
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
        $tipomateriales=TipoMaterial::orderBy('id')->get();
        // $colores=Color::orderBy('id')->get();
        // $texturas=Textura::orderBy('id')->get();
        // $provs=Proveedor::orderBy('id')->get();
        return view('admin.material.tipomaterial.index', compact('tipomateriales','colores','texturas','provs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $tipomateriales=TipoMaterial::orderBy('id')->get();
        $presentaciones=TipoPresentacion::orderBy('id')->get();
        return view('admin.material.tipomaterial.crear', compact('tipomateriales','presentaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
       
        $idTipoPresentacion=TipoPresentacion::where('Descripcion',$request->get('IdTipoPresentacion'))->first();
        TipoMaterial::create([
            'Descripcion'=>$request->get('Descripcion'),
            'IdTipoPresentacion'=>$idTipoPresentacion->id,
            ]);
        return redirect('admin/material/crear')->with('Mensaje','TipoMaterial creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $tiposm=TipoMaterial::findOrFail($id);
        $tipopr=TipoPresentacion::orderBy('id')->get();
        return view('admin.material.tipomaterial.editar',compact('tiposm','tipopr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        $tipopr=TipoMaterial::findOrFail($id);
        $tipopr->update($request->all());
        return redirect(route('tipomaterial'))->with('mensaje','TipoPresentacion actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
