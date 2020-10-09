<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedor";
    protected $fillable = ['Nombre','NombreRepresentante','TelefonoRepresentante','Email','PaisOrigen'];  
    protected $guarded = ['id'];
    public $timestamps=false;
}
