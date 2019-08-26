<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Textura extends Model
{
    protected $table = "textura";
    protected $fillable = ['Descripcion'];  
    protected $guarded = ['Id'];
}
