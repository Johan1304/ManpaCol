<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table="material";
    protected $fillable=['IdTipoMaterial','Existencias','color_id','IdTextura','IdProveedor'];
    protected $guardered=['id'];
    public $timestamps=false;

    public function tipoMaterial(){
        return $this->belongsTo('App\Models\Admin\TipoMaterial','IdTipoMaterial');
    }
    public function color(){
        return $this->belongsTo('App\Models\Admin\Color');
    }

    public function textura(){
        return $this->belongsTo(Textura::class,'IdTextura');
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class,'IdProveedor');
    }
}
