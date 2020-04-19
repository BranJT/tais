<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProcesoSeguimiento extends Model
{
    protected $table = 'proceso_seguimiento';

    protected $fillable=[
    	'mapa_proceso_id',
        'subproceso_id',
        'nombre',
        'flujo',
        'tipo'
    ];
}
