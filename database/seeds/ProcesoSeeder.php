<?php

use Illuminate\Database\Seeder;
use App\Model\Proceso;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('proceso')->delete();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Gestion de la Direccion';
        $proceso->tipo = 'estrategico';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Comercializacion';
        $proceso->tipo = 'primario';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Explotacion de canteras';
        $proceso->tipo = 'primario';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Fabricacion del Cemento';
        $proceso->tipo = 'primario';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Envasado y Despacho';
        $proceso->tipo = 'primario';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Control de Calidad';
        $proceso->tipo = 'apoyo';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Logistica';
        $proceso->tipo = 'apoyo';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Recursos Humanos';
        $proceso->tipo = 'apoyo';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Transporte';
        $proceso->tipo = 'apoyo';
        $proceso->save();

        $proceso= new Proceso();
        $proceso->empresa_id = 1;
        $proceso->nombre = 'Sistemas';
        $proceso->tipo = 'apoyo';
        $proceso->save();

    }
}
