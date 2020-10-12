<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Empleado as AppEmpleado;
use App\Models\Admin\Material;
use App\Models\Admin\Usuario;
use App\Models\Empleado;
use App\Models\Usuario\DetallesSalida;
use App\Models\Usuario\Entrada;
use App\Models\Usuario\Salida;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class salidaController extends Controller
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
        
        $material=Material::orderBy('id')->get();
        $empleado=Empleado::orderBy('Id')->get();
        return view('usuario.salida.index',compact('material','empleado'));
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

        if(Empleado::where('NumeroDoc', '=', $request->get('NumeroDoc'))->exists()){
            $dato=$request->get('Existencias');
            $doc=$request->get('NumeroDoc');
            $idE=Empleado::orderBy('Id')->where('NumeroDoc',$doc)->first();
            $salida=Salida::orderBy('created_at', 'desc')->first();
            DB::table('material')->where('id', $id)->decrement('Existencias', $dato);

            Salida::create([
                'IdEmpleado' => $idE->Id,
                'IdEncargado' => auth()->id()

            ]);
            $salida=Salida::orderBy('created_at', 'desc')->first();


            DetallesSalida::create([
                'idSalida' => $salida->id,
                'idMaterial' => $id,
                'Cantidad' =>$dato
            ]);
    
            return redirect(route('salida'))->with('mensaje','Usuario actualizado correctamente');
        }else{
            return redirect(route('salida'))->with('error','El empleado no está registrado');
         }
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
