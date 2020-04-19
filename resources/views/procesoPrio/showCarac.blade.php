@extends('layouts.app')
<?php use App\Model\TableroControl;?>
@section('content')
<div class="container">    
    <div class="row">        
        <div class="col-md-8 col-md-offset-2">
            @include('inc.messages')
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$subproceso->nombre}}
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}" style="float:right;">Volver</a>
                </div>
                <div class="panel-body">
                    Caracterizacion del Proceso
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th scope="col">Nombre</th>
                          <td scope="col">
                            {{$subproceso->nombre}}
                          </td>
                          <th scope="col">Responsable</th>
                          <td scope="col">{{$procesoCarac->responsable}}</td>
                        </tr>
                        <tr>
                          <th scope="col">Objetivos</th>
                          <td scope="col">
                            {{$procesoCarac->objetivo}}
                          </td>
                          <th scope="col">Alcance</th>
                          <td scope="col">{{$procesoCarac->alcance}}</td>
                        </tr>
                        <tr>
                          <th scope="col">Requisitos Normativos</th>
                          <td scope="col">
                            {{$procesoCarac->requisitosNormativos}}
                          </td>
                          <th scope="col">Requisitos Aplicables</th>
                          <td scope="col">{{$procesoCarac->requisitosAplicable}}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    Descripcion del Proceso
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                      <tbody>
                        <tr class="table-primary">
                          <th scope="col">Proceso Entrada</th>
                          <th scope="col">Entradas Criticas</th>
                          <th scope="col">Actividades Realizadas</th>
                          <th scope="col">Medidas de control</th>
                          <th scope="col">Salidas Criticas</th>
                        </tr>
                        <tr>
                          <td scope="col">{{$subproceso->nombre}}</td>
                          <td scope="col">{{$procesoCarac->entradasCriticas}}</td>
                          <td scope="col">{{$procesoCarac->actividadesRealizadas}}</td>
                          <td scope="col">{{$procesoCarac->medidasControl}}</td>
                          <td scope="col">{{$procesoCarac->salidasCriticas}}</td>
                        </tr>
                      </tbody>
                      
                    </table>
                </div>
                <div class="panel-body">
                    Evidencias e indicadores
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th scope="col">Registros que se mantienen</th>
                          <th scope="col">Indicadores que se evaluan</th>
                        </tr>
                        @foreach($procesosIndicador as $procesoIndicador)
                            <tr>
                                <td>{{ $procesoIndicador->registro}}</td>
                                <td>
                                    {{ $procesoIndicador->indicador}}
                                </td>
                        @endforeach
                      </tbody>
                      
                    </table>
                </div>
                <div class="panel-body">
                    Indicadores
                    <a href="/empresa/{{$empresa_id}}/mapa/{{$mapa_id}}/subproceso/{{$subproceso_id}}/showCarac/{{$pc_id}}/createIndicador" style="float:right" class="btn btn-sm btn-success">
                        <i class="fa fa-plus"></i>Añadir Indicador
                    </a>      
                </div>
                <div class="box-body">
                    <table id="listado" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Indicador</th>
                            <th>Fecha Creada</th>
                            <th class="nosort">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>                        

                        @foreach($procesosIndicador as $procesoIndicador)
                            <tr data-id="{{ $procesoIndicador->id }}">
                                <td>{{ $procesoIndicador->id}}</td>
                                <td>
                                  <?php $tablero= TableroControl::where('pc_detalle_id',$procesoIndicador->id)->get();

                                  ?>
                                  @if(count($tablero)>0)
                                  <a href="/empresa/{{$empresa_id}}/showCarac/{{$pc_id}}/indicador/{{$procesoIndicador->id}}/tablero/{{$tablero[0]->id}}">
                                    {{ $procesoIndicador->indicador}}
                                  </a>
                                  @else
                                    {{ $procesoIndicador->indicador}}
                                  @endif
                                </td>
                                <td>{{ $procesoIndicador->created_at->toDateString()}}</td>
                                <td>
                                    @if(count($tablero)>0)
                                    
                                    @else
                                      <a href="/empresa/{{$empresa_id}}/showCarac/{{$pc_id}}/indicador/{{$procesoIndicador->id}}/createTablero"
                                       class="btn btn-primary">
                                        <i class="fa fa-edit"></i>Tablero Control
                                    </a>
                                    @endif
                                                                    
                                    <a href=""
                                       class="btn btn-warning">
                                        <i class="fa fa-edit"></i> Editar
                                    </a>
                                    {!!Form::open(['action'=>['ProcesoPrioController@destroyIndicador' , $procesoIndicador->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
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