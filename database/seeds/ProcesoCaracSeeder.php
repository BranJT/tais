<?php

use Illuminate\Database\Seeder;
use App\Model\ProcesoCaracterizacion;

class ProcesoCaracSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('proceso_caracterizacion')->delete();
        //SOSA

        $procesoCarac = new ProcesoCaracterizacion();
        $procesoCarac->mapa_proceso_id = 1;
        $procesoCarac->subproceso_id = 1;
        $procesoCarac->nombre = 'Elaborar Estrategias';
        $procesoCarac->responsable = 'Gerente General';
        $procesoCarac->objetivo = 'Formular los planes estratégicos que conduzcan al logro de objetivos, asi como los lineamientos y políticas institucionales para asegurar el cumplimiento con la misión y visión institucional.';
        $procesoCarac->alcance = 'Inicia con la identificación e inclusión de las disposiciones de tipo legal para la institución, hasta la elaboración de estrategias el cual se difunde a todos los procesos..';
        $procesoCarac->requisitosNormativos = 'Directivas, Políticas Institucionales, Manual de organizaciones, Reglamento Interno de Trabajo, Norma ISO 9001.';
        $procesoCarac->requisitosAplicable = 'ccc';
        $procesoCarac->entradasCriticas = 'Objetivos estratégicos Institucionales, Equipo Directivo';
        $procesoCarac->actividadesRealizadas = 'Elaboración de Estrategias';
        $procesoCarac->medidasControl = 'Procedimiento para la elaboración de Estrategias, Procedimiento Revisión por la Dirección';
        $procesoCarac->salidasCriticas = 'Incumplimiento de las estratégias';
        $procesoCarac->save();

        //Marketimg
        $procesoCarac = new ProcesoCaracterizacion();
        $procesoCarac->id=3;
        $procesoCarac->mapa_proceso_id = 1;
        $procesoCarac->subproceso_id = 3;
        $procesoCarac->nombre = 'Marketing';
        $procesoCarac->responsable = 'Jefe de Marketing';
        $procesoCarac->objetivo = 'Brindar estrategias de marketing a la empresa para otorgar a la empresa ventaja comercial frente a sus competidores implementadas mediante campañas publicitarias';
        $procesoCarac->alcance = 'El proceso inicia cuando se requiere nuevas ideas en el ambito comercial mediante las estrategias de mercado y finaliza con campañas de marketing y su impacto en la andar de la empresa';
        $procesoCarac->requisitosNormativos = 'Plan estrategico empresarial,Ley de proteccion de ideas';
        $procesoCarac->requisitosAplicable = 'Gestion estrategica,gestion de datos personales';
        $procesoCarac->entradasCriticas = 'Solicitud de nuevas campañas de marketing, Requerimientos del mercado, Listado de necesidades del cliente';
        $procesoCarac->actividadesRealizadas = 'Lineamiento de estrategias de mercado, Generacion, establecimiento de estrategias de mercado';
        $procesoCarac->medidasControl = 'Control de estrategias mercado, Ideas para campañas publicitarias';
        $procesoCarac->salidasCriticas = 'Lista de estrategias de mercado establecidas, Reporte de seguimiento a las estrategias';
        $procesoCarac->save();

        $procesoCarac = new ProcesoCaracterizacion();
        $procesoCarac->id=6;
        $procesoCarac->mapa_proceso_id = 1;
        $procesoCarac->subproceso_id = 12;
        $procesoCarac->nombre = 'Recepción y Almacenamiento de Materia Prima';
        $procesoCarac->responsable = 'Jefe de Logistica';
        $procesoCarac->objetivo = 'Garantizar la recepción y almacenamiento de materias pimas de acuerdo al plan del area de suministro';
        $procesoCarac->alcance = 'El proceso se inicia cuando se requiere el abastecimiento de materia prima para la fabricación del cemento y derivados';
        $procesoCarac->requisitosNormativos = 'Plan de pedido de materia prima';
        $procesoCarac->requisitosAplicable = 'Gestión de registros MP';
        $procesoCarac->entradasCriticas = 'Requerimiento de suministros de materia prima,Materia Prima disponible para ser transportadas,Plan de abastecimiento de materias prima,Especificaciones de materia prima.';
        $procesoCarac->actividadesRealizadas = 'Tranportar la materia prima para la produccion de cemento (yeso, ceniza, clinker,etc.),Seguimiento y ajuste al plan de abastecimiento,Recepcion de las guías de despacho.';
        $procesoCarac->medidasControl = 'Control de volumenes según plan de abastecimiento,Segimiento del análisis de calidad';
        $procesoCarac->salidasCriticas = 'Materias primas disponibles para descarga, en centros de acopio o silos para su proceso de producción.';
        $procesoCarac->save();

        $procesoCarac = new ProcesoCaracterizacion();
        $procesoCarac->id=10;
        $procesoCarac->mapa_proceso_id = 1;
        $procesoCarac->subproceso_id = 18;
        $procesoCarac->nombre = 'Control de Calidad del cemento';
        $procesoCarac->responsable = 'Superintendente de calidad ';
        $procesoCarac->objetivo = 'Establecer mecanismos  evaluación y verificación,que permitan cumplir con las especificaciones exigidas por el cliente de acuerdo a las normas tecnicas ';
        $procesoCarac->alcance = 'Inicia con la toma de muestra del cemento, incluye control de cumplimiento de la NTP y concluye con Control de calidad del cemento hecha ';
        $procesoCarac->requisitosNormativos = 'ISO 9001, La Norma Técnica Peruana (NTP) y los Estándares Americanos de la American Society for Testing and Materials (ASTM por sus siglas en inglés)';
        $procesoCarac->requisitosAplicable = 'Sistema de Aseguramiento de la Calidad (SAC)';
        $procesoCarac->entradasCriticas = 'Requerimientos de la MP, Especificacione tecnicas, Insumos quimicos  ';
        $procesoCarac->actividadesRealizadas = 'Extracción de muestras  en la fabrica durante la producción, en los depósitos y en los almacenes de la empresa.';
        $procesoCarac->medidasControl = 'Mantenimiento preventivo de las instalaciones . Establecer los parametros para el control del cemento.';
        $procesoCarac->salidasCriticas = 'Liberación del cemento cumple con los estandares de calidad de acuerdo a la norma internacional. ';
        $procesoCarac->save();

        $procesoCarac = new ProcesoCaracterizacion();
        $procesoCarac->id=12;
        $procesoCarac->mapa_proceso_id = 1;
        $procesoCarac->subproceso_id = 20;
        $procesoCarac->nombre = 'Gestion de almacen';
        $procesoCarac->responsable = 'Jefe de almacén';
        $procesoCarac->objetivo = 'Asegurar el almacenamiento de materiales en las mejores condiciones y el control de inventarios.';
        $procesoCarac->alcance = 'Inicio: Recepción de materiales, Incluye: Verificación de materiales y la aprobación de la factura de los proveedores, Termina: Almacenamiento de materiales y actualización del inventario';
        $procesoCarac->requisitosNormativos = 'ISO 9001:2015';
        $procesoCarac->requisitosAplicable = 'Requisitos del cliente interno ';
        $procesoCarac->entradasCriticas = 'Materiales recepcionados para entrar a almacén, Guía de remisión de los materiales';
        $procesoCarac->actividadesRealizadas = 'Recepción de materiales, verificación, registro en inventario, aprobación de la factura de proveedor, almacenamiento.';
        $procesoCarac->medidasControl = 'Control de los materiales recepcionados, Control de inventarios';
        $procesoCarac->salidasCriticas = 'Materiales ubicados en el almacén, Reporte de utilización del almacén, Reportes de salidas de materiales';
        $procesoCarac->save();

        
    }
}
