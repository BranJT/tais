<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable=[
    	'empresa_id',
    	'nombre',
    	'imagen',
    	'nivel',
    	'dependencia',
    ];
}
