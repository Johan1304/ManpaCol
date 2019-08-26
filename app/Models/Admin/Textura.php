<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Textura extends Model
{
    protected $table = "texturapapel";
    protected $fillable = ['Descripcion'];  
    protected $guarded = ['Id'];
    public $timestamps=false;
}
