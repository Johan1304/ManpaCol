<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table="material";
    protected $fillable=['IdTipoMaterial','Existencias','Color','IdTextura','IdProveedor'];
    protected $guardered=['Id'];
    public $timestamps=false;
}
