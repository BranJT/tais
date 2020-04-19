<?php

use Illuminate\Database\Seeder;
use App\Model\ProcesoMapa;

class ProcesoMapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('proceso_mapa')->delete();

        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= 1;
        $procesoMapa->subproceso_id= 1;
        $procesoMapa->nombre= 'Mapa Estrategico Elaborar Estrategias';
        $procesoMapa->imagen= 'mapaElaborarEstrategias.png';  // adjuntar imagen de tu mapa estratigco
        $procesoMapa->save();

        //sddasd
        
        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= 1;
        $procesoMapa->subproceso_id= 3;
        $procesoMapa->nombre= 'Mapa estrategico Marketing';
        $procesoMapa->imagen= 'ME_marketing.png';  // adjuntar imagen de tu mapa estratigco
        $procesoMapa->save();
        /*
        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= 1;
        $procesoMapa->subproceso_id= 11;
        $procesoMapa->nombre= 'Mapa estrategico Planificacion';
        $procesoMapa->imagen= 'ME_Planificacion.png';  // adjuntar imagen de tu mapa estratigco
        $procesoMapa->save();*/

        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= 1;
        $procesoMapa->subproceso_id= 12;
        $procesoMapa->nombre= 'MApa estrategico RecepcionMP';
        $procesoMapa->imagen= 'ME_RecepcionMP.png';  // adjuntar imagen de tu mapa estratigco
        $procesoMapa->save();

        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= 1;
        $procesoMapa->subproceso_id= 18;
        $procesoMapa->nombre= 'Mapa estrategico Control';
        $procesoMapa->imagen= 'mapaControl.png';  // adjuntar imagen de tu mapa estratigco
        $procesoMapa->save();

        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= 1;
        $procesoMapa->subproceso_id= 20;
        $procesoMapa->nombre= 'Mapa estrategico Gestion almacen';
        $procesoMapa->imagen= 'ME_Gestionalmacen.png';  // adjuntar imagen de tu mapa estratigco
        $procesoMapa->save();


    }
}
