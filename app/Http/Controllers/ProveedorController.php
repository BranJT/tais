<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa_id)
    {
        $proveedores = Proveedor::where('empresa_id',$empresa_id)->orderBy('nivel', 'desc')->get();
        return view('proveedor.index',compact('proveedores','empresa_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empresa_id)
    {
        return view('proveedor.create',compact('empresa_id'));
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

        $proveedor = new Proveedor;
        $proveedor->nombre= $request->input('nombre');
        $proveedor->empresa_id= $request->input('empresa_id');
        $proveedor->imagen= $fileNameToStore;
        $proveedor->nivel= $request->input('nivel');
        $proveedor->dependencia= $request->input('dependencia'); 

        $proveedor->save();

        return redirect()->route('proveedor_index', ['empresa_id' => $empresa_id])->with('success','Proveedor Creado');   
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
        $proveedor= Proveedor::find($id);
        $empresa_id= $proveedor->empresa_id;
        return view('proveedor.edit',compact('proveedor','empresa_id'));        
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

        $proveedor = Proveedor::find($id);
        $proveedor->nombre= $request->input('nombre');
        $proveedor->empresa_id= $request->input('empresa_id');
        if($request->hasFile('imagen')){
            $proveedor->imagen=$fileNameToStore;
        }
        $proveedor->nivel= $request->input('nivel');
        $proveedor->dependencia= $request->input('dependencia'); 

        $proveedor->save();

        return redirect()->route('proveedor_index', ['empresa_id' => $proveedor->empresa_id])->with('success','Proveedor Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedorABorrar = Proveedor::find($id);
        $empresa_id = $proveedorABorrar->empresa_id;
        $listaProveedores = Proveedor::where('empresa_id',$empresa_id)->get();
        $c=0;
        foreach ($listaProveedores as $proveedor) {
            if($proveedor->dependencia == $id){
               $c++;           
            }
            
        }
        if($c==0){
            $proveedorABorrar->delete();
            return redirect()->route('proveedor_index', ['empresa_id' => $empresa_id])->with('success','Proveedor Eliminado');
        }else{
            return redirect()->route('proveedor_index', ['empresa_id' => $empresa_id])->with('error','No se puede eliminar el elemento seleccionado: Depende de otros');
            
        }
        $proveedor->delete();

        

        
    }
    public function ajax(Request $request)
    {
        $nivel=$request->nivel-1;
        $empresa_id=$request->empresaid;
        $data=Proveedor::select('id','nombre')->where([
            ['nivel',$nivel],
            ['empresa_id',$empresa_id],
        ])->get();
        return response()->json($data);
    }
}
