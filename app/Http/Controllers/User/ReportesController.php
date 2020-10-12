<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Doctrine\CarbonType;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
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
        $buscar= $request->get('buscar');
        $tipo= $request->get('tipo');
        $fecha= $request->get('fecha');
        
        switch($tipo){
            case "Proveedor":
                $tipo="proveedor.Nombre";
            break;

            case "Material";
                $tipo="tipomaterial.descripcion";
            break;

            case "Canditidad":
                $tipo="detallesentrada.Cantidad";
            break;
        }
        
        if(isset($tipo,$buscar) && is_Null($fecha)){
         $entrada=DB::table('entrada')         
         ->join ('proveedor', 'proveedor.id', '=', 'entrada.IdProveedor') 
         ->join ('detallesentrada', 'detallesentrada.idEntrada', '=', 'entrada.id') 
         ->join ('material', 'material.id', '=', 'detallesentrada.idMaterial')
         ->join ('tipomaterial', 'tipomaterial.id','=', 'material.idTipomaterial')
         ->join ('tipopresentacion', 'tipopresentacion.id','=', 'tipomaterial.IdTipoPresentacion')
         ->select ('entrada.id', 'proveedor.Nombre', 'proveedor.TelefonoRepresentante', 'proveedor.Email', 'tipomaterial.descripcion', 'detallesentrada.cantidad', 'entrada.created_at','tipopresentacion.UnidadMedida')
         ->where($tipo,'like',"%$buscar%")
         ->orderBy('entrada.created_at','desc')
         ->paginate(15);
         $tipo= $request->get('tipo');
        
        }
        else{
            if(isset($fecha) && is_Null($buscar)){
                $entrada=DB::table('entrada')         
                ->join ('proveedor', 'proveedor.id', '=', 'entrada.IdProveedor') 
                ->join ('detallesentrada', 'detallesentrada.idEntrada', '=', 'entrada.id') 
                ->join ('material', 'material.id', '=', 'detallesentrada.idMaterial')
                ->join ('tipomaterial', 'tipomaterial.id','=', 'material.idTipomaterial')
                ->join ('tipopresentacion', 'tipopresentacion.id','=', 'tipomaterial.IdTipoPresentacion')
                ->select ('entrada.id', 'proveedor.Nombre', 'proveedor.TelefonoRepresentante', 'proveedor.Email', 'tipomaterial.descripcion', 'detallesentrada.cantidad', 'entrada.created_at','tipopresentacion.UnidadMedida')
                ->whereDate('entrada.created_at', "$fecha")  
                                
                ->orderBy('entrada.created_at','desc')
                ->paginate(15);
                $tipo= $request->get('tipo');
            }
        else{if(isset($tipo,$buscar,$fecha)){
            $entrada=DB::table('entrada')         
            ->join ('proveedor', 'proveedor.id', '=', 'entrada.IdProveedor') 
            ->join ('detallesentrada', 'detallesentrada.idEntrada', '=', 'entrada.id') 
            ->join ('material', 'material.id', '=', 'detallesentrada.idMaterial')
            ->join ('tipomaterial', 'tipomaterial.id','=', 'material.idTipomaterial')
            ->join ('tipopresentacion', 'tipopresentacion.id','=', 'tipomaterial.IdTipoPresentacion')
            ->select ('entrada.id', 'proveedor.Nombre', 'proveedor.TelefonoRepresentante', 'proveedor.Email', 'tipomaterial.descripcion', 'detallesentrada.cantidad', 'entrada.created_at','tipopresentacion.UnidadMedida')
            ->whereDate('entrada.created_at', "$fecha")  
            ->where("$tipo",'like',"%$buscar%")                     
            ->orderBy('entrada.created_at','desc')
            ->paginate(15);
            $tipo= $request->get('tipo');
           
           }else{$entrada=DB::table('entrada')         
            ->join ('proveedor', 'proveedor.id', '=', 'entrada.IdProveedor') 
            ->join ('detallesentrada', 'detallesentrada.idEntrada', '=', 'entrada.id') 
            ->join ('material', 'material.id', '=', 'detallesentrada.idMaterial')
            ->join ('tipomaterial', 'tipomaterial.id','=', 'material.idTipomaterial')
            ->join ('tipopresentacion', 'tipopresentacion.id','=', 'tipomaterial.IdTipoPresentacion')
            ->select ('entrada.id', 'proveedor.Nombre', 'proveedor.TelefonoRepresentante', 'proveedor.Email', 'tipomaterial.descripcion', 'detallesentrada.cantidad', 'entrada.created_at','tipopresentacion.UnidadMedida')
            ->orderBy('entrada.created_at','desc')
            ->paginate(15);
            $tipo= $request->get('tipo');}

        }
    }
        
        
        return view('usuario.reportes.index',compact('entrada','tipo','buscar','fecha'));
    
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
