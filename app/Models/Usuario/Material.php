<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table="material";
    protected $fillable=['IdTipoMaterial','Existencias','color_id','IdTextura','IdProveedor'];
    protected $guardered=['id'];
    public $timestamps=false;
}
