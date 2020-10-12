<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SalidaReporteController extends Controller
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
    public function index(Request $request)
    {
        $tipo=$request->get('tipo');
        $buscar=$request->get('buscar');
        $fecha=$request->get('fecha');
        switch($tipo){
            case "Proveedor":
                $tipo="proveedor.Nombre";
            break;

            case "Material";
                $tipo="tipomaterial.descripcion";
            break;

            case "Cantidad":
                $tipo="detallessalida.Cantidad";
            break;
            case "Encargado":
                $tipo="usuario.name";
            break;
            case "Empleado":
                $tipo="empleado.Nombres";
            break;
        }
        
        if(isset($tipo,$buscar) && is_null($fecha)){
        $salida=DB::table('salida') 
        ->join ('empleado', 'empleado.id', '=', 'salida.IdEmpleado')
        ->join ('usuario', 'usuario.id', '=', 'salida.idencargado')
        ->join ('detallessalida', 'detallessalida.idSalida', '=', 'salida.id')
        ->join ('material', 'material.id', '=', 'detallessalida.idMaterial')
        ->join ('proveedor','proveedor.id', '=' , 'material.IdProveedor')
        ->join ('tipomaterial', 'tipomaterial.id','=','material.id')
        ->select ('proveedor.Nombre','salida.id','salida.created_at', 'usuario.name', 'empleado.Nombres', 'detallessalida.Cantidad', 'tipomaterial.Descripcion')
        ->where("$tipo",'like',"%$buscar%")
        ->orderBy('salida.created_at','desc')
        ->paginate(8);
        $tipo=$request->get('tipo');
        }else{if(isset($fecha) && is_Null($buscar)){
            $salida=DB::table('salida') 
            ->join ('empleado', 'empleado.id', '=', 'salida.IdEmpleado')
            ->join ('usuario', 'usuario.id', '=', 'salida.idencargado')
            ->join ('detallessalida', 'detallessalida.idSalida', '=', 'salida.id')
            ->join ('material', 'material.id', '=', 'detallessalida.idMaterial')
            ->join ('proveedor','proveedor.id', '=' , 'material.IdProveedor')
            ->join ('tipomaterial', 'tipomaterial.id','=','material.id')
            ->select ('proveedor.Nombre','salida.id','salida.created_at', 'usuario.name', 'empleado.Nombres', 'detallessalida.Cantidad', 'tipomaterial.Descripcion')
            ->whereDate('salida.created_at',"$fecha")
            ->orderBy('salida.created_at','desc')
            ->paginate(8);
            $tipo=$request->get('tipo');
        }else{if(isset($tipo,$buscar,$fecha)){
            $salida=DB::table('salida') 
            ->join ('empleado', 'empleado.id', '=', 'salida.IdEmpleado')
            ->join ('usuario', 'usuario.id', '=', 'salida.idencargado')
            ->join ('detallessalida', 'detallessalida.idSalida', '=', 'salida.id')
            ->join ('material', 'material.id', '=', 'detallessalida.idMaterial')
            ->join ('proveedor','proveedor.id', '=' , 'material.IdProveedor')
            ->join ('tipomaterial', 'tipomaterial.id','=','material.id')
            ->select ('proveedor.Nombre','salida.id','salida.created_at', 'usuario.name', 'empleado.Nombres', 'detallessalida.Cantidad', 'tipomaterial.Descripcion')
            ->whereDate('salida.created_at', "$fecha")  
            ->where("$tipo",'like',"%$buscar%")
            ->orderBy('salida.created_at','desc')
            ->paginate(8);
            $tipo=$request->get('tipo');
        }else{
            $salida=DB::table('salida') 
            ->join ('empleado', 'empleado.id', '=', 'salida.IdEmpleado')
            ->join ('usuario', 'usuario.id', '=', 'salida.idencargado')
            ->join ('detallessalida', 'detallessalida.idSalida', '=', 'salida.id')
            ->join ('material', 'material.id', '=', 'detallessalida.idMaterial')
            ->join ('proveedor','proveedor.id', '=' , 'material.IdProveedor')
            ->join ('tipomaterial', 'tipomaterial.id','=','material.id')
            ->select ('proveedor.Nombre','salida.id','salida.created_at', 'usuario.name', 'empleado.Nombres', 'detallessalida.Cantidad', 'tipomaterial.Descripcion')
            ->orderBy('salida.created_at','desc')
            ->paginate(8);
            $tipo=$request->get('tipo');
        }
            
        }
           
        }
        
        return view('usuario.reportes.salida',compact('salida','tipo','buscar','fecha'));
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
