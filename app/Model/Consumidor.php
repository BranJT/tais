<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    protected $table = 'consumidor';

    protected $fillable=[
    	'empresa_id',
    	'nombre',
    	'imagen',
    	'nivel',
    	'dependencia',
    ];
}
