<?php

use Illuminate\Database\Seeder;
use App\Model\Subproceso;

class SubprocesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subproceso')->delete();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 1;
        $subproceso->nombre = 'Elaborar Estrategias';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 1;
        $subproceso->nombre = 'Gestion de normas internas';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 2;
        $subproceso->nombre = 'Marketing';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 2;
        $subproceso->nombre = 'Gestion de ventas';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 3;
        $subproceso->nombre = 'Preparacion y Desarrollo';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 3;
        $subproceso->nombre = 'Perforacion';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 3;
        $subproceso->nombre = 'Voladura y derribo';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 3;
        $subproceso->nombre = 'Cargo y Acarreo';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 3;
        $subproceso->nombre = 'Trituracion';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 3;
        $subproceso->nombre = 'Despacho';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 4;
        $subproceso->nombre = 'Planificacion y control de produccion';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 4;
        $subproceso->nombre = 'Recepcion y Almacenaje de Materia Prima';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 4;
        $subproceso->nombre = 'Trituracion';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 4;
        $subproceso->nombre = 'Calcinacion y Clinkerizacion';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 4;
        $subproceso->nombre = 'Molienda de Cemento';
        $subproceso->save();



        $subproceso = new Subproceso();
        $subproceso->proceso_id = 5;
        $subproceso->nombre = 'Envasado CPSAA';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 5;
        $subproceso->nombre = 'Despacho CPSAA';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 6;
        $subproceso->nombre = 'Control de calidad del cemento';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 7;
        $subproceso->nombre = 'Gestion de compras';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 7;
        $subproceso->nombre = 'Gestion de almacen';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 8;
        $subproceso->nombre = 'Seleccion y contratacion de personal';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 8;
        $subproceso->nombre = 'Capacitacion y Desarrollo';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 9;
        $subproceso->nombre = 'Programacion de Transporte';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 9;
        $subproceso->nombre = 'Control de Equipos de Transporte';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 9;
        $subproceso->nombre = 'Mantenimiento de Equipos de Transporte';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 10;
        $subproceso->nombre = 'Seguridad de la informacion';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 10;
        $subproceso->nombre = 'Mantenimiento de equipos de computo';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 10;
        $subproceso->nombre = 'Capacitar a los usuarios en las aplicaciones';
        $subproceso->save();

        $subproceso = new Subproceso();
        $subproceso->proceso_id = 10;
        $subproceso->nombre = 'Instalacion, configuracion y actualizacion del software';
        $subproceso->save();



    }
}
