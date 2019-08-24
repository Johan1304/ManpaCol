<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table="tipodocumento";
    protected $fillable = ['Descripcion'];  
    protected $guarded = ['Id'];
    protected $timestamp = false;
}
