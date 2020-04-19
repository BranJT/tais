<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProcesoCaracterizacion extends Model
{
    protected $table = 'proceso_caracterizacion';

    protected $fillable=[
    	'mapa_proceso_id',
        'subproceso_id',
        'nombre',
    	'responsable',
    	'objetivo',
    	'alcance',
    	'requisitosNormativos',
    	'requisitosAplicable',
    	'entradasCriticas',
    	'actividadesRealizadas',
    	'medidasControl',
    	'salidasCriticas'
    ];
}
