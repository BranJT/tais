@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Matriz de Priorizacion
                    <a href="/empresa/{{$empresa_id}}/uNegocio/" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Listado de Matriz de Priorizacion
                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Matriz de Priorizacion
                    </a>                 
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Mapa de Proceso Relacionado</th>
                            <th>Fecha Creado</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($matrices as $matriz)
                            <tr data-id="{{ $matriz->id }}">
                                <td>{{ $matriz->id}}</td>                                
                                <td>
                                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/matriz/{{$matriz->id}}">
                                        {{ $matriz->nombre }}
                                    </a>
                                </td>
                                <td>{{ $matriz->mapa_proceso_id}}</td> 
                                <td>{{ $matriz->created_at->toDateString() }}</td>
                                <td>
                                    <a href="/matriz/edit/{{$matriz->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['MatrizController@destroy' , $matriz->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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
@endsection