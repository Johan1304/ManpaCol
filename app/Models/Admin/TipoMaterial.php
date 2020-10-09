<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoMaterial extends Model
{
    protected $table = "tipomaterial";
    protected $fillable = ['Descripcion','IdTipoPresentacion'];  
    protected $guarded = ['id'];
    public $timestamps=false;

    public function tipoPresentacion(){
        return $this->belongsTo(TipoPresentacion::class,'IdTipoPresentacion');
    }
}
