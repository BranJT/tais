<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UnidadNegocio extends Model
{
    protected $table = 'unidad_negocio';

    protected $fillable= [
    	'id',
    	'empresa_id',
    	'nombre',
    	'descripcion',
    ];
}
