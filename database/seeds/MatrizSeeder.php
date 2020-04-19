<?php

use Illuminate\Database\Seeder;
use App\Model\MatrizPriorizacion;
use App\Model\MatrizParametro;
use App\Model\MatrizProceso;
use App\Model\MatrizDetalle;

class MatrizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('matriz_priorizacion')->delete();
        \DB::table('matriz_parametro')->delete();
        \DB::table('matriz_proceso')->delete();

        $matriz = new MatrizPriorizacion();
        $matriz->empresa_id = 1;
        $matriz->unidad_negocio_id = 1;
        $matriz->mapa_proceso_id = 1;
        $matriz->nombre= 'Matriz Priorizacion CPSA';
        $matriz->save();

        $matrizParametro = new MatrizParametro();
        $matrizParametro->matriz_priorizacion_id = 1;
        $matrizParametro->nombre = 'Contribucion al objetivo estrategico';
        $matrizParametro->descripcion = 'Apunta al cumplimiento de objetivos trazados de manera estrategica en base al cumplimiento de los objetivos especificos, para obtener buenos resultados.';
        $matrizParametro->peso = 5;
        $matrizParametro->save();

        $matrizParametro = new MatrizParametro();
        $matrizParametro->matriz_priorizacion_id = 1;
        $matrizParametro->nombre = 'Impacto en el negocio';
        $matrizParametro->descripcion = 'La manera que impacta cada proceso en el desarrollo de las actividades.';
        $matrizParametro->peso = 4;
        $matrizParametro->save();

        $matrizParametro = new MatrizParametro();
        $matrizParametro->matriz_priorizacion_id = 1;
        $matrizParametro->nombre = 'Impacto en el cliente';
        $matrizParametro->descripcion = 'La empresa depende muchos de sus clientes, es necesario tener un impacto positivo en éstos para obtener su continuidad en la compra de nuestros productos.';
        $matrizParametro->peso = 4;
        $matrizParametro->save();

        $matrizParametro = new MatrizParametro();
        $matrizParametro->matriz_priorizacion_id = 1;
        $matrizParametro->nombre = 'Exito a corto tiempo';
        $matrizParametro->descripcion = 'Mientras un proceso tenga éxito en el menor tiempo posible, más beneficioso para la empresa.';
        $matrizParametro->peso = 1;
        $matrizParametro->save();

        $matrizProceso = new MatrizProceso();
        $matrizProceso->matriz_priorizacion_id = 1;
        $matrizProceso->proceso_id = 1;
        $matrizProceso->nombre = 'Gestion de la Direccion';
        $matrizProceso->save();

        $matrizProceso = new MatrizProceso();
        $matrizProceso->matriz_priorizacion_id = 1;
        $matrizProceso->proceso_id = 2;
        $matrizProceso->nombre = 'Comercializacion';
        $matrizProceso->save();

        $matrizProceso = new MatrizProceso();
        $matrizProceso->matriz_priorizacion_id = 1;
        $matrizProceso->proceso_id = 4;
        $matrizProceso->nombre = 'Fabricacion del Cemento';
        $matrizProceso->save();

        $matrizProceso = new MatrizProceso();
        $matrizProceso->matriz_priorizacion_id = 1;
        $matrizProceso->proceso_id = 6;
        $matrizProceso->nombre = 'Control de Calidad';
        $matrizProceso->save();

        $matrizProceso = new MatrizProceso();
        $matrizProceso->matriz_priorizacion_id = 1;
        $matrizProceso->proceso_id = 7;
        $matrizProceso->nombre = 'Logistica';
        $matrizProceso->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 1;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =5;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 1;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =5;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 1;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 1;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 2;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 2;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 2;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =5;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 2;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 3;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 3;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 3;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 3;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 4;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 4;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 4;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 4;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 5;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 5;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 5;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 5;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 6;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 6;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 6;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 6;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 7;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 7;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 7;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 7;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 8;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 8;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 8;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =2;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 8;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 9;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 9;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 9;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 9;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();

        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 10;
        $matrizDetalle->matriz_parametro_id = 1;
        $matrizDetalle->puntaje =4;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 10;
        $matrizDetalle->matriz_parametro_id = 2;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 10;
        $matrizDetalle->matriz_parametro_id = 3;
        $matrizDetalle->puntaje =3;
        $matrizDetalle->save();
        $matrizDetalle = new MatrizDetalle();
        $matrizDetalle->matriz_priorizacion_id = 1;
        $matrizDetalle->proceso_id = 10;
        $matrizDetalle->matriz_parametro_id = 4;
        $matrizDetalle->puntaje =2;
        $matrizDetalle->save();
    }
}
