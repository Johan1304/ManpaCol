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
        return $this->belongsTo(TipoMaterial::class,'IdTipoMaterial');
    }
}
