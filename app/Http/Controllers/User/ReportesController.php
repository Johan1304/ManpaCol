<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $entrada=DB::table('entrada')
         ->join ('proveedor', 'proveedor.id', '=', 'entrada.idProveedor') 
         ->join ('detallesentrada', 'detallesentrada.idEntrada', '=', 'entrada.id') 
          ->join ('material', 'material.id', '=', 'detallesentrada.idMaterial')
          ->join ('tipomaterial', 'tipomaterial.id','=', 'material.idTipomaterial')
          ->select ('entrada.id', 'proveedor.nombre', 'proveedor.TelefonoRepresentante', 'proveedor.Email', 'tipomaterial.descripcion', 'detallesentrada.cantidad', 'entrada.created_at')
         ->get();
        return view('usuario.reportes.index',compact('entrada'));
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
