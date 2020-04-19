<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table='pedido';

    protected $fillable=[
    	'id',
    	'fecha',
    ];

    public $timestamps = false;
}
