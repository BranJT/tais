<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MatrizProceso;
use App\Model\MapaProceso;
use App\Model\Subproceso;
use App\Model\ProcesoCaracterizacion;
use App\Model\PCdetalle;
use App\Model\ProcesoFlujo;
use App\Model\ProcesoSeguimiento;
use App\Model\PSdetalle;
use App\Model\ProcesoMapa;
use App\Model\TableroControl;
use DB;

class ProcesoPrioController extends Controller
{

    public function showPrincipal($empresa_id,$mapa_id,$subproceso_id)
    {
        $subproceso= Subproceso::find($subproceso_id);
        $procesosCarac = ProcesoCaracterizacion::where([
            ['mapa_proceso_id',$mapa_id],
            ['subproceso_id',$subproceso_id]
        ])->orderBy('created_at', 'desc')->get();
        $procesosFlujo = ProcesoFlujo::where([
            ['mapa_proceso_id',$mapa_id],
            ['subproceso_id',$subproceso_id]
        ])->orderBy('created_at', 'asc')->get();
        $procesosSeguimiento = ProcesoSeguimiento::where([
            ['mapa_proceso_id',$mapa_id],
            ['subproceso_id',$subproceso_id]
        ])->orderBy('created_at', 'asc')->get();
        $procesosMapa = ProcesoMapa::where([
            ['mapa_proceso_id',$mapa_id],
            ['subproceso_id',$subproceso_id]
        ])->orderBy('created_at', 'asc')->get();
        $mapa=MapaProceso::find($mapa_id);
        $uNegocio_id=$mapa->unidad_negocio_id;
        //$subprocesos = Subproceso::where('proceso_id',$procesoPrio->proceso_id)->get();
        //$subprocesos = Subproceso::where('proceso_id',1)->get();
        return view('procesoPrio.showPrincipal',compact('subproceso','procesosCarac','procesosFlujo','procesosSeguimiento','procesosMapa','empresa_id','mapa_id','subproceso_id','uNegocio_id'));
    }

    public function createCarac($empresa_id,$mapa_id,$subproceso_id)
    {
    	//$procesoPrio_id=1;
    	//$subproceso_id=2;
    	return view('procesoPrio.createCarac',compact('empresa_id','mapa_id','subproceso_id'));
    }
    public function createCarac2($empresa_id,$mapa_id,$subproceso_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createCarac2',compact('empresa_id','mapa_id','subproceso_id'));
    }

    public function storeCarac(Request $request)
    {
    	$this->validate($request,[
            'nombre' => 'required',
            'responsable' => 'required',
            'objetivo' => 'required',
            'alcance' => 'required',
            'requisitosNormativos' => 'required',
            'requisitosAplicable' => 'required',
            'entradasCriticas' => 'required',
            'actividadesRealizadas' => 'required',
            'medidasControl' => 'required',
            'salidasCriticas' => 'required'
            
        ]);

        $procesoCarac = new ProcesoCaracterizacion;
        $procesoCarac->mapa_proceso_id= $request->input('mapa_id');
        $procesoCarac->subproceso_id= $request->input('subproceso_id');
        $procesoCarac->nombre= $request->input('nombre');
        $procesoCarac->responsable= $request->input('responsable');
        $procesoCarac->objetivo= $request->input('objetivo');
        $procesoCarac->alcance= $request->input('alcance');
        $procesoCarac->requisitosNormativos= $request->input('requisitosNormativos');
        $procesoCarac->requisitosAplicable= $request->input('requisitosAplicable');
        $procesoCarac->entradasCriticas= $request->input('entradasCriticas');
        $procesoCarac->actividadesRealizadas= $request->input('actividadesRealizadas');
        $procesoCarac->medidasControl= $request->input('medidasControl');
        $procesoCarac->salidasCriticas= $request->input('salidasCriticas');

        $procesoCarac->save();

        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id')])->with('success','Caracterizacion Creada');
    }
    public function storeCarac2(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'responsable' => 'file|required'
            
        ]);

        if($request->hasFile('responsable')){
            //Get file name with the extension
            $filenameWithExt= $request->file('responsable')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension= $request->file('responsable')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //uploadImage
            $path =$request->file('responsable')->storeAs('public/images',$fileNameToStore);
        }

        $procesoCarac = new ProcesoCaracterizacion;
        $procesoCarac->mapa_proceso_id= $request->input('mapa_id');
        $procesoCarac->subproceso_id= $request->input('subproceso_id');
        $procesoCarac->nombre= $request->input('nombre');
        $procesoCarac->responsable= $fileNameToStore;
        $procesoCarac->objetivo= '';
        $procesoCarac->alcance= '';
        $procesoCarac->requisitosNormativos= '';
        $procesoCarac->requisitosAplicable= '';
        $procesoCarac->entradasCriticas='';
        $procesoCarac->actividadesRealizadas= '';
        $procesoCarac->medidasControl= '';
        $procesoCarac->salidasCriticas= '';

        $procesoCarac->save();

        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id')])->with('success','Caracterizacion Creada');
    }
    public function showCarac($empresa_id,$mapa_id,$subproceso_id,$pc_id)
    {
    	$subproceso = Subproceso::find($subproceso_id);
        $procesoCarac = ProcesoCaracterizacion::find($pc_id);
        $procesosIndicador = PCdetalle::where('proceso_caracterizacion_id',$pc_id)->get();
        //$subproceso_id=2;
        return view('procesoPrio.showCarac',compact('subproceso','procesoCarac','procesosIndicador','empresa_id','mapa_id','subproceso_id','pc_id'));
    }

    public function destroyCarac($id)
    {
        $procesoCarac = ProcesoCaracterizacion::find($id);
        $mapa_id = $procesoCarac->mapa_proceso_id;
        $subproceso_id = $procesoCarac->subproceso_id;
        $mapaProceso = MapaProceso::find($mapa_id);
        $empresa_id=$mapaProceso->empresa_id;
        $procesoCarac->delete();
        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $empresa_id,'mapa_id' => $mapa_id,'subproceso_id' => $subproceso_id])->with('success','Caracterizacion Eliminada');
    }

    public function createIndicador($empresa_id,$mapa_id,$subproceso_id,$pc_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createIndicador',compact('empresa_id','mapa_id','subproceso_id','pc_id'));
    }

    public function storeIndicador(Request $request)
    {
        $this->validate($request,[
            'registro' => 'required',
            'indicador' => 'required',
            
        ]);

        $pc_detalle = new PCdetalle;
        $pc_detalle->proceso_caracterizacion_id= $request->input('pc_id');
        $pc_detalle->registro= $request->input('registro');
        $pc_detalle->indicador= $request->input('indicador');

        $pc_detalle->save();

        return redirect()->route('carac_index', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id'),'pc_id' => $request->input('pc_id')])->with('success','Indicador Creado');
    }

    public function destroyIndicador($id)
    {
        $indicador = PCdetalle::find($id);
        $pc_id = $indicador->proceso_caracterizacion_id;
        $procesoCarac = ProcesoCaracterizacion::find($pc_id);
        $mapa_id = $procesoCarac->mapa_proceso_id;
        $subproceso_id = $procesoCarac->subproceso_id;
        $mapaProceso = MapaProceso::find($mapa_id);
        $empresa_id=$mapaProceso->empresa_id;
        $indicador->delete();
        return redirect()->route('carac_index', ['empresa_id' => $empresa_id,'mapa_id' => $mapa_id,'subproceso_id' => $subproceso_id ,'pc_id' => $pc_id])->with('success','Indicador Eliminada');
    }











    public function createFlujo($empresa_id,$mapa_id,$subproceso_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createFlujo',compact('empresa_id','mapa_id','subproceso_id'));
    }

    public function storeFlujo(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'flujo' => 'file|required|max:1999'
            
        ]);
        
        if($request->hasFile('flujo')){
            //Get file name with the extension
            $filenameWithExt= $request->file('flujo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension= $request->file('flujo')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //uploadImage
            $path =$request->file('flujo')->storeAs('public/images',$fileNameToStore);
        }

        $procesoFlujo = new ProcesoFlujo;
        $procesoFlujo->mapa_proceso_id= $request->input('mapa_id');
        $procesoFlujo->subproceso_id= $request->input('subproceso_id');
        $procesoFlujo->nombre= $request->input('nombre');
        $procesoFlujo->tipo= $request->input('tipo');
        $procesoFlujo->flujo= $fileNameToStore;
        $procesoFlujo->save();

        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id')])->with('success','Flujo Creado');
    }

    public function downloadFlujo($proceso_flujo_id)
    {
        $procesoFlujo= ProcesoFlujo::find($proceso_flujo_id);
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path()."/storage/images/".$procesoFlujo->flujo;

        $headers = [
                  'Content-Type' => 'application/bpm',
               ];

        return response()->download($file, $procesoFlujo->flujo, $headers);
    }
    public function destroyFlujo($id)
    {
        $procesoFlujo = ProcesoFlujo::find($id);
        $mapa_id = $procesoFlujo->mapa_proceso_id;
        $subproceso_id = $procesoFlujo->subproceso_id;
        $mapaProceso = MapaProceso::find($mapa_id);
        $empresa_id=$mapaProceso->empresa_id;
        $procesoFlujo->delete();
        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $empresa_id,'mapa_id' => $mapa_id,'subproceso_id' => $subproceso_id])->with('success','Flujo Eliminado');
    }






    public function createSeguimiento($empresa_id,$mapa_id,$subproceso_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createSeguimiento',compact('empresa_id','mapa_id','subproceso_id'));
    }

    public function storeSeguimiento(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'flujo' => 'required',
            'tipo' => 'required'
            
        ]);

        $procesoSeguimiento = new ProcesoSeguimiento;
        $procesoSeguimiento->mapa_proceso_id= $request->input('mapa_id');
        $procesoSeguimiento->subproceso_id= $request->input('subproceso_id');
        $procesoSeguimiento->nombre= $request->input('nombre');
        $procesoSeguimiento->flujo= $request->input('flujo');
        $procesoSeguimiento->tipo= $request->input('tipo');
        $procesoSeguimiento->save();

        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id')])->with('success','Seguimiento Creado');
    }
    public function showSeguimiento($empresa_id,$mapa_id,$subproceso_id,$ps_id)
    {
        $psDetalles = PSdetalle::where('proceso_seguimiento_id',$ps_id)->get();
        $subproceso = Subproceso::find($subproceso_id);
        //select actividad, tipo ,SUM(tiempo) from ps_detalle GROUP BY tipo
        $agrupados = DB::table('ps_detalle')
                ->select('tipo' ,DB::raw('SUM(tiempo) as suma'))
                ->where('proceso_seguimiento_id',$ps_id)
                ->groupBy('tipo')
                ->get();

        return view('procesoPrio.showSeguimiento', compact('psDetalles','subproceso','agrupados','empresa_id','mapa_id','subproceso_id','ps_id'));
    }

    public function destroySeguimiento($id)
    {
        $procesoSeguimiento = ProcesoSeguimiento::find($id);
        $mapa_id = $procesoSeguimiento->mapa_proceso_id;
        $subproceso_id = $procesoSeguimiento->subproceso_id;
        $mapaProceso = MapaProceso::find($mapa_id);
        $empresa_id=$mapaProceso->empresa_id;
        $procesoSeguimiento->delete();
        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $empresa_id,'mapa_id' => $mapa_id,'subproceso_id' => $subproceso_id])->with('success','Seguimiento Eliminado');
    }

    public function createActividad($empresa_id,$mapa_id,$subproceso_id,$ps_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createActividad',compact('empresa_id','mapa_id','subproceso_id','ps_id'));
    }

    public function storeActividad(Request $request)
    {
        $this->validate($request,[
            'actividad' => 'required',
            'tipo' => 'required',
            'tiempo' => 'required'
            
        ]);

        $ps_detalle = new PSdetalle;
        $ps_detalle->proceso_seguimiento_id= $request->input('ps_id');
        $ps_detalle->actividad= $request->input('actividad');
        $ps_detalle->tipo= $request->input('tipo');
        $ps_detalle->tiempo= $request->input('tiempo');
        $ps_detalle->save();

        return redirect()->route('seguimiento_index', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id'),'ps_id' => $request->input('ps_id')])->with('success','Actividad Creada');
    }

    public function destroyActividad($id)
    {
        $actividad = PSdetalle::find($id);
        $ps_id = $actividad->proceso_seguimiento_id;
        $procesoSeguimiento = ProcesoSeguimiento::find($ps_id);
        $mapa_id = $procesoSeguimiento->mapa_proceso_id;
        $subproceso_id = $procesoSeguimiento->subproceso_id;
        $mapaProceso = MapaProceso::find($mapa_id);
        $empresa_id=$mapaProceso->empresa_id;
        $actividad->delete();
        return redirect()->route('seguimiento_index', ['empresa_id' => $empresa_id,'mapa_id' => $mapa_id,'subproceso_id' => $subproceso_id ,'ps_id' => $ps_id])->with('success','Actividad Eliminada');
    }

    //MAPA ESTRATEGICO

    public function createMapa($empresa_id,$mapa_id,$subproceso_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createMapa',compact('empresa_id','mapa_id','subproceso_id'));
    }

    public function showMapa($empresa_id,$mapa_id,$subproceso_id,$pm_id)
    {
        $subproceso = Subproceso::find($subproceso_id);
        $procesoMapa = ProcesoMapa::find($pm_id);
        //$subproceso_id=2;
        return view('procesoPrio.showMapa',compact('subproceso','procesoMapa','empresa_id','mapa_id','subproceso_id','pm_id'));
    }    

    public function storeMapa(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'imagen' => 'image|required|max:1999'
            
        ]);
        
        if($request->hasFile('imagen')){
            //Get file name with the extension
            $filenameWithExt= $request->file('imagen')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension= $request->file('imagen')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //uploadImage
            $path =$request->file('imagen')->storeAs('public/images',$fileNameToStore);
        }

        $procesoMapa = new ProcesoMapa;
        $procesoMapa->mapa_proceso_id= $request->input('mapa_id');
        $procesoMapa->subproceso_id= $request->input('subproceso_id');
        $procesoMapa->nombre= $request->input('nombre');
        $procesoMapa->imagen= $fileNameToStore;
        $procesoMapa->save();

        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $request->input('mapa_id'),'subproceso_id' => $request->input('subproceso_id')])->with('success','Flujo Creado');
    }

    public function destroyMapa($id)
    {
        $procesoMapa = ProcesoMapa::find($id);
        $mapa_id = $procesoMapa->mapa_proceso_id;
        $subproceso_id = $procesoMapa->subproceso_id;
        $mapaProceso = MapaProceso::find($mapa_id);
        $empresa_id=$mapaProceso->empresa_id;
        $procesoMapa->delete();
        return redirect()->route('subprocesoPrio_show', ['empresa_id' => $empresa_id,'mapa_id' => $mapa_id,'subproceso_id' => $subproceso_id])->with('success','Seguimiento Eliminado');
    }

    //TAblero de control

    public function showTablero($empresa_id,$pc_id,$indicador_id,$tablero_id)
    {
        $indicador = PCdetalle::find($indicador_id);
        $tablero = TableroControl::find($tablero_id);
        //$subproceso_id=2;
        return view('procesoPrio.showTablero',compact('indicador','tablero','empresa_id','pc_id','indicador_id','tablero_id'));
    }

    public function createTablero($empresa_id,$pc_id,$indicador_id)
    {
        //$procesoPrio_id=1;
        //$subproceso_id=2;
        return view('procesoPrio.createTablero',compact('empresa_id','pc_id','indicador_id'));
    }

    public function storeTablero(Request $request)
    {
        $procesoCarac= ProcesoCaracterizacion::find($request->input('pc_id'));
        $this->validate($request,[
            'objetivo' => 'required',
            'metaRojo' => 'required',
            'metaAmarillo' => 'required',
            'metaVerde' => 'required',
            'iniciativas' => 'required',
            'responsable' => 'required'
            
        ]);

        $tableroControl = new TableroControl;
        $tableroControl->pc_detalle_id= $request->input('indicador_id');
        $tableroControl->objetivo= $request->input('objetivo');
        $tableroControl->metaRojo= $request->input('metaRojo');
        $tableroControl->metaAmarillo= $request->input('metaAmarillo');
        $tableroControl->metaVerde= $request->input('metaVerde');
        $tableroControl->iniciativas= $request->input('iniciativas');
        $tableroControl->responsable= $request->input('responsable');
        $tableroControl->save();

        return redirect()->route('carac_index', ['empresa_id' => $request->input('empresa_id'),'mapa_id' => $procesoCarac->mapa_proceso_id ,'subproceso_id' => $procesoCarac->subproceso_id,'pc_id' => $request->input('pc_id')])->with('success','Tablero Creado');
    }


}