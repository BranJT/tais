<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'proceso';

    protected $fillable= [
    	'id',
    	'empresa_id',
    	'nombre',
    	'tipo'
    ];

    public function getSubProcesos()
    {
        return Subproceso::where('proceso_id',$this->id)->first();
    }
}
