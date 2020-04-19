@extends('layouts.app')

@section('content')
<div class="container">    
    <div class="row">        
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$subproceso->nombre}} - Seguimiento de Actividades
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Actividades
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showSeguimiento/{{$ps_id}}/createActividad" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Actividad
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Actividad</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($psDetalles as $psDetalle)
                            <tr data-id="{{ $psDetalle->id }}">
                                <td>{{ $psDetalle->id}}</td>
                                <td>
                                    {{ $psDetalle->actividad }}
                                    
                                </td>
                                <td>
                                    <a href=""
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['ProcesoPrioController@destroyActividad' , $psDetalle->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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
                    Actividades - Categoria
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Actividad</th>
                            <th>Tipo</th>
                            <th>Tiempo(min)</th>
                            <th>%Tiempo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total=0 ?>
                        @foreach($psDetalles as $psDetalle)
                            <?php $total=$total + $psDetalle->tiempo ?>
                        @endforeach
                        @foreach($psDetalles as $psDetalle)
                            <tr data-id="{{ $psDetalle->id }}">
                                <td>{{ $psDetalle->id}}</td>
                                <td>
                                    {{ $psDetalle->actividad }}
                                    
                                </td>
                                <td>{{ $psDetalle->tipo }}
                                </td>
                                <td>{{ $psDetalle->tiempo}}</td>
                                <td>{{ round(($psDetalle->tiempo/$total)*100,2) }}%</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    Por Actividad
                    </a>                 
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Tiempo</th>
                            <th>%Tiempo</th>
                        </tr>
                        </thead>
                        <tbody>                        
                        @foreach($agrupados as $agrupado)
                            <tr >
                                <td>{{ $agrupado->tipo }}
                                </td>
                                <td>{{ $agrupado->suma}}</td>
                                <td>{{ round(($agrupado->suma/$total)*100,2) }}%</td>
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