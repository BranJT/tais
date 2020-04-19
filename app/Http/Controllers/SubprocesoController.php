<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Subproceso;
use Illuminate\Support\Facades\DB;

class SubprocesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id)
    {
        $subprocesos = Subproceso::all();
        return view('subproceso.index',compact('subprocesos','empresa_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id)
    {
        $procesos = DB::table('proceso')->where('empresa_id',$empresa_id)->select('id', 'nombre')->get();
        return view('subproceso.create', compact('procesos','empresa_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$empresa_id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'proceso' => 'required'
        ]);

        $subproceso = new Subproceso;
        $subproceso->proceso_id= $request->input('proceso');
        $subproceso->nombre= $request->input('nombre'); 

        $subproceso->save();

        return redirect()->route('subproceso_index', ['empresa_id' => $empresa_id])->with('success','Subproceso Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subproceso= Subproceso::find($id);
        $empresa_id= $subproceso->getProcesoPadre()->empresa_id;
        $procesos = DB::table('proceso')->where('empresa_id',$empresa_id)->select('id', 'nombre')->get();
        return view('subproceso.edit',compact('subproceso','empresa_id','procesos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'proceso' => 'required'
        ]);

        $subproceso = Subproceso::find($id);
        $subproceso->proceso_id= $request->input('proceso');
        $empresa_id= $request->input('empresa_id');
        $subproceso->nombre= $request->input('nombre');

        $subproceso->save();

        return redirect()->route('subproceso_index', ['empresa_id' =>$empresa_id])->with('success','Subproceso Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subproceso = Subproceso::find($id);
        $empresa_id= $subproceso->getProcesoPadre()->empresa_id;
        $subproceso->delete();
        return redirect()->route('subproceso_index', ['empresa_id' => $empresa_id])->with('success','Subproceso Eliminado');
        
    }
}
