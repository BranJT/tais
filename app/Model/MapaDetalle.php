<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MapaDetalle extends Model
{
    protected $table = 'mapa_detalle';

    protected $fillable= [
    	'id',
    	'mapa_proceso_id',
    	'proceso_id',
        'estado'
    ];
    public $timestamps = false;

    public function getProceso()
    {
        return Proceso::where('id',$this->proceso_id)->first();
    }

    public function getSubproceso()
    {
        return Subproceso::where('proceso_id',$this->proceso_id)->first();
    }

}
