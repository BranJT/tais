<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor';

    protected $fillable=[
    	'empresa_id',
    	'nombre',
    	'imagen',
    	'nivel',
    	'dependencia',
    ];
}
