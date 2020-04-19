<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cliente;
use DB;

class ConsumidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id)
    {
        $consumidores = Cliente::where('empresa_id',$empresa_id)->orderBy('nivel', 'desc')->get();
        return view('consumidor.index',compact('consumidores','empresa_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id)
    {
        return view('consumidor.create',compact('empresa_id'));
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
            'ruc' => 'required|digits:11',
            'imagen' => 'image|nullable|max:1999',
            'nivel' => 'required',
            'dependencia' => 'required'
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
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $consumidor = new Cliente;
        $consumidor->nombre= $request->input('nombre');
        $consumidor->ruc= $request->input('ruc');
        $consumidor->empresa_id= $request->input('empresa_id');
        $consumidor->imagen= $fileNameToStore;
        $consumidor->nivel= $request->input('nivel');
        $consumidor->dependencia= $request->input('dependencia'); 

        $consumidor->save();

        return redirect()->route('consumidor_index', ['empresa_id' => $empresa_id])->with('success','Consumidor Creado');
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
        $consumidor= Cliente::find($id);
        $empresa_id= $consumidor->empresa_id;
        return view('consumidor.edit',compact('consumidor','empresa_id'));
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
            'ruc' => 'required',
            'imagen' => 'image|nullable|max:1999',
            'nivel' => 'required',
            'dependencia' => 'required'
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
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $consumidor = Cliente::find($id);
        $consumidor->nombre= $request->input('nombre');
        $consumidor->ruc= $request->input('ruc');
        $consumidor->empresa_id= $request->input('empresa_id');
        if($request->hasFile('imagen')){
            $consumidor->imagen=$fileNameToStore;
        }
        $consumidor->nivel= $request->input('nivel');
        $consumidor->dependencia= $request->input('dependencia'); 

        $consumidor->save();

        return redirect()->route('consumidor_index', ['empresa_id' => $consumidor->empresa_id])->with('success','Consumidor Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consumidorABorrar = Cliente::find($id);
        $empresa_id = $consumidorABorrar->empresa_id;
        $listaConsumidores = Cliente::where('empresa_id',$empresa_id)->get();
        $c=0;
        foreach ($listaConsumidores as $consumidor) {
            if($consumidor->dependencia == $id){
               $c++;           
            }
            
        }
        if($c==0){
            $consumidorABorrar->delete();
            return redirect()->route('consumidor_index', ['empresa_id' => $empresa_id])->with('success','Consumidor Eliminado');
        }else{
            return redirect()->route('consumidor_index', ['empresa_id' => $empresa_id])->with('error','No se puede eliminar el elemento seleccionado: Depende de otros');
            
        }

        

        
    }
    public function ajax(Request $request)
    {        
        $nivel=$request->nivel-1;
        $empresa_id=$request->empresaid;
        //$data=Consumidor::select('id','nombre')->where('nivel',$nivel)->get();
        //$condition= array('nivel' => $empresa_id );
        $data=Cliente::select('id','nombre')->where([
            ['nivel',$nivel],
            ['empresa_id',$empresa_id],
        ])->get();
        return response()->json($data);
    }
}
