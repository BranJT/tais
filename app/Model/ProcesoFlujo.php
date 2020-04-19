<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProcesoFlujo extends Model
{
    protected $table = 'proceso_flujo';

    protected $fillable=[
    	'mapa_proceso_id',
        'subproceso_id',
        'nombre',
        'tipo',
    	'flujo'
    ];
}
