<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatrizPriorizacion extends Model
{
    protected $table = 'matriz_priorizacion';

    protected $fillable= [
    	'id',
    	'empresa_id',
    	'unidad_negocio_id',
    	'mapa_proceso_id',
    	'nombre'
    ];
}
