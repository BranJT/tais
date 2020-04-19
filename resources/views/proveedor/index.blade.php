@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Proveedor
                    <a href="/empresa/{{$empresa_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Lista de proveedores
                    <a href="/empresa/{{$empresa_id}}/proveedor/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Proveedor
                    </a>                 
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Nivel</th>
                            <th>Dependencia</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($proveedores as $proveedor)
                            <tr data-id="{{ $proveedor->id }}">
                                <td>{{ $proveedor->id}}</td>
                                <td>{{ $proveedor->nombre }}</td>
                                <td align="center"><img style="width:100px" src="/storage/images/{{$proveedor->imagen}}"></td>
                                <td>{{ $proveedor->nivel }}</td>
                                <td>
                                    @if($proveedor->dependencia==0)
                                        {{'Empresa'}}
                                    @else
                                        {{$proveedor->dependencia}}    
                                    @endif
                                </td>
                                <td>
                                    <a href="/proveedor/edit/{{$proveedor->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['ProveedorController@destroy' , $proveedor->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!} 
                                 </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

