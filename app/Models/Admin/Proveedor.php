<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "proveedor";
    protected $fillable = ['Nombre','NombreRepresentante','Telefonoepresentante','Email','PaisOrigen'];  
    protected $guarded = ['Id'];
}
