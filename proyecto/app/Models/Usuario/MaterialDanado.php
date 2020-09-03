<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class MaterialDanado extends Model
{
    protected $table="materialdaniado";
    protected $fillable=['idMaterial','Cantidad','Descripcion'];
    
    
    public $timestamps=false;
}
