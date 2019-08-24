<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table="tipousuario";
    protected $fillable = ['Descripcion'];  
    protected $guarded = ['Id'];
    protected $timestamp = false;
}
