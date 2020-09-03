<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class DetallesEntrada extends Model
{
    protected $table="detallesentrada";
    protected $fillable=['idEntrada','idMaterial','Cantidad'];
    // protected $guardered=['IdEntrada','IdMaterial'];
    public $timestamps=false;
}
