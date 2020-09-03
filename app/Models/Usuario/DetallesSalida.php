<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class DetallesSalida extends Model
{
    protected $table="detallessalida";
    protected $fillable=['idSalida','idMaterial','Cantidad'];
    
    public $timestamps=false;
}
