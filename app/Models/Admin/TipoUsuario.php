<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    protected $table="tipousuario";
    protected $fillable = ['Descripcio'];  
    protected $guarded = ['Id'];
    protected $timestamp = false;
}
