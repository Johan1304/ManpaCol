<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table="entrada";
    protected $fillable=['IdProveedor','created_at','updated_at'];
    protected $guardered=['Id'];  
}
