<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PSdetalle extends Model
{
    protected $table='ps_detalle';

    protected $fillable=[
    	'proceso_seguimiento_id',
    	'actividad',
    	'tipo',
    	'tiempo'
    ];

    public $timestamps = false;
}
