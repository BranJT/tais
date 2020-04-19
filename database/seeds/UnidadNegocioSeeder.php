<?php

use Illuminate\Database\Seeder;
use App\Model\UnidadNegocio;

class UnidadNegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('unidad_negocio')->delete();

        $unidad_negocio = new UnidadNegocio();
        $unidad_negocio->empresa_id = 1;
        $unidad_negocio->nombre = 'General';
        $unidad_negocio->descripcion = 'Fabricacion de cemento';
        $unidad_negocio->save();
    }
}
