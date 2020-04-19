<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subproceso extends Model
{
    protected $table = 'subproceso';

    protected $fillable= [
    	'id',
    	'proceso_id',
    	'nombre'
    ];

    public function getDetalle($id)
    {
        return Subproceso::where('proceso_id',$id)->get();
    }

    public function getProcesoPadre()
    {
        return Proceso::where('id',$this->proceso_id)->first();
    }
}
