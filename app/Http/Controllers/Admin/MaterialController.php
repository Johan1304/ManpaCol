<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Color;
use App\Models\Admin\Material;
use App\Models\Admin\Proveedor;
use App\Models\Admin\Textura;
use App\Models\Admin\TipoMaterial;
use App\Models\Usuario\MaterialDanado;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class MaterialController extends Controller
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
        // $materiales=DB::table('material')
        // ->join('tipomaterial', 'material.IdTipoMaterial', '=', 'tipomaterial.id')
        // ->join('proveedor', 'material.IdProveedor', '=', 'proveedor.id')
        // ->select('material.*', 'tipomaterial.Descripcion','proveedor.Nombre')
        // ->get();
        $materiales=Material::orderBy('id')->get();
        
        
        return view('admin.material.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $tipomateriales=TipoMaterial::orderBy('id')->get();
        $colores=Color::orderBy('Descripcion')->get();
        $texturas=Textura::orderBy('Descripcion')->get();
        $provs=Proveedor::orderBy('Id')->get();
        return view('admin.material.crear', compact('tipomateriales','colores','texturas','provs'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function guardar(Request $request)
    {
        $idTipoMaterial=TipoMaterial::where('Descripcion',$request->get('IdTipoMaterial'))->first();
        $idColor=Color::where('descripcion',$request->get('Color'))->first();
        $idTextura=Textura::where('descripcion',$request->get('IdTextura'))->first();;
        $idProveedor=Proveedor::where('Nombre',$request->get('IdProveedor'))->first();;
        Material::create([
            'IdTipoMaterial' => $idTipoMaterial->id,
            'Existencias' => $request->get('Existencias'),
            'color_id' => $idColor->id,
            'IdTextura' => $idTextura->id,
            'IdProveedor' => $idProveedor->id
        ]);
        return redirect('admin/material');
    }







    public function excel(Request $request)
    {
        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/datos/material/',$file->getClientOriginalName());
               $request->id=$file->getClientOriginalName();
               $request->IdTipoMaterial=$file->getClientOriginalName();
               $request->Existencias=$file->getClientOriginalName();
               $request->Color=$file->getClientOriginalName();
               $request->IdTextura=$file->getClientOriginalName();
               $request->IdProveedor=$file->getClientOriginalName();
        }
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
