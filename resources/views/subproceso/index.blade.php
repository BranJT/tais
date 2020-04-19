@extends('layouts.app')

@section('content')
<div class="container">	
    <div class="row">    	
        <div class="col-md-8 col-md-offset-2">
        	@include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                	Subprocesos
                    <a href="/empresa/{{$empresa_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Lista de Subprocesos
                    <a href="/empresa/{{$empresa_id}}/subproceso/create" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Subproceso
                    </a>                 
                </div>
                <div class="box-body">
					<table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Subproceso</th>
                            <th>Proceso Padre</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($subprocesos as $subproceso)
                            <tr data-id="{{ $subproceso->id }}">
                                <?php $id= $subproceso->id ?>
                                <td>{{ $subproceso->id}}</td>
                                <td>{{ $subproceso->nombre }}</td>
                                <td>{{ $subproceso->getProcesoPadre()->nombre }}</td>
                                <td>
                                    <a href="/subproceso/edit/{{$subproceso->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['SubprocesoController@destroy' , $subproceso->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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