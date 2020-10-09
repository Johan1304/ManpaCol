<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoPresentacion extends Model
{
    protected $table = "tipopresentacion";
    protected $fillable = ['Descripcion','Cantidad','UnidadMedida'];  
    protected $guarded = ['id'];
    public $timestamps=false;
}
