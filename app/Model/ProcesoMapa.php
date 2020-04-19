<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProcesoMapa extends Model
{
    protected $table = 'proceso_mapa';

    protected $fillable=[
    	'mapa_proceso_id',
        'subproceso_id',
        'nombre',
        'imagen'
    ];
}
