<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SalidaReporteController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkrole2');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salida=DB::table('salida') 
        ->join ('empleado', 'empleado.id', '=', 'salida.IdEmpleado')
        ->join ('usuario', 'usuario.id', '=', 'salida.idencargado')
        ->join ('detallessalida', 'detallessalida.idSalida', '=', 'salida.id')
        ->join ('material', 'material.id', '=', 'detallessalida.idMaterial')
        ->join ('tipomaterial', 'tipomaterial.id','=','material.id')
        ->select ('salida.created_at', 'usuario.name', 'empleado.Nombres', 'detallessalida.Cantidad', 'tipomaterial.Descripcion')
        ->get();
        return view('usuario.reportes.salida',compact('salida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
