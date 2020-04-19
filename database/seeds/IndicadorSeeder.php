<?php

use Illuminate\Database\Seeder;
use App\Model\PCdetalle;

class IndicadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('pc_detalle')->delete();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 1;
        $pc_detalle->registro= 'Objetivos Estratégicos';
        $pc_detalle->indicador= 'Nivel de Cumplimiento de los Objetivos Estrategias';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 1;
        $pc_detalle->registro= 'Recursos Presupuestados';
        $pc_detalle->indicador= 'Eficiencia en la ejecución de los recursos';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 1;
        $pc_detalle->registro= 'Plan de Acción Anua';
        $pc_detalle->indicador= 'Cumplimiento del Plan de Acción Anual de cada área';
        $pc_detalle->save();

        //VRAMDOMMMMMMMMMMMMMMMMMMMMM

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 3;
        $pc_detalle->registro= 'Campañas de marketing';
        $pc_detalle->indicador= 'Retorno de la inversión';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 3;
        $pc_detalle->registro= 'Estrategias de marketing';
        $pc_detalle->indicador= 'Porcentaje de campañas publicitarias exitosas';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 3;
        $pc_detalle->registro= 'Campañas de marketing';
        $pc_detalle->indicador= 'Campañas nuevas';
        $pc_detalle->save();

        //KARLA

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 12;
        $pc_detalle->registro= 'Plan de calidad de la materia prima.';
        $pc_detalle->indicador= 'Materia prima correctamente recibida';
        $pc_detalle->save();
        
        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 12;
        $pc_detalle->registro= 'Plan de abastecimiento.';
        $pc_detalle->indicador= 'Cumplimiento de plan de suministros de materias primas';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 12;
        $pc_detalle->registro= 'Abastecimiento insuficiente.';
        $pc_detalle->indicador= 'Nivel de disponibilidad en acopio';
        $pc_detalle->save();

        //STEAFMI

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 18;
        $pc_detalle->registro= 'Reporte de satisfaccion';
        $pc_detalle->indicador= 'Porcentaje de satisfacción del cliente';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 18;
        $pc_detalle->registro= 'Reporte de producto ';
        $pc_detalle->indicador= 'Porcentaje de pérdidas por producto defectuoso';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 18;
        $pc_detalle->registro= 'Cemento deficiente ';
        $pc_detalle->indicador= 'Porcentaje de cementos que cumple el control de calidad  respecto a la producción total';
        $pc_detalle->save();

        //FATIMA

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 20;
        $pc_detalle->registro= 'Materiales almacenados';
        $pc_detalle->indicador= 'Porcentaje de materiales almacenados ';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 20;
        $pc_detalle->registro= 'Inventario de materiales';
        $pc_detalle->indicador= 'Nivel de rotación de materiales';
        $pc_detalle->save();

        $pc_detalle = new PCdetalle();
        $pc_detalle->proceso_caracterizacion_id= 20;
        $pc_detalle->registro= 'Almacenamiento adecuado';
        $pc_detalle->indicador= 'Porcentaje de utilización del espacio';
        $pc_detalle->save();
    }
}
