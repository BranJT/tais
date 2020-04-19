<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PCdetalle extends Model
{
    protected $table='pc_detalle';

    protected $fillable=[
    	'proceso_caracterizacion_id',
    	'registro',
    	'indicador'
    ];
}
