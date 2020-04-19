@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row">        
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$subproceso->nombre}}
                    <a href="/empresa/{{$empresa_id}}/uNegocio/{{$uNegocio_id}}/mapa/{{$mapa_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Caracterización de proceso
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/createCarac" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Caracterización
                    </a>
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/createCarac2" style="float:right; margin-right:8px;" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Subir Archivo
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Fecha Creada</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($procesosCarac as $procesoCarac)
                            <tr data-id="{{ $procesoCarac->id }}">
                                <td>{{ $procesoCarac->id}}</td>
                                <td>
                                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showCarac/{{$procesoCarac->id}}">
                                        {{ $procesoCarac->nombre }}
                                    </a>
                                </td>
                                <td>{{ $procesoCarac->created_at->toDateString()}}</td>
                                <td>
                                    @if($procesoCarac->objetivo == '')
                                    <a href=""
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Descargar
                                    </a>
                                    @else
                                    
                                    @endif
                                    {!!Form::open(['action'=>['ProcesoPrioController@destroyCarac' , $procesoCarac->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!} 
                                 </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    Diagrama de flujo de procesos
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/createFlujo" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Flujo
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Fecha Creada</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        
                        @foreach($procesosFlujo as $procesoFlujo)
                            <tr data-id="{{ $procesoFlujo->id }}">
                                <td>{{ $procesoFlujo->id}}</td>
                                <td>
                                    
                                        {{ $procesoFlujo->nombre }}
                                    
                                </td>
                                <td>{{ $procesoFlujo->tipo}}</td>
                                <td>{{ $procesoFlujo->created_at->toDateString()}}</td>
                                <td>
                                    <a href="/flujo/download/{{$procesoFlujo->id}}"
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Descargar
                                    </a>
                                    {!!Form::open(['action'=>['ProcesoPrioController@destroyFlujo' , $procesoFlujo->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!} 
                                 </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    Diagrama de seguimiento de actividades procesos
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/createSeguimiento" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Seguimiento
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Flujo</th>
                            <th>Tipo</th>
                            <th>Fecha Creada</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        
                        @foreach($procesosSeguimiento as $procesoSeguimiento)
                            <tr data-id="{{ $procesoSeguimiento->id }}">
                                <td>{{ $procesoSeguimiento->id}}</td>
                                <td>
                                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showSeguimiento/{{$procesoSeguimiento->id}}">
                                        {{ $procesoSeguimiento->nombre }}
                                    </a>
                                </td>
                                <td>{{ $procesoSeguimiento->flujo}}</td>
                                <td>{{ $procesoSeguimiento->tipo}}</td>
                                <td>{{ $procesoSeguimiento->created_at->toDateString()}}</td>
                                <td>
                                    
                                    {!!Form::open(['action'=>['ProcesoPrioController@destroySeguimiento' , $procesoSeguimiento->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Eliminar',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!} 
                                 </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    Mapa Estrategico
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/createMapa" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Mapa
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Fecha Creada</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        
                        @foreach($procesosMapa as $procesoMapa)
                            <tr data-id="{{ $procesoMapa->id }}">
                                <td>{{ $procesoMapa->id}}</td>
                                <td>
                                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showMapa/{{$procesoMapa->id}}">
                                        {{ $procesoMapa->nombre }}
                                    </a>
                                </td>
                                <td>{{ $procesoMapa->created_at->toDateString()}}</td>
                                <td>
                                                                      
                                    {!!Form::open(['action'=>['ProcesoPrioController@destroyMapa' , $procesoMapa->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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