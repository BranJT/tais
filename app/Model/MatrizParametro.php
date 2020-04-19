<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatrizParametro extends Model
{
    protected $table = 'matriz_parametro';

    protected $fillable= [
    	'id',
    	'matriz_priorizacion_id',
    	'nombre',
    	'descripcion',
    	'peso'
    ];

    public $timestamps = false;
}
