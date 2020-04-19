<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';

    protected $fillable= [
    	'id',
    	'nombre',
    	'imagen'
    ];
}