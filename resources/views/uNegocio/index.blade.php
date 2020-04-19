@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Unidad de Negocio
                    <a href="/empresa/{{$empresa_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Lista de Unidades de Negocio
                    <a href="/empresa/{{$empresa_id}}/uNegocio/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Unidad de Negocio
                    </a>                 
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Fecha Creada</th>
                            <th class="nosort">Detalle</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($uNegocios as $uNegocio)
                            <tr data-id="{{ $uNegocio->id }}">
                                <td>{{ $uNegocio->id}}</td>
                                <td>{{ $uNegocio->nombre }}</td>
                                <td>{{ $uNegocio->descripcion }}</td>
                                <td>{{ $uNegocio->created_at->toDateString()}}</td>
                                <td>
                                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio->id}}/mapa"
                                       class="btn btn-primary">
                                        <i class="fa fa-edit"></i> Mapa Procesos
                                    </a>
                                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio->id}}/matriz"
                                       class="btn btn-info">
                                        <i class="fa fa-edit"></i> Matriz Priorizacion
                                    </a>
                                </td>
                                <td>
                                    <a href="/uNegocio/edit/{{$uNegocio->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['UnidadNegocioController@destroy' , $uNegocio->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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