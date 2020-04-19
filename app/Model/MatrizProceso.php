<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatrizProceso extends Model
{
    protected $table='matriz_proceso';

    protected $fillable=[
    	'id',
    	'matriz_priorizacion_id',
    	'proceso_id',
    	'nombre'
    ];

   	public $timestamps= false;
}
