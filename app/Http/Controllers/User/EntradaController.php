<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario\DetallesEntrada;
use App\Models\Usuario\Entrada ;
use App\Models\Usuario\Material;
use Illuminate\Support\Facades\DB;

class EntradaController extends Controller
{ 

    public function __construct()
    {
        // $this->middleware('checkrole2');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $materiales=Material::orderBy('Id')->get();
        // $materiales=DB::table('material')
        // ->join('tipomaterial', 'material.IdTipoMaterial', '=', 'tipomaterial.id')
        // ->join('proveedor', 'material.IdProveedor', '=', 'proveedor.id')
        // ->select('material.*', 'tipomaterial.Descripcion','proveedor.Nombre')        
        // ->get();
        $materiales=Material::orderBy('id')->get();

        return view('usuario.entrada.index', compact('materiales','dato'));
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
    // // $dato=$request->get('Cantidad');
    // $material=Material::findOrFail($id);
    // // $total=$material->Existencias+$dato;
    // $material->Exitencias = $request->get('Existencias');

    // $material->save();
 
    // return redirect('usuario.entrada.index');

    // $user=Material::findOrFail($id);
    // $user->update($request->all());
    // return redirect(route('entrada'))->with('mensaje','Usuario actualizado correctamente');  

    $idprov=Material::findOrFail($id);
   
    $dato=$request->get('Existencias');
    DB::table('material') ->where('id', $id)->increment('Existencias', $dato);
    
    // $idprov=DB::table('material')->select('IdProveedor')->where('id',$id);

    Entrada::create([
         'IdProveedor' => $idprov->IdProveedor 
    ]);
    $entrada=Entrada::orderBy('created_at', 'desc')->first();
    DetallesEntrada::create([
        'idEntrada' => $entrada->id,
        'idMaterial' => $id,
        'Cantidad' =>$dato
    ]);

    //  $entrada->save();

     return redirect(route('entrada'))->with('mensaje','Usuario actualizado correctamente');  
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
