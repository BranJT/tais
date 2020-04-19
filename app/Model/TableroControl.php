<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TableroControl extends Model
{
    protected $table = 'tablero_control';

    protected $fillable= [
    	'id',
    	'pc_detalle_id',
    	'objetivo',
    	'metaRojo',
    	'metaAmarillo',
    	'metaVerde',
    	'iniciativas',
    	'responsable'

    ];
    public $timestamps = false;
}
