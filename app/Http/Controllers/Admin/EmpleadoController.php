<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Empleado;
use App\Models\Admin\TipoDocumento;

class EmpleadoController extends Controller
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
        $empleados=Empleado::orderBy('Id')->get();
        return view('admin.empleado.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $documentos=TipoDocumento::orderBy('Descripcion')->get();    
        
        return view('admin.empleado.crear', compact('documentos'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        Empleado::create($request->all());
        return redirect('admin/empleado/crear')->with('Mensaje','Color creado correctamente');


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
        $empleado=Empleado::findOrFail($id);
        $documentos=TipoDocumento::orderBy('Descripcion')->get();  
        return view('admin.empleado.editar', compact('empleado','documentos')); 
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
        $validacion=$request->validate([
            
            'NumeroDoc' => 'required|unique:empleado,NumeroDoc,'.$id,
            
        ]);
        Empleado::findOrFail($id)->update($request->all());
        return redirect(route('empleado'))->with('mensaje','actualizado correctamente'); 
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
