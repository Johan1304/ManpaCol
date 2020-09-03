<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    protected $table="tipousuario";
    protected $fillable = ['Descripcion'];  

    protected $timestamp = false;
}
