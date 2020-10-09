<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionPresentacion;
use App\Models\Admin\TipoPresentacion;

class TipoPresentacionController extends Controller
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
        $presentaciones=TipoPresentacion::orderBy('Id')->get();
        return view('admin.material.tipopresentacion.index', compact('presentaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $presentaciones=TipoPresentacion::orderBy('Id')->get();
        return view('admin.material.tipopresentacion.crear',compact('presentaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(ValidacionPresentacion $request)
    {
        TipoPresentacion::create($request->all());
        return back()->with('Mensaje','TipoPresentacion creado correctamente');
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
        $tipop=TipoPresentacion::findOrFail($id);
        return view('admin.material.tipopresentacion.editar',compact('tipop'));
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
        $tipopr=TipoPresentacion::findOrFail($id);
        $tipopr->update($request->all());
        return redirect(route('TipoPresentacion'))->with('mensaje','TipoPresentacion actualizado correctamente');
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
