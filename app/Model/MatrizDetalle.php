<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatrizDetalle extends Model
{
    protected $table = 'matriz_detalle';

    protected $fillable= [
    	'id',
    	'matriz_priorizacion_id',
    	'proceso_id',
    	'matriz_parametro_id',
    	'puntaje'
    ];
    public $timestamps = false;

    public function getProceso()
    {
        return Proceso::where('id',$this->proceso_id)->first();
    }
}
