<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoMaterial extends Model
{
    protected $table = "tipomaterial";
    protected $fillable = ['Descripcion','TipoPresentacion'];  
    protected $guarded = ['Id'];
}
