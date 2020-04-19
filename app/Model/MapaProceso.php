<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MapaProceso extends Model
{
    protected $table = 'mapa_proceso';

    protected $fillable= [
    	'id',
    	'empresa_id',
    	'unidad_negocio_id',
    	'nombre',
    	'entrada',
    	'salida'
    ];
}
